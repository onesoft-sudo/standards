<?php

$ignore = [".git", ".github", "LICENSE.md", basename(__FILE__)];

function validateFiles(string $dir = ".") {
    global $ignore;
    $contents = array_filter(scandir($dir), fn($d) => $d !== "." || $d !== "..");
    chdir($dir);
    
    foreach ($contents as $file) {
        if (in_array($file, $ignore)) {
            continue;
        }
        
        if (is_dir($file)) {
            validateFiles($file);
            continue;
        }
        
        $text = file_get_contents($file);
        
        if (!preg_match("/^(\s*)\#(.*)/mi", $text)) {
            echo "File validation failed: " . realpath($file);
            exit(-1);
        }
    }
    
    chdir("..");
}

validateFiles();