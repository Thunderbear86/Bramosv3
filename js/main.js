// main.js
import { toggleMenu } from './burger.js';
import { makeNavbarSticky } from './sticky.js';

// Attach functions to the global window object if needed
window.toggleMenu = toggleMenu;

// Call the sticky function to enable sticky behavior on the navbar
makeNavbarSticky();
