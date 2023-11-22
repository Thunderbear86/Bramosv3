// main.js
import { toggleMenu } from './burger.js';
import { addTextToFeed } from './feed.js';
import { submitInfo } from './opret.js';

// Attach functions to the global window object for inline HTML access
window.toggleMenu = toggleMenu;
window.addTextToFeed = addTextToFeed;
window.submitInfo = submitInfo;
window.handleEnterKeyPress = handleEnterKeyPress;
