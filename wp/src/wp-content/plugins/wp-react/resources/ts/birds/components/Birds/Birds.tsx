import React from 'react'
import './Birds.css'

const Birds: React.FC = () => {
    return (
        <ul className="Birds-list">
            <li className="Birds-item">
                <img
                    src="https://pixabay.com/get/gee560f852e5a93ea3f471ff68f48a621b2777589ea5159bc7b342f85fa972e93d91f70133d6efcded1dea03aff1d29f3800728f1a3d693c6668a6b2f985eb43df805ecd79d6b2b581b251b1122a307e4_640.jpg"
                    alt="Chaffinch bird"
                />
                <h2>Chaffinch bird</h2>
            </li>
            <li className="Birds-item">
                <img
                    src="https://pixabay.com/get/g7e812d716f803814cdbb0b761848dab1947af5d1820ccc2011208dc690b3841196738664f5dd54ceafa7df90721e92f643165c57e046813e49997cdc42b1eb058ba0fa203f5b280b6fdfe07d02b50ace_640.jpg"
                    alt="Perched bird"
                />
                <h2>Perched bird</h2>
            </li>
        </ul>
    )
}

export default Birds