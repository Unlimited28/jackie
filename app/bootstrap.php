<?php

// Define base constants
define('BASE_URL', '/'); // Adjust if the app is in a subdirectory
define('VIEW_PATH', __DIR__ . '/views');

/**
 * Asset helper function to generate correct paths for CSS, JS, images.
 *
 * @param string $path The path to the asset relative to the public/assets directory.
 * @return string The full URL to the asset.
 */
function asset(string $path): string
{
    // In a real app, you might get this from a config file.
    // For this project, we assume assets are served from the root.
    // The web server should be configured to serve the /app/public/assets directory.
    // However, since the entry point is /public/index.php, the relative path from there is ../app/assets.
    // Let's assume the final setup will have a symlink or a build step, and assets are at /assets.
    return BASE_URL . ltrim($path, '/');
}
