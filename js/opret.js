// opret.js
export function submitInfo() {
    var inputVal = document.getElementById('exampleTextInput').value;

    // Ensure there's some input before adding it to the feed
    if (inputVal.trim() !== '') {
        var feed = document.getElementById('textFeed');

        var newText = document.createElement('div');
        newText.classList.add('feed-item');
        newText.innerHTML = `<p>${inputVal}</p>`; // Insert the input value

        // Add the new text to the top of the feed
        if (feed.firstChild) {
            feed.insertBefore(newText, feed.firstChild);
        } else {
            feed.appendChild(newText);
        }
    }

    // Clear the input field and close the modal
    document.getElementById('exampleTextInput').value = '';
    var modal = bootstrap.Modal.getInstance(document.getElementById('inputModal'));
    modal.hide();
}

// Function to handle Enter key press in the input field
export function handleEnterKeyPress(event) {
    if (event.key === 'Enter') {
        submitInfo();
        event.preventDefault(); // Prevent the default form submit action
    }
}

// Attach the event listener to the input field
document.getElementById('exampleTextInput').addEventListener('keydown', handleEnterKeyPress);
