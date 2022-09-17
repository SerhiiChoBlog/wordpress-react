import React, { useState, useEffect } from 'react'
import './Birds.css'
import Request from '../../../modules/Request'

type Bird = {
    url: string
    title: string
}

const Birds: React.FC = () => {
    const [birds, setBirds] = useState<Bird[]>([])

    useEffect(() => fetchBirds(), [])

    function fetchBirds(): void {
        const params = {
            method: 'get_birds',
            params: [
                { name: 'birds_limit', value: '1' },
            ],
        }

        new Request<Bird[]>(params)
            .send()
            .then(resp => setBirds(resp.data))
            .catch(err => console.error(err))
    }

    return (
        <ul className="Birds-list">
            {birds.map(bird => {
                return (
                    <li key={bird.title} className="Birds-item">
                        <img src={bird.url} alt={bird.title} />
                        <h2>{bird.title}</h2>
                    </li>
                )
            })}
        </ul>
    )
}

export default Birds