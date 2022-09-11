import React from 'react'
import './Birds.css'

const Birds: React.FC = () => {
    return (
        <ul className="Birds-list">
            <li className="Birds-item">
                <img
                    src="https://i.imgur.com/GJKdVfL.jpeg"
                    alt="Bird looking right"
                />
                <h2>Bird looking right</h2>
            </li>
            <li className="Birds-item">
                <img
                    src="https://i.imgur.com/1lC07Hh.jpeg"
                    alt="Cute sparrow bird"
                />
                <h2>Cute sparrow bird</h2>
            </li>
        </ul>
    )
}

export default Birds