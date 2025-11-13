import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;

document.addEventListener("alpine:init", () => {
    Alpine.data('testing', () => ({
        message: 'Hello from Alpine!'
    }));
});

console.log('app.js loaded');

Alpine.start();