document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('isNewSession').value = "false";

    const names = [
        { displayName: "Window World of Altoona", value: "ww-blue" },
        { displayName: "Window World of Binghamton", value: "ww-blue" },
        { displayName: "RoofWorks USA", value: "rwu" }
    ];
    const searchInput = document.getElementById('default-search');
    const dropdown = document.getElementById('autocomplete-dropdown');

    // Fetch default client name from the server
    fetch('getDefaultClient.php')
        .then(response => response.text())
        .then(defaultClient => {
            // Set the default value for the search input
            searchInput.value = defaultClient;
            if (defaultClient === 'Window World of Altoona') {
                document.documentElement.setAttribute('data-set-theme', 'ww-blue');
            } else if (defaultClient === 'RoofWorks USA') {
                document.documentElement.setAttribute('data-set-theme', 'rwu');
            }
            fetchClientInfo(defaultClient, false);
        })
        .catch(err => console.error(err));

    function clearDropdown(dropdown) {
        dropdown.style.opacity = '0';
        dropdown.style.transform = 'translateY(-10px)';
        setTimeout(() => {
            dropdown.classList.add('hidden');
            dropdown.innerHTML = '';
        }, 300);
    }

    function fetchAndUpdateClientContent() {
        fetch('fetchClientContent.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('client-content').innerHTML = data;
                window.themeChange(false);
            })
            .catch(err => console.error(err));
    }

    function handleItemClick(event, searchInput, dropdown) {
        const selectedItem = event.target.closest('.searchBox');
        const selectedName = selectedItem.textContent.trim();
        searchInput.value = selectedName;
        clearDropdown(dropdown);
        fetchClientInfo(selectedName);
    }

    function fetchClientInfo(name, updateActiveClient = true) {
        fetch(`getClientInfo.php?name=${encodeURIComponent(name)}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    console.error(data.error);
                } else {
                    updateClientInfo(data, name);
                    if (updateActiveClient) {
                        // AJAX Call to Update PHP Session
                        fetch('updateActiveClient.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: `clientName=${name}`
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status !== 'success') {
                                    console.error(data.message);
                                }
                                fetchAndUpdateClientContent();
                            })
                            .catch(err => console.error(err));
                    }

                    // Update the data-set-theme attribute of the dropdown items
                    const dropdownItems = document.querySelectorAll('.searchBox');
                    dropdownItems.forEach(item => {
                        const nameObj = names.find(obj => obj.displayName === item.textContent.trim());
                        if (nameObj) {
                            item.setAttribute('data-set-theme', nameObj.value);
                        }
                    });
                }
            })
            .catch(err => console.error(err));
    }

    function updateClientInfo(data, name) {
        document.getElementById('client-name').textContent = name;
        document.getElementById('client-address').textContent = data.address;
        document.getElementById('client-phone').textContent = data.phone;
        document.getElementById('client-email').textContent = data.email;
        document.getElementById('client-website').textContent = data.website;
        document.getElementById('client-logo').setAttribute('src', `img/logos/${data.logo}`);
    }

    fetchAndUpdateClientContent();

    searchInput.addEventListener('input', function () {
        dropdown.innerHTML = '';
        const searchTerm = searchInput.value.toLowerCase();
        const matchingNames = names.filter(nameObj => nameObj.displayName.toLowerCase().includes(searchTerm));

        if (matchingNames.length) {
            dropdown.classList.remove('hidden');
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
        } else {
            clearDropdown(dropdown);
        }

        matchingNames.forEach(nameObj => {
            const item = document.createElement('div');
            item.innerHTML = `<img src="img/logos/ww_search_icon.svg" alt="Logo" class="w-5 h-5 mr-2 opacity-20 hover:opacity-100 transition-opacity duration-300"> ${nameObj.displayName}`;
            item.className = `p-2 cursor-pointer searchBox flex items-center`;
            item.setAttribute('data-set-theme', nameObj.value);
            item.setAttribute('data-act-class', 'ACTIVECLASS');
            item.addEventListener('click', (event) => handleItemClick(event, searchInput, dropdown));
            dropdown.appendChild(item);
        });

        // Refresh the theme-change library after creating the dropdown
        window.themeChange(false);
    });

    searchInput.addEventListener('focus', function () {
        document.querySelector('.logo-fade-in').classList.add('logo-active');
    });

    searchInput.addEventListener('blur', function () {
        document.querySelector('.logo-fade-in').classList.remove('logo-active');
    });

    document.addEventListener('click', function (event) {
        if (!dropdown.contains(event.target) && event.target !== searchInput) {
            clearDropdown(dropdown);
        }
    });
});
