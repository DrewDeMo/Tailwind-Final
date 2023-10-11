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
            fetchAndUpdateClientContent();  // Add this line
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
    // Add this line to set the hidden input's value to "false"
    document.getElementById('isNewSession').value = "false";

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

// Set default value for the input
searchInput.value = names.find(nameObj => nameObj.value === 'ww-blue').displayName;
});
