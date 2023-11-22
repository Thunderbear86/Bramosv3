// Assuming searchFeed is defined in another file like 'searchDok.js'
import { searchFeed } from './searchDok.js'; // Add this if searchFeed is used

// opret.js
export function submitInfo() {
    var date = document.getElementById('inputDate').value;
    var citizen = document.getElementById('inputCitizen').value;
    var note = document.getElementById('inputNote').value;

    // Ensure there's some input before adding it to the feed
    if (date.trim() !== '' || citizen.trim() !== '' || note.trim() !== '') {
        var feed = document.getElementById('textFeed');

        var newText = document.createElement('div');
        newText.classList.add('feed-item');
        newText.innerHTML = `<p><span class="fw-semibold"> Dato:</span> ${date}</p><p><span class="fw-semibold">Borger:</span> ${citizen}</p><p><span class="fw-semibold">Notat:</span> ${note}</p>`;

        // Add the new text to the top of the feed
        if (feed.firstChild) {
            feed.insertBefore(newText, feed.firstChild);
        } else {
            feed.appendChild(newText);
        }
    }

    // Clear the input fields and close the modal
    document.getElementById('inputDate').value = '';
    document.getElementById('inputCitizen').value = '';
    document.getElementById('inputNote').value = '';
    var modal = bootstrap.Modal.getInstance(document.getElementById('inputModal'));
    modal.hide();
}

export function handleEnterKeyPress(event) {
    if (event.key === 'Enter') {
        if (event.target.id === 'inputDate' || event.target.id === 'inputCitizen' || event.target.id === 'inputNote') {
            // Enter pressed in one of the modal inputs
            submitInfo();
            event.preventDefault();
        } else if (event.target.classList.contains('search-bar-input')) {
            // Enter pressed in the search bar
            searchFeed();
            event.preventDefault();
        }
    }
}

// Attach event listener to each modal input field
document.getElementById('inputDate').addEventListener('keydown', handleEnterKeyPress);
document.getElementById('inputCitizen').addEventListener('keydown', handleEnterKeyPress);
document.getElementById('inputNote').addEventListener('keydown', handleEnterKeyPress);

// Attach event listener to the search input field (if you have a search functionality)
// Ensure your search input field has the class 'search-bar-input'
document.querySelector('.search-bar-input').addEventListener('keydown', handleEnterKeyPress);