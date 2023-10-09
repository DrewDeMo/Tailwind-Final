document.addEventListener('DOMContentLoaded', function () {
    const names = [
        "Window World of Altoona",
        "Window World of Binghamton",
        "Window World of Carolinas",
        "Window World of Lubbock",
        "RoofWorks USA",
        "Cannon Pharmacy"
    ];

    const searchInput = document.getElementById('default-search');
    const dropdown = document.getElementById('autocomplete-dropdown');
    const logoImage = document.getElementById('clientLogo');
    const clientLogoImage = document.getElementById('clientLogoSidebar');

    searchInput.addEventListener('input', function () {
        dropdown.innerHTML = '';
        const searchTerm = searchInput.value.toLowerCase();
        const matchingNames = names.filter(name => name.toLowerCase().includes(searchTerm));

        if (matchingNames.length) {
            dropdown.classList.remove('hidden');
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
        } else {
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                dropdown.classList.add('hidden');
            }, 300);
        }

        matchingNames.forEach(name => {
            const item = document.createElement('div');
            item.innerHTML = `<img src="img/logos/ww_search_icon.svg" alt="Logo" class="w-5 h-5 mr-2 opacity-20 hover:opacity-100 transition-opacity duration-300"> ${name}`;
            item.className = 'p-2 cursor-pointer hover:bg-gray-100 flex items-center';

            item.addEventListener('click', function () {
                searchInput.value = name;
                dropdown.innerHTML = '';
                dropdown.style.opacity = '0';
                dropdown.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 300);

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
            });

            dropdown.appendChild(item);
        });
    });

    searchInput.addEventListener('focus', function () {
        document.querySelector('.logo-fade-in').classList.add('logo-active');
    });

    searchInput.addEventListener('blur', function () {
        document.querySelector('.logo-fade-in').classList.remove('logo-active');
    });

    document.addEventListener('click', function (event) {
        if (!dropdown.contains(event.target) && event.target !== searchInput) {
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                dropdown.classList.add('hidden');
            }, 300);
        }
    });

    function updateClientInfo(data, selectedName) {
        const displayName = selectedName.replace(/^(Window World of )+/, '');
        document.querySelector('.w-1\\/2 > h1').textContent = displayName;

        // Replace every instance of "ww-blue" with "rwu-blue"
        document.body.innerHTML = document.body.innerHTML.replace(/\bww-blue\b/g, 'rwu-blue');
        // Replace every instance of "ww-navy" with "rwu-red"
        document.body.innerHTML = document.body.innerHTML.replace(/\bww-navy\b/g, 'rwu-red');

        // ... (rest of your existing logic)
    }
});
