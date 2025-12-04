import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;

import { marked } from "marked";
window.marked = marked; 


// importeren van alpine objecten
import './home.js';
import './project.js';

// console.log('app.js loaded');

Alpine.start();