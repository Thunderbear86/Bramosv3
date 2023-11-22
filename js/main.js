// main.js
import { toggleMenu } from './burger.js';
import { addTextToFeed } from './feed.js';
import { submitInfo, handleEnterKeyPress } from './opret.js';
import { searchFeed } from './searchDok.js'; // Ensure this is the correct path

window.toggleMenu = toggleMenu;
window.addTextToFeed = addTextToFeed;
window.submitInfo = submitInfo;
window.handleEnterKeyPress = handleEnterKeyPress;
window.searchFeed = searchFeed;
