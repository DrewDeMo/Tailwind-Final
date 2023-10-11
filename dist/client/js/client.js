// Utility to clear dropdown
function clearDropdown(dropdown) {
    dropdown.innerHTML = '';
    dropdown.style.opacity = '0';
    dropdown.style.transform = 'translateY(-10px)';
    setTimeout(() => {
        dropdown.classList.add('hidden');
    }, 300);
}

// New function to fetch and update client content
function fetchAndUpdateClientContent() {
    fetch('fetchClientContent.php')
        .then(response => response.text())
        .then(html => {
            const clientContentDiv = document.getElementById('clientContent');
            clientContentDiv.innerHTML = html;
        })
        .catch(err => console.error(err));
}

// Handle dropdown item click
function handleItemClick(event, searchInput, dropdown) {
    const name = event.currentTarget.textContent.trim();
    searchInput.value = name;
    searchInput.style.textAlign = 'center';

    clearDropdown(dropdown);
    fetchClientInfo(name);

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

// Fetch client information
function fetchClientInfo(name) {
    fetch(`getClientInfo.php?name=${encodeURIComponent(name)}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
            } else {
                updateClientInfo(data, name);
            }
        })
        .catch(err => console.error(err));
}

// Update client information
function updateClientInfo(data, selectedName) {
    const displayName = selectedName.replace(/^(Window World of )+/, '');
    document.querySelector('.w-1\\/2 > h1').textContent = displayName;
    document.getElementById('clientAddress').textContent = data.location;
    document.getElementById('clientPhone').textContent = data.phone;

    const ownersList = document.querySelector('.w-2\\/3 > ul');
    ownersList.innerHTML = '';
    data.owners.forEach(owner => {
        const li = document.createElement('li');
        li.className = 'text-sm flex items-center';
        li.innerHTML = `<i class='las la-user-circle headerText text-lg mr-2'></i>${owner}`;
        ownersList.appendChild(li);
    });

    document.getElementById('clientLogo').src = data.logo;
    document.getElementById('clientLogoSmall').src = data.search_icon;
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('isNewSession').value = "false";

    const names = [
        { displayName: "Window World of Altoona", value: "ww-blue" },
        { displayName: "Window World of Binghamton", value: "ww-blue" },
        { displayName: "RoofWorks USA", value: "rwu" }
    ];
    const searchInput = document.getElementById('default-search');
    const dropdown = document.getElementById('autocomplete-dropdown');

    // New function to fetch and update client content
    function fetchAndUpdateClientContent() {
        fetch('fetchClientContent.php')
            .then(response => response.text())
            .then(html => {
                const clientContentDiv = document.getElementById('clientContent');
                clientContentDiv.innerHTML = html;

                // Dispatch the clientSwitched event here
                const event = new Event('clientSwitched');
                document.dispatchEvent(event);
            })
            .catch(err => console.error(err));
    }


    // Fetch default client name from the server
    fetch('getDefaultClient.php')
        .then(response => response.text())
        .then(defaultClient => {
            // Set the default value for the search input
            searchInput.value = defaultClient;
        })
        .catch(err => console.error(err));

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
