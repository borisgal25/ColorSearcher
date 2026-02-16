// Color database - will be loaded from PHP file
let colors = [];

// Get DOM elements
const searchInput = document.getElementById('searchInput');
const colorGrid = document.getElementById('colorGrid');

// Function to create a color tile
function createColorTile(color) {
    const tile = document.createElement('div');
    tile.className = 'color-tile';
    tile.style.backgroundColor = color.hex;
    
    const info = document.createElement('div');
    info.className = 'color-info';
    
    const name = document.createElement('div');
    name.className = 'color-name';
    name.textContent = color.name;
    
    const codes = document.createElement('div');
    codes.className = 'color-codes';
    codes.innerHTML = `
        <div>HEX: ${color.hex}</div>
        <div>RGB: ${color.rgb}</div>
    `;
    
    info.appendChild(name);
    info.appendChild(codes);
    tile.appendChild(info);
    
    return tile;
}

// Function to display colors
function displayColors(colorsToDisplay) {
    colorGrid.innerHTML = '';
    
    if (colorsToDisplay.length === 0) {
        colorGrid.innerHTML = '<div class="no-results">No colors found matching your search.</div>';
        return;
    }
    
    colorsToDisplay.forEach(color => {
        const tile = createColorTile(color);
        colorGrid.appendChild(tile);
    });
}

// Function to filter colors based on search term
function filterColors(searchTerm) {
    if (!searchTerm.trim()) {
        return colors;
    }
    
    const term = searchTerm.toLowerCase();
    return colors.filter(color => 
        color.name.toLowerCase().includes(term) ||
        color.hex.toLowerCase().includes(term) ||
        color.rgb.toLowerCase().includes(term) ||
        (color.keywords && color.keywords.some(keyword => keyword.toLowerCase().includes(term)))
    );
}

// Event listener for search input
searchInput.addEventListener('input', (e) => {
    const filteredColors = filterColors(e.target.value);
    displayColors(filteredColors);
});

// Load colors from PHP file
async function loadColors() {
    try {
        const response = await fetch('colors.php');
        colors = await response.json();
        displayColors(colors);
    } catch (error) {
        console.error('Error loading colors:', error);
        colorGrid.innerHTML = '<div class="no-results">Error loading colors. Please make sure colors.php is accessible.</div>';
    }
}

// Load colors on page load
loadColors();
