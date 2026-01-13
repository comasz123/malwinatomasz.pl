<?php

$rootDir = __DIR__;

/**
 * Recursively scan directories for HTML files
 */
function scanHtmlFiles(string $dir): array {
    $files = [];

    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') continue;

        $path = $dir . DIRECTORY_SEPARATOR . $item;

        if (is_dir($path)) {
            $files = array_merge($files, scanHtmlFiles($path));
        } elseif (is_file($path) && preg_match('/\.html$/i', $item)) {
            $files[] = $path;
        }
    }

    return $files;
}

$htmlFiles = scanHtmlFiles($rootDir);

foreach ($htmlFiles as $file) {
    $content = file_get_contents($file);

    // Skip if already converted
    if (strpos($content, 'include virtual="/includes/header.html"') !== false) {
        continue;
    }

    // Replace <header>...</header>
    $newContent = preg_replace(
        '/<header\b[^>]*>[\s\S]*?<\/header>/i',
        '<!--#include virtual="/includes/header.html" -->',
        $content,
        1
    );

    if ($newContent !== null && $newContent !== $content) {
        file_put_contents($file, $newContent);
        echo "✔ Updated: {$file}\n";
    }
}

echo "Done.\n";
