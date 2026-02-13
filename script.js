// Color database with common colors
const colors = [
    { name: "Red", hex: "#FF0000", rgb: "255, 0, 0" },
    { name: "Dark Red", hex: "#8B0000", rgb: "139, 0, 0" },
    { name: "Crimson", hex: "#DC143C", rgb: "220, 20, 60" },
    { name: "Fire Brick", hex: "#B22222", rgb: "178, 34, 34" },
    { name: "Indian Red", hex: "#CD5C5C", rgb: "205, 92, 92" },
    { name: "Light Coral", hex: "#F08080", rgb: "240, 128, 128" },
    { name: "Salmon", hex: "#FA8072", rgb: "250, 128, 114" },
    { name: "Dark Salmon", hex: "#E9967A", rgb: "233, 150, 122" },
    { name: "Light Salmon", hex: "#FFA07A", rgb: "255, 160, 122" },
    { name: "Orange Red", hex: "#FF4500", rgb: "255, 69, 0" },
    { name: "Orange", hex: "#FFA500", rgb: "255, 165, 0" },
    { name: "Dark Orange", hex: "#FF8C00", rgb: "255, 140, 0" },
    { name: "Coral", hex: "#FF7F50", rgb: "255, 127, 80" },
    { name: "Tomato", hex: "#FF6347", rgb: "255, 99, 71" },
    { name: "Gold", hex: "#FFD700", rgb: "255, 215, 0" },
    { name: "Yellow", hex: "#FFFF00", rgb: "255, 255, 0" },
    { name: "Light Yellow", hex: "#FFFFE0", rgb: "255, 255, 224" },
    { name: "Lemon Chiffon", hex: "#FFFACD", rgb: "255, 250, 205" },
    { name: "Khaki", hex: "#F0E68C", rgb: "240, 230, 140" },
    { name: "Dark Khaki", hex: "#BDB76B", rgb: "189, 183, 107" },
    { name: "Green", hex: "#008000", rgb: "0, 128, 0" },
    { name: "Dark Green", hex: "#006400", rgb: "0, 100, 0" },
    { name: "Forest Green", hex: "#228B22", rgb: "34, 139, 34" },
    { name: "Lime", hex: "#00FF00", rgb: "0, 255, 0" },
    { name: "Lime Green", hex: "#32CD32", rgb: "50, 205, 50" },
    { name: "Light Green", hex: "#90EE90", rgb: "144, 238, 144" },
    { name: "Pale Green", hex: "#98FB98", rgb: "152, 251, 152" },
    { name: "Spring Green", hex: "#00FF7F", rgb: "0, 255, 127" },
    { name: "Medium Spring Green", hex: "#00FA9A", rgb: "0, 250, 154" },
    { name: "Sea Green", hex: "#2E8B57", rgb: "46, 139, 87" },
    { name: "Medium Sea Green", hex: "#3CB371", rgb: "60, 179, 113" },
    { name: "Olive", hex: "#808000", rgb: "128, 128, 0" },
    { name: "Olive Drab", hex: "#6B8E23", rgb: "107, 142, 35" },
    { name: "Yellow Green", hex: "#9ACD32", rgb: "154, 205, 50" },
    { name: "Chartreuse", hex: "#7FFF00", rgb: "127, 255, 0" },
    { name: "Lawn Green", hex: "#7CFC00", rgb: "124, 252, 0" },
    { name: "Blue", hex: "#0000FF", rgb: "0, 0, 255" },
    { name: "Dark Blue", hex: "#00008B", rgb: "0, 0, 139" },
    { name: "Medium Blue", hex: "#0000CD", rgb: "0, 0, 205" },
    { name: "Navy", hex: "#000080", rgb: "0, 0, 128" },
    { name: "Midnight Blue", hex: "#191970", rgb: "25, 25, 112" },
    { name: "Royal Blue", hex: "#4169E1", rgb: "65, 105, 225" },
    { name: "Steel Blue", hex: "#4682B4", rgb: "70, 130, 180" },
    { name: "Dodger Blue", hex: "#1E90FF", rgb: "30, 144, 255" },
    { name: "Deep Sky Blue", hex: "#00BFFF", rgb: "0, 191, 255" },
    { name: "Sky Blue", hex: "#87CEEB", rgb: "135, 206, 235" },
    { name: "Light Sky Blue", hex: "#87CEFA", rgb: "135, 206, 250" },
    { name: "Light Blue", hex: "#ADD8E6", rgb: "173, 216, 230" },
    { name: "Powder Blue", hex: "#B0E0E6", rgb: "176, 224, 230" },
    { name: "Cyan", hex: "#00FFFF", rgb: "0, 255, 255" },
    { name: "Light Cyan", hex: "#E0FFFF", rgb: "224, 255, 255" },
    { name: "Aqua", hex: "#00FFFF", rgb: "0, 255, 255" },
    { name: "Aquamarine", hex: "#7FFFD4", rgb: "127, 255, 212" },
    { name: "Turquoise", hex: "#40E0D0", rgb: "64, 224, 208" },
    { name: "Medium Turquoise", hex: "#48D1CC", rgb: "72, 209, 204" },
    { name: "Dark Turquoise", hex: "#00CED1", rgb: "0, 206, 209" },
    { name: "Cadet Blue", hex: "#5F9EA0", rgb: "95, 158, 160" },
    { name: "Teal", hex: "#008080", rgb: "0, 128, 128" },
    { name: "Dark Cyan", hex: "#008B8B", rgb: "0, 139, 139" },
    { name: "Purple", hex: "#800080", rgb: "128, 0, 128" },
    { name: "Dark Purple", hex: "#9400D3", rgb: "148, 0, 211" },
    { name: "Indigo", hex: "#4B0082", rgb: "75, 0, 130" },
    { name: "Dark Violet", hex: "#9400D3", rgb: "148, 0, 211" },
    { name: "Blue Violet", hex: "#8A2BE2", rgb: "138, 43, 226" },
    { name: "Medium Purple", hex: "#9370DB", rgb: "147, 112, 219" },
    { name: "Violet", hex: "#EE82EE", rgb: "238, 130, 238" },
    { name: "Orchid", hex: "#DA70D6", rgb: "218, 112, 214" },
    { name: "Plum", hex: "#DDA0DD", rgb: "221, 160, 221" },
    { name: "Thistle", hex: "#D8BFD8", rgb: "216, 191, 216" },
    { name: "Lavender", hex: "#E6E6FA", rgb: "230, 230, 250" },
    { name: "Magenta", hex: "#FF00FF", rgb: "255, 0, 255" },
    { name: "Fuchsia", hex: "#FF00FF", rgb: "255, 0, 255" },
    { name: "Deep Pink", hex: "#FF1493", rgb: "255, 20, 147" },
    { name: "Hot Pink", hex: "#FF69B4", rgb: "255, 105, 180" },
    { name: "Light Pink", hex: "#FFB6C1", rgb: "255, 182, 193" },
    { name: "Pink", hex: "#FFC0CB", rgb: "255, 192, 203" },
    { name: "White", hex: "#FFFFFF", rgb: "255, 255, 255" },
    { name: "Snow", hex: "#FFFAFA", rgb: "255, 250, 250" },
    { name: "Honeydew", hex: "#F0FFF0", rgb: "240, 255, 240" },
    { name: "Mint Cream", hex: "#F5FFFA", rgb: "245, 255, 250" },
    { name: "Azure", hex: "#F0FFFF", rgb: "240, 255, 255" },
    { name: "Alice Blue", hex: "#F0F8FF", rgb: "240, 248, 255" },
    { name: "Ghost White", hex: "#F8F8FF", rgb: "248, 248, 255" },
    { name: "White Smoke", hex: "#F5F5F5", rgb: "245, 245, 245" },
    { name: "Seashell", hex: "#FFF5EE", rgb: "255, 245, 238" },
    { name: "Beige", hex: "#F5F5DC", rgb: "245, 245, 220" },
    { name: "Old Lace", hex: "#FDF5E6", rgb: "253, 245, 230" },
    { name: "Floral White", hex: "#FFFAF0", rgb: "255, 250, 240" },
    { name: "Ivory", hex: "#FFFFF0", rgb: "255, 255, 240" },
    { name: "Antique White", hex: "#FAEBD7", rgb: "250, 235, 215" },
    { name: "Linen", hex: "#FAF0E6", rgb: "250, 240, 230" },
    { name: "Lavender Blush", hex: "#FFF0F5", rgb: "255, 240, 245" },
    { name: "Misty Rose", hex: "#FFE4E1", rgb: "255, 228, 225" },
    { name: "Gainsboro", hex: "#DCDCDC", rgb: "220, 220, 220" },
    { name: "Light Gray", hex: "#D3D3D3", rgb: "211, 211, 211" },
    { name: "Silver", hex: "#C0C0C0", rgb: "192, 192, 192" },
    { name: "Dark Gray", hex: "#A9A9A9", rgb: "169, 169, 169" },
    { name: "Gray", hex: "#808080", rgb: "128, 128, 128" },
    { name: "Dim Gray", hex: "#696969", rgb: "105, 105, 105" },
    { name: "Light Slate Gray", hex: "#778899", rgb: "119, 136, 153" },
    { name: "Slate Gray", hex: "#708090", rgb: "112, 128, 144" },
    { name: "Dark Slate Gray", hex: "#2F4F4F", rgb: "47, 79, 79" },
    { name: "Black", hex: "#000000", rgb: "0, 0, 0" },
    { name: "Brown", hex: "#A52A2A", rgb: "165, 42, 42" },
    { name: "Maroon", hex: "#800000", rgb: "128, 0, 0" },
    { name: "Dark Maroon", hex: "#5C0000", rgb: "92, 0, 0" },
    { name: "Saddle Brown", hex: "#8B4513", rgb: "139, 69, 19" },
    { name: "Sienna", hex: "#A0522D", rgb: "160, 82, 45" },
    { name: "Chocolate", hex: "#D2691E", rgb: "210, 105, 30" },
    { name: "Peru", hex: "#CD853F", rgb: "205, 133, 63" },
    { name: "Sandy Brown", hex: "#F4A460", rgb: "244, 164, 96" },
    { name: "Burlywood", hex: "#DEB887", rgb: "222, 184, 135" },
    { name: "Tan", hex: "#D2B48C", rgb: "210, 180, 140" },
    { name: "Rosy Brown", hex: "#BC8F8F", rgb: "188, 143, 143" },
    { name: "Moccasin", hex: "#FFE4B5", rgb: "255, 228, 181" },
    { name: "Navajo White", hex: "#FFDEAD", rgb: "255, 222, 173" },
    { name: "Peach Puff", hex: "#FFDAB9", rgb: "255, 218, 185" },
    { name: "Bisque", hex: "#FFE4C4", rgb: "255, 228, 196" },
    { name: "Blanched Almond", hex: "#FFEBCD", rgb: "255, 235, 205" },
    { name: "Wheat", hex: "#F5DEB3", rgb: "245, 222, 179" },
    { name: "Cornsilk", hex: "#FFF8DC", rgb: "255, 248, 220" },
    { name: "Papaya Whip", hex: "#FFEFD5", rgb: "255, 239, 213" }
];

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
        color.rgb.toLowerCase().includes(term)
    );
}

// Event listener for search input
searchInput.addEventListener('input', (e) => {
    const filteredColors = filterColors(e.target.value);
    displayColors(filteredColors);
});

// Display all colors on initial load
displayColors(colors);
