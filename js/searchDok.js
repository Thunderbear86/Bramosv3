// searchDok.js
export function searchFeed() {
    const searchTerm = document.querySelector('.search-bar input').value.toLowerCase();
    const feedItems = document.querySelectorAll('#textFeed .feed-item');

    feedItems.forEach(item => {
        const text = item.textContent.toLowerCase();
        const isVisible = text.includes(searchTerm);
        item.style.display = isVisible ? 'block' : 'none';
    });
}

// Attach event listener to the search input field
document.querySelector('.search-bar input').addEventListener('input', searchFeed);
