<?php
header('Content-Type: application/json');
// CORS header removed - this file is served from the same domain

// Comprehensive color database with keywords for easy searching
// Each color has: name, hex code, RGB values, and searchable keywords
$colors = [
    // Reds
    ["name" => "Red", "hex" => "#FF0000", "rgb" => "255, 0, 0", "keywords" => ["primary", "bright", "pure", "danger", "stop", "fire"]],
    ["name" => "Dark Red", "hex" => "#8B0000", "rgb" => "139, 0, 0", "keywords" => ["deep", "maroon", "blood", "wine"]],
    ["name" => "Crimson", "hex" => "#DC143C", "rgb" => "220, 20, 60", "keywords" => ["rich", "deep", "blood", "elegant"]],
    ["name" => "Fire Brick", "hex" => "#B22222", "rgb" => "178, 34, 34", "keywords" => ["brick", "rust", "earth"]],
    ["name" => "Indian Red", "hex" => "#CD5C5C", "rgb" => "205, 92, 92", "keywords" => ["terracotta", "clay", "earth"]],
    ["name" => "Light Coral", "hex" => "#F08080", "rgb" => "240, 128, 128", "keywords" => ["soft", "pastel", "pink"]],
    ["name" => "Salmon", "hex" => "#FA8072", "rgb" => "250, 128, 114", "keywords" => ["fish", "pink", "orange", "pastel"]],
    ["name" => "Dark Salmon", "hex" => "#E9967A", "rgb" => "233, 150, 122", "keywords" => ["peach", "coral"]],
    ["name" => "Light Salmon", "hex" => "#FFA07A", "rgb" => "255, 160, 122", "keywords" => ["pastel", "peach", "pink"]],
    
    // Oranges
    ["name" => "Orange Red", "hex" => "#FF4500", "rgb" => "255, 69, 0", "keywords" => ["bright", "vibrant", "fire", "autumn"]],
    ["name" => "Orange", "hex" => "#FFA500", "rgb" => "255, 165, 0", "keywords" => ["primary", "bright", "citrus", "fruit", "autumn"]],
    ["name" => "Dark Orange", "hex" => "#FF8C00", "rgb" => "255, 140, 0", "keywords" => ["deep", "amber", "autumn"]],
    ["name" => "Coral", "hex" => "#FF7F50", "rgb" => "255, 127, 80", "keywords" => ["sea", "ocean", "reef", "tropical"]],
    ["name" => "Tomato", "hex" => "#FF6347", "rgb" => "255, 99, 71", "keywords" => ["vegetable", "red", "food"]],
    ["name" => "Gold", "hex" => "#FFD700", "rgb" => "255, 215, 0", "keywords" => ["metal", "precious", "luxury", "yellow", "treasure"]],
    
    // Yellows
    ["name" => "Yellow", "hex" => "#FFFF00", "rgb" => "255, 255, 0", "keywords" => ["primary", "bright", "sun", "lemon", "warning", "happy"]],
    ["name" => "Light Yellow", "hex" => "#FFFFE0", "rgb" => "255, 255, 224", "keywords" => ["pale", "pastel", "cream"]],
    ["name" => "Lemon Chiffon", "hex" => "#FFFACD", "rgb" => "255, 250, 205", "keywords" => ["citrus", "pale", "pastel", "cream"]],
    ["name" => "Khaki", "hex" => "#F0E68C", "rgb" => "240, 230, 140", "keywords" => ["tan", "beige", "sand", "desert", "earth"]],
    ["name" => "Dark Khaki", "hex" => "#BDB76B", "rgb" => "189, 183, 107", "keywords" => ["olive", "earth", "military"]],
    
    // Greens
    ["name" => "Green", "hex" => "#008000", "rgb" => "0, 128, 0", "keywords" => ["primary", "nature", "grass", "eco", "go", "safe"]],
    ["name" => "Dark Green", "hex" => "#006400", "rgb" => "0, 100, 0", "keywords" => ["deep", "forest", "nature", "emerald"]],
    ["name" => "Forest Green", "hex" => "#228B22", "rgb" => "34, 139, 34", "keywords" => ["nature", "woods", "tree", "deep"]],
    ["name" => "Lime", "hex" => "#00FF00", "rgb" => "0, 255, 0", "keywords" => ["bright", "neon", "citrus", "vibrant"]],
    ["name" => "Lime Green", "hex" => "#32CD32", "rgb" => "50, 205, 50", "keywords" => ["bright", "citrus", "vibrant"]],
    ["name" => "Light Green", "hex" => "#90EE90", "rgb" => "144, 238, 144", "keywords" => ["pastel", "spring", "fresh"]],
    ["name" => "Pale Green", "hex" => "#98FB98", "rgb" => "152, 251, 152", "keywords" => ["pastel", "mint", "soft"]],
    ["name" => "Spring Green", "hex" => "#00FF7F", "rgb" => "0, 255, 127", "keywords" => ["bright", "fresh", "vibrant", "season"]],
    ["name" => "Medium Spring Green", "hex" => "#00FA9A", "rgb" => "0, 250, 154", "keywords" => ["mint", "fresh", "bright"]],
    ["name" => "Sea Green", "hex" => "#2E8B57", "rgb" => "46, 139, 87", "keywords" => ["ocean", "water", "nature"]],
    ["name" => "Medium Sea Green", "hex" => "#3CB371", "rgb" => "60, 179, 113", "keywords" => ["ocean", "water", "tropical"]],
    ["name" => "Olive", "hex" => "#808000", "rgb" => "128, 128, 0", "keywords" => ["earth", "military", "drab", "food"]],
    ["name" => "Olive Drab", "hex" => "#6B8E23", "rgb" => "107, 142, 35", "keywords" => ["military", "camouflage", "earth"]],
    ["name" => "Yellow Green", "hex" => "#9ACD32", "rgb" => "154, 205, 50", "keywords" => ["chartreuse", "lime", "spring"]],
    ["name" => "Chartreuse", "hex" => "#7FFF00", "rgb" => "127, 255, 0", "keywords" => ["neon", "bright", "lime", "liqueur"]],
    ["name" => "Lawn Green", "hex" => "#7CFC00", "rgb" => "124, 252, 0", "keywords" => ["grass", "bright", "neon"]],
    
    // Blues
    ["name" => "Blue", "hex" => "#0000FF", "rgb" => "0, 0, 255", "keywords" => ["primary", "sky", "water", "ocean", "pure", "cold"]],
    ["name" => "Dark Blue", "hex" => "#00008B", "rgb" => "0, 0, 139", "keywords" => ["deep", "navy", "night"]],
    ["name" => "Medium Blue", "hex" => "#0000CD", "rgb" => "0, 0, 205", "keywords" => ["bright", "cobalt"]],
    ["name" => "Navy", "hex" => "#000080", "rgb" => "0, 0, 128", "keywords" => ["dark", "military", "uniform", "deep"]],
    ["name" => "Midnight Blue", "hex" => "#191970", "rgb" => "25, 25, 112", "keywords" => ["dark", "night", "deep", "navy"]],
    ["name" => "Royal Blue", "hex" => "#4169E1", "rgb" => "65, 105, 225", "keywords" => ["bright", "rich", "elegant", "cobalt"]],
    ["name" => "Steel Blue", "hex" => "#4682B4", "rgb" => "70, 130, 180", "keywords" => ["metal", "grey", "industrial"]],
    ["name" => "Dodger Blue", "hex" => "#1E90FF", "rgb" => "30, 144, 255", "keywords" => ["bright", "sports", "sky"]],
    ["name" => "Deep Sky Blue", "hex" => "#00BFFF", "rgb" => "0, 191, 255", "keywords" => ["bright", "tropical", "azure"]],
    ["name" => "Sky Blue", "hex" => "#87CEEB", "rgb" => "135, 206, 235", "keywords" => ["light", "pastel", "clear", "day"]],
    ["name" => "Light Sky Blue", "hex" => "#87CEFA", "rgb" => "135, 206, 250", "keywords" => ["pastel", "soft", "clear"]],
    ["name" => "Light Blue", "hex" => "#ADD8E6", "rgb" => "173, 216, 230", "keywords" => ["pastel", "soft", "baby"]],
    ["name" => "Powder Blue", "hex" => "#B0E0E6", "rgb" => "176, 224, 230", "keywords" => ["pastel", "soft", "baby"]],
    
    // Cyans
    ["name" => "Cyan", "hex" => "#00FFFF", "rgb" => "0, 255, 255", "keywords" => ["bright", "aqua", "neon", "electric", "water"]],
    ["name" => "Light Cyan", "hex" => "#E0FFFF", "rgb" => "224, 255, 255", "keywords" => ["pastel", "soft", "ice"]],
    ["name" => "Aqua", "hex" => "#00FFFF", "rgb" => "0, 255, 255", "keywords" => ["bright", "water", "ocean", "tropical"]],
    ["name" => "Aquamarine", "hex" => "#7FFFD4", "rgb" => "127, 255, 212", "keywords" => ["gem", "ocean", "tropical", "green"]],
    ["name" => "Turquoise", "hex" => "#40E0D0", "rgb" => "64, 224, 208", "keywords" => ["gem", "ocean", "tropical", "stone"]],
    ["name" => "Medium Turquoise", "hex" => "#48D1CC", "rgb" => "72, 209, 204", "keywords" => ["ocean", "tropical", "bright"]],
    ["name" => "Dark Turquoise", "hex" => "#00CED1", "rgb" => "0, 206, 209", "keywords" => ["deep", "ocean", "teal"]],
    ["name" => "Cadet Blue", "hex" => "#5F9EA0", "rgb" => "95, 158, 160", "keywords" => ["military", "grey", "muted"]],
    ["name" => "Teal", "hex" => "#008080", "rgb" => "0, 128, 128", "keywords" => ["duck", "ocean", "green", "blue"]],
    ["name" => "Dark Cyan", "hex" => "#008B8B", "rgb" => "0, 139, 139", "keywords" => ["deep", "teal", "ocean"]],
    
    // Purples
    ["name" => "Purple", "hex" => "#800080", "rgb" => "128, 0, 128", "keywords" => ["royal", "rich", "violet", "regal"]],
    ["name" => "Dark Purple", "hex" => "#9400D3", "rgb" => "148, 0, 211", "keywords" => ["deep", "rich", "violet"]],
    ["name" => "Indigo", "hex" => "#4B0082", "rgb" => "75, 0, 130", "keywords" => ["deep", "dark", "violet", "dye"]],
    ["name" => "Dark Violet", "hex" => "#9400D3", "rgb" => "148, 0, 211", "keywords" => ["deep", "rich", "purple"]],
    ["name" => "Blue Violet", "hex" => "#8A2BE2", "rgb" => "138, 43, 226", "keywords" => ["bright", "flower", "purple"]],
    ["name" => "Medium Purple", "hex" => "#9370DB", "rgb" => "147, 112, 219", "keywords" => ["lavender", "soft", "pastel"]],
    ["name" => "Violet", "hex" => "#EE82EE", "rgb" => "238, 130, 238", "keywords" => ["flower", "bright", "purple"]],
    ["name" => "Orchid", "hex" => "#DA70D6", "rgb" => "218, 112, 214", "keywords" => ["flower", "pink", "purple"]],
    ["name" => "Plum", "hex" => "#DDA0DD", "rgb" => "221, 160, 221", "keywords" => ["fruit", "soft", "pastel"]],
    ["name" => "Thistle", "hex" => "#D8BFD8", "rgb" => "216, 191, 216", "keywords" => ["flower", "pastel", "soft"]],
    ["name" => "Lavender", "hex" => "#E6E6FA", "rgb" => "230, 230, 250", "keywords" => ["flower", "pastel", "soft", "purple"]],
    
    // Magentas and Pinks
    ["name" => "Magenta", "hex" => "#FF00FF", "rgb" => "255, 0, 255", "keywords" => ["bright", "neon", "pink", "purple", "fuchsia"]],
    ["name" => "Fuchsia", "hex" => "#FF00FF", "rgb" => "255, 0, 255", "keywords" => ["bright", "neon", "pink", "flower"]],
    ["name" => "Deep Pink", "hex" => "#FF1493", "rgb" => "255, 20, 147", "keywords" => ["bright", "hot", "vibrant"]],
    ["name" => "Hot Pink", "hex" => "#FF69B4", "rgb" => "255, 105, 180", "keywords" => ["bright", "neon", "vibrant"]],
    ["name" => "Light Pink", "hex" => "#FFB6C1", "rgb" => "255, 182, 193", "keywords" => ["pastel", "soft", "baby"]],
    ["name" => "Pink", "hex" => "#FFC0CB", "rgb" => "255, 192, 203", "keywords" => ["pastel", "soft", "feminine", "baby"]],
    
    // Whites and Creams
    ["name" => "White", "hex" => "#FFFFFF", "rgb" => "255, 255, 255", "keywords" => ["pure", "clean", "blank", "light"]],
    ["name" => "Snow", "hex" => "#FFFAFA", "rgb" => "255, 250, 250", "keywords" => ["white", "winter", "cold", "pure"]],
    ["name" => "Honeydew", "hex" => "#F0FFF0", "rgb" => "240, 255, 240", "keywords" => ["white", "green", "melon", "fresh"]],
    ["name" => "Mint Cream", "hex" => "#F5FFFA", "rgb" => "245, 255, 250", "keywords" => ["white", "green", "fresh", "cool"]],
    ["name" => "Azure", "hex" => "#F0FFFF", "rgb" => "240, 255, 255", "keywords" => ["white", "blue", "sky", "pale"]],
    ["name" => "Alice Blue", "hex" => "#F0F8FF", "rgb" => "240, 248, 255", "keywords" => ["white", "blue", "pale", "soft"]],
    ["name" => "Ghost White", "hex" => "#F8F8FF", "rgb" => "248, 248, 255", "keywords" => ["white", "pale", "clean"]],
    ["name" => "White Smoke", "hex" => "#F5F5F5", "rgb" => "245, 245, 245", "keywords" => ["white", "grey", "light", "smoke"]],
    ["name" => "Seashell", "hex" => "#FFF5EE", "rgb" => "255, 245, 238", "keywords" => ["white", "pink", "beach", "shell"]],
    ["name" => "Beige", "hex" => "#F5F5DC", "rgb" => "245, 245, 220", "keywords" => ["tan", "neutral", "cream", "earth"]],
    ["name" => "Old Lace", "hex" => "#FDF5E6", "rgb" => "253, 245, 230", "keywords" => ["white", "cream", "antique", "vintage"]],
    ["name" => "Floral White", "hex" => "#FFFAF0", "rgb" => "255, 250, 240", "keywords" => ["white", "cream", "soft"]],
    ["name" => "Ivory", "hex" => "#FFFFF0", "rgb" => "255, 255, 240", "keywords" => ["white", "cream", "elegant", "tusk"]],
    ["name" => "Antique White", "hex" => "#FAEBD7", "rgb" => "250, 235, 215", "keywords" => ["cream", "vintage", "old", "beige"]],
    ["name" => "Linen", "hex" => "#FAF0E6", "rgb" => "250, 240, 230", "keywords" => ["beige", "fabric", "natural", "cream"]],
    ["name" => "Lavender Blush", "hex" => "#FFF0F5", "rgb" => "255, 240, 245", "keywords" => ["white", "pink", "soft", "pastel"]],
    ["name" => "Misty Rose", "hex" => "#FFE4E1", "rgb" => "255, 228, 225", "keywords" => ["pink", "soft", "pastel", "cream"]],
    
    // Grays
    ["name" => "Gainsboro", "hex" => "#DCDCDC", "rgb" => "220, 220, 220", "keywords" => ["grey", "light", "neutral"]],
    ["name" => "Light Gray", "hex" => "#D3D3D3", "rgb" => "211, 211, 211", "keywords" => ["grey", "neutral", "pale"]],
    ["name" => "Silver", "hex" => "#C0C0C0", "rgb" => "192, 192, 192", "keywords" => ["grey", "metal", "neutral", "chrome"]],
    ["name" => "Dark Gray", "hex" => "#A9A9A9", "rgb" => "169, 169, 169", "keywords" => ["grey", "neutral", "charcoal"]],
    ["name" => "Gray", "hex" => "#808080", "rgb" => "128, 128, 128", "keywords" => ["grey", "neutral", "medium"]],
    ["name" => "Dim Gray", "hex" => "#696969", "rgb" => "105, 105, 105", "keywords" => ["grey", "dark", "charcoal"]],
    ["name" => "Light Slate Gray", "hex" => "#778899", "rgb" => "119, 136, 153", "keywords" => ["grey", "blue", "slate", "stone"]],
    ["name" => "Slate Gray", "hex" => "#708090", "rgb" => "112, 128, 144", "keywords" => ["grey", "blue", "stone", "rock"]],
    ["name" => "Dark Slate Gray", "hex" => "#2F4F4F", "rgb" => "47, 79, 79", "keywords" => ["grey", "dark", "charcoal", "stone"]],
    ["name" => "Black", "hex" => "#000000", "rgb" => "0, 0, 0", "keywords" => ["dark", "night", "void", "pure"]],
    
    // Browns
    ["name" => "Brown", "hex" => "#A52A2A", "rgb" => "165, 42, 42", "keywords" => ["earth", "wood", "chocolate", "natural"]],
    ["name" => "Maroon", "hex" => "#800000", "rgb" => "128, 0, 0", "keywords" => ["dark", "red", "burgundy", "wine"]],
    ["name" => "Dark Maroon", "hex" => "#5C0000", "rgb" => "92, 0, 0", "keywords" => ["deep", "red", "burgundy"]],
    ["name" => "Saddle Brown", "hex" => "#8B4513", "rgb" => "139, 69, 19", "keywords" => ["leather", "earth", "horse", "tan"]],
    ["name" => "Sienna", "hex" => "#A0522D", "rgb" => "160, 82, 45", "keywords" => ["earth", "clay", "terracotta", "orange"]],
    ["name" => "Chocolate", "hex" => "#D2691E", "rgb" => "210, 105, 30", "keywords" => ["food", "sweet", "brown", "cocoa"]],
    ["name" => "Peru", "hex" => "#CD853F", "rgb" => "205, 133, 63", "keywords" => ["tan", "earth", "orange", "country"]],
    ["name" => "Sandy Brown", "hex" => "#F4A460", "rgb" => "244, 164, 96", "keywords" => ["beach", "sand", "desert", "tan"]],
    ["name" => "Burlywood", "hex" => "#DEB887", "rgb" => "222, 184, 135", "keywords" => ["tan", "beige", "fabric", "natural"]],
    ["name" => "Tan", "hex" => "#D2B48C", "rgb" => "210, 180, 140", "keywords" => ["beige", "brown", "sand", "neutral"]],
    ["name" => "Rosy Brown", "hex" => "#BC8F8F", "rgb" => "188, 143, 143", "keywords" => ["pink", "brown", "mauve", "dusty"]],
    ["name" => "Moccasin", "hex" => "#FFE4B5", "rgb" => "255, 228, 181", "keywords" => ["tan", "beige", "cream", "shoe"]],
    ["name" => "Navajo White", "hex" => "#FFDEAD", "rgb" => "255, 222, 173", "keywords" => ["peach", "cream", "tan", "native"]],
    ["name" => "Peach Puff", "hex" => "#FFDAB9", "rgb" => "255, 218, 185", "keywords" => ["peach", "orange", "pastel", "fruit"]],
    ["name" => "Bisque", "hex" => "#FFE4C4", "rgb" => "255, 228, 196", "keywords" => ["cream", "beige", "peach", "soup"]],
    ["name" => "Blanched Almond", "hex" => "#FFEBCD", "rgb" => "255, 235, 205", "keywords" => ["cream", "beige", "nut", "pale"]],
    ["name" => "Wheat", "hex" => "#F5DEB3", "rgb" => "245, 222, 179", "keywords" => ["tan", "grain", "harvest", "beige"]],
    ["name" => "Cornsilk", "hex" => "#FFF8DC", "rgb" => "255, 248, 220", "keywords" => ["cream", "yellow", "grain", "pale"]],
    ["name" => "Papaya Whip", "hex" => "#FFEFD5", "rgb" => "255, 239, 213", "keywords" => ["cream", "peach", "fruit", "tropical"]],
];

// Output the colors as JSON
echo json_encode($colors);
