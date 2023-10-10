// Utility to clear dropdown
function clearDropdown(dropdown) {
    dropdown.innerHTML = '';
    dropdown.style.opacity = '0';
    dropdown.style.transform = 'translateY(-10px)';
    setTimeout(() => {
        dropdown.classList.add('hidden');
    }, 300);
}

// Handle dropdown item click
function handleItemClick(event, searchInput, dropdown) {
    const name = event.currentTarget.textContent.trim();
    searchInput.value = name;
    searchInput.style.color = 'rgba(255, 255, 255, 1)';
    searchInput.style.textAlign = 'center';

    clearDropdown(dropdown);
    fetchClientInfo(name);
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
        li.innerHTML = `<i class='las la-user-circle text-ww-blue-sub-100 text-lg mr-2'></i>${owner}`;
        ownersList.appendChild(li);
    });

    document.getElementById('clientLogo').src = data.logo;
    document.getElementById('clientLogoSmall').src = data.search_icon;
}

// Main code logic wrapped in DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    const names = [
        "Window World of Altoona",
        "Window World of Binghamton",
        "RoofWorks USA",
    ];
    const searchInput = document.getElementById('default-search');
    const dropdown = document.getElementById('autocomplete-dropdown');
    searchInput.style.color = 'rgba(255, 255, 255, 0.75)';

    searchInput.addEventListener('input', function () {
        dropdown.innerHTML = '';
        const searchTerm = searchInput.value.toLowerCase();
        const matchingNames = names.filter(name => name.toLowerCase().includes(searchTerm));

        if (matchingNames.length) {
            dropdown.classList.remove('hidden');
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
        } else {
            clearDropdown(dropdown);
        }

        matchingNames.forEach(name => {
            const item = document.createElement('div');
            item.innerHTML = `<img src="img/logos/ww_search_icon.svg" alt="Logo" class="w-5 h-5 mr-2 opacity-20 hover:opacity-100 transition-opacity duration-300"> ${name}`;
            item.className = 'p-2 cursor-pointer hover:bg-gray-100 flex items-center';
            item.addEventListener('click', (event) => handleItemClick(event, searchInput, dropdown));
            dropdown.appendChild(item);
        });
    });

    searchInput.addEventListener('focus', function () {
        searchInput.style.color = 'rgba(255, 255, 255, 1)';
        document.querySelector('.logo-fade-in').classList.add('logo-active');
    });

    searchInput.addEventListener('blur', function () {
        searchInput.style.color = 'rgba(255, 255, 255, 0.75)';
        document.querySelector('.logo-fade-in').classList.remove('logo-active');
    });

    document.addEventListener('click', function (event) {
        if (!dropdown.contains(event.target) && event.target !== searchInput) {
            clearDropdown(dropdown);
        }
    });
});
