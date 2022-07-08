<?php

$ignore = [".git", ".github", "LICENSE.md"];

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
        }
        
        $text = file_get_contents($file);
        
        if (!preg_match("/^(\s+)\#(.*)/", $text)) {
            echo "File validation failed: " . realpath($file);
            exit(-1);
        }
    }
    
    chdir("..");
}

validateFiles();