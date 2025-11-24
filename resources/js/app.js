import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;

// importeren van alpine objecten
import './home.js';

console.log('app.js loaded');

Alpine.start();