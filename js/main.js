// main.js
import { toggleMenu } from './burger.js';
import { makeNavbarSticky } from './sticky.js';
import { setupNavbarCollapse } from './navbar.js';
import { setupSearch } from './search.js'; // Import the search function

// Attach functions to the global window object if needed
window.toggleMenu = toggleMenu;

// Call the sticky function to enable sticky behavior on the navbar
makeNavbarSticky();

// Setup Navbar collapse on link click for mobile view
setupNavbarCollapse();

// Setup the search functionality
setupSearch(); // Initialize the search functionality
