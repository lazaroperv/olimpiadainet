const searchInput = document.getElementById('search-input');
const searchResults = document.getElementById('search-results');

searchInput.addEventListener('input', async (e) => {
  const searchTerm = e.target.value.trim();
  if (searchTerm.length > 1) {
    try {
      const response = await fetch('search-products.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `searchTerm=${searchTerm}`
      });
      const data = await response.json();
      displaySearchResults(data);
    } catch (error) {
      console.error(error);
    }
  } else {
    searchResults.innerHTML = '';
    searchResults.style.display = 'none';
  }
});

function displaySearchResults(data) {
  searchResults.innerHTML = '';
  data.forEach((item) => {
    const resultHTML = `
      <div>
        <h2>${item.title}</h2>
        <p>${item.description}</p>
      </div>
    `;
    searchResults.innerHTML += resultHTML;
  });
  searchResults.style.display = 'block';
}