<?php
// router.php - Local PHP server router for clean URLs

$requestUri = $_SERVER["REQUEST_URI"];
$parsedUrl = parse_url($requestUri);
$path = $parsedUrl['path'] ?? '/';

// 1. Serve static files directly
if (preg_match('/\.(?:png|jpg|jpeg|gif|webp|css|js|xml|txt|ico|svg|woff2?|ttf|eot)$/i', $path)) {
    return false;
}

// 2. Remove trailing slashes (except root '/')
if ($path !== '/' && substr($path, -1) === '/') {
    $path = rtrim($path, '/');
}

// 3. 301 Redirects for Deleted Blogs
$redirectUrls = [
    '/who-is-the-owner-of-reliance-met-city',
    '/who-is-the-owner-of-reliance-met-city.php',
    '/what-is-the-plot-rate-in-reliance-met-city-jhajjar',
    '/what-is-the-plot-rate-in-reliance-met-city-jhajjar.php',
    '/companies-in-reliance-met-city',
    '/companies-in-reliance-met-city.php',
    '/how-much-land-is-in-reliance-met-city',
    '/how-much-land-is-in-reliance-met-city.php',
];

if (in_array($path, $redirectUrls, true)) {
    header("Location: https://reliancecityplots.in/blog/", true, 301);
    exit;
}

// 4. Handle common aliases (e.g. /blogs -> /blog.php)
if ($path === '/blogs') {
    $path = '/blog.php';
}

$file = __DIR__ . $path;

// 5. Resolve directories or files
if (is_dir($file)) {
    if (file_exists($file . '/index.php')) {
        $file .= '/index.php';
    } elseif (file_exists($file . '/index.html')) {
        $file .= '/index.html';
    }
} elseif (!file_exists($file)) {
    if (file_exists($file . '.php')) {
        $file .= '.php';
    }
}

// 6. Include target file or 404
if (file_exists($file) && !is_dir($file)) {
    include $file;
} else {
    http_response_code(404);
    echo "<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>404 Not Found</h1><p>The page requested <code>" . htmlspecialchars($path) . "</code> was not found on this server.</p><p><a href='/'>Go to Home</a></p></body></html>";
}
?>
