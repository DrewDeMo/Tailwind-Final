// src/App.js
import React, { useState } from 'react';
import './App.css';

function App() {
    const [client, setClient] = useState(null);

    const clientsData = [
        //... your client data here
    ];

    const handleClientChange = (clientName) => {
        const selectedClient = clientsData.find(c => c.name === clientName);
        setClient(selectedClient);
    }

    return (
        <div className="App">
            <select onChange={(e) => handleClientChange(e.target.value)}>
                {clientsData.map(client => <option key={client.name} value={client.name}>{client.name}</option>)}
            </select>

            {client && (
                <div>
                    {/* Display client data here, e.g., */}
                    <h1>{client.name}</h1>
                    <p>{client.address}</p>
                    {/*... other client details */}
                </div>
            )}
        </div>
    );
}

export default App;
