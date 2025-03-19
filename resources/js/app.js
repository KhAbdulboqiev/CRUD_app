import React from 'React'
import { createRoot} from 'react-dom-clinet'

function App() {
    return(
        <div>
            <h1> Laravel + React </h1>
        </div>
    );
}

const root =document.getElementById('app');
if (root) {
    createRoot(root).render(<App />);
}