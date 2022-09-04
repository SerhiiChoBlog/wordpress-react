import React from "react"
import { render } from "react-dom"
import { createRoot } from 'react-dom/client'
import App from './App'

window.addEventListener('load', () => {
    const target = document.getElementById('wpreact-birds')

    if (!target) {
        throw new Error('Cannot find element #wpreact-birds')
    }

    const root = createRoot(target)

    root.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    )
})