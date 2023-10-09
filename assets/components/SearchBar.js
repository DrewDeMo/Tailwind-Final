import React, { useState } from 'react';

const SearchBar = ({ onClientSelect }) => {
    const [searchTerm, setSearchTerm] = useState('');
    const [showDropdown, setShowDropdown] = useState(false);

    const clients = [
        {
            name: "Window World of Binghamton",
            logo: "img/logos/ww_search_icon.svg",
            // ... other client properties
        },
        {
            name: "RoofWorks USA",
            logo: "img/logos/rwu_search_icon.svg",
            // ... other client properties
        },
        // ... add more clients as needed
    ];

    const matchingClients = clients.filter(client =>
        client.name.toLowerCase().includes(searchTerm.toLowerCase())
    );

    const handleInputChange = (e) => {
        setSearchTerm(e.target.value);
        if (matchingClients.length) {
            setShowDropdown(true);
        } else {
            setShowDropdown(false);
        }
    };

    const handleClientSelect = (client) => {
        setSearchTerm(client.name);
        onClientSelect(client); // Call the passed in onClientSelect callback
        setShowDropdown(false);
    };

    return (
        <div className="flex flex-row justify-center align-middle">
            <form className="w-full flex justify-center relative">
                <div className="relative flex items-center w-full px-4 py-1 bg-gray-700 border border-gray-500 border-opacity-50 rounded-full text-sm font-medium text-white border-fade-in">
                    <div className="flex items-center justify-center w-full">
                        {/*Logo left fade in*/}
                        <img src="img/logos/ww_search_icon.svg" alt="Logo" className="w-8 h-8 mr-2 logo-fade-in" />
                        <input
                            type="search"
                            value={searchTerm}
                            onChange={handleInputChange}
                            className="default-search-input block w-full p-4 pl-6  text-white border-0 bg-transparent focus:ring-transparent rounded-full"
                            placeholder="Window World of Altoona"
                            required
                        />
                        {showDropdown && (
                            <div id="autocomplete-dropdown" className="absolute mt-10 w-full bg-gray-700 border border-gray-500 border-opacity-50 rounded-md shadow-lg">
                                {matchingClients.map(client => (
                                    <div key={client.name} className='p-2 cursor-pointer hover:bg-gray-100 flex items-center' onClick={() => handleClientSelect(client)}>
                                        <img src={client.logo} alt="Logo" className="w-6 h-6 mr-2 dropdown-logo" style={{ opacity: 0.4 }} />
                                        {client.name}
                                    </div>
                                ))}
                            </div>
                        )}
                        <button type="submit" className="flex items-center justify-center bg-blue-700 duration-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm h-8 w-8 px-2 py-2 text-white ml-2">
                            <svg className="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    );
}

export default SearchBar;
