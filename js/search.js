// search.js
export function setupSearch() {
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const filter = searchInput.value.toLowerCase();
        const cards = document.querySelectorAll('.filterCard');

        cards.forEach(card => {
            // Retrieve the title and categories from each card
            const cardTitle = card.querySelector('h4').textContent.toLowerCase();
            const cardCategory = card.querySelector('.card-footer small').textContent.toLowerCase();

            // Check if the card should be displayed based on title or categories
            if (cardTitle.includes(filter) || cardCategory.includes(filter)) {
                card.style.display = ''; // Show the card
            } else {
                card.style.display = 'none'; // Hide the card
            }
        });
    });
}
