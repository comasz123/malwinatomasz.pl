<?php

$rootDir = __DIR__;
$excludeDirs = ['includes'];
$extensions = ['html', 'shtml'];

$ssiFooter = "\n<!--#include virtual=\"/includes/footer.html\" -->\n";

$footerRegex = '/<footer[\s\S]*?<script[\s\S]*?<\/script>\s*/i';

function processDir($dir, $excludeDirs, $extensions, $footerRegex, $ssiFooter) {
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $fullPath = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($fullPath)) {
            if (in_array($file, $excludeDirs)) {
                continue;
            }
            processDir($fullPath, $excludeDirs, $extensions, $footerRegex, $ssiFooter);
        }

        if (is_file($fullPath)) {
            $ext = pathinfo($fullPath, PATHINFO_EXTENSION);
            if (!in_array($ext, $extensions)) continue;

            $content = file_get_contents($fullPath);

            if (preg_match($footerRegex, $content)) {
                // backup
                copy($fullPath, $fullPath . '.bak');

                $newContent = preg_replace($footerRegex, $ssiFooter, $content, 1);
                file_put_contents($fullPath, $newContent);

                echo "✔ Zmieniono: $fullPath\n";
            }
        }
    }
}

processDir($rootDir, $excludeDirs, $extensions, $footerRegex, $ssiFooter);

echo "\n✅ Gotowe.\n";
