// feed.js
export function addTextToFeed() {
    var feed = document.getElementById('textFeed');

    var newText = document.createElement('div');
    newText.classList.add('feed-item');
    newText.innerHTML = "<p>Nyeste indlæg</p>";

    // Check if there are any existing child nodes, and add the new text at the top
    if (feed.firstChild) {
        feed.insertBefore(newText, feed.firstChild);
    } else {
        feed.appendChild(newText);
    }
}