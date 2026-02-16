# ColorSearcher

A web-based color search application that allows users to search and explore colors by keyword.

## Features

- 🎨 Search through an extensive color database by name, hex code, RGB values, or keywords
- 🔍 Real-time filtering as you type
- 🏷️ Keyword-based search (e.g., search "ocean", "bright", "pastel" to find related colors)
- 🖱️ Hover over color tiles to view detailed information (hex and RGB codes)
- 📱 Responsive grid layout that adapts to different screen sizes
- 🎭 Dark theme with elegant gold accents
- ⚙️ Easy customization via PHP color database

## Customizing Colors

Colors are defined in `colors.php` with the following structure:

```php
["name" => "Color Name", "hex" => "#HEXCODE", "rgb" => "R, G, B", "keywords" => ["keyword1", "keyword2", ...]]
```

To add or modify colors:
1. Open `colors.php`
2. Add/edit entries in the `$colors` array
3. Save the file - changes will be reflected immediately

Example:
```php
["name" => "Ocean Blue", "hex" => "#0077BE", "rgb" => "0, 119, 190", "keywords" => ["ocean", "water", "sea", "deep", "tropical"]]
```

## Live Demo

Visit the live application at: `https://borisgal25.github.io/ColorSearcher/`

## Local Development

To run the application locally:
1. You need a local PHP server (e.g., Apache, Nginx, or PHP's built-in server)
2. Run `php -S localhost:8000` in the project directory
3. Open `http://localhost:8000` in your web browser

Alternatively, you can use any local web server that supports PHP.

## GitHub Pages Deployment

This repository is configured to automatically deploy to GitHub Pages using GitHub Actions.

### Setup Instructions

1. Go to your repository Settings → Pages
2. Under "Build and deployment", select **GitHub Actions** as the source
3. Once the main/master branch is updated, the workflow will automatically deploy the site

The deployment workflow will trigger:
- Automatically on push to `main` or `master` branch
- Manually via the Actions tab (workflow_dispatch)

## Technologies Used

- HTML5
- CSS3
- Vanilla JavaScript (no frameworks required)
