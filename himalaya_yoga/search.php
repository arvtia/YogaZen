<?php
$directory = "."; // Change to your website directory if needed
$files = glob("$directory/*.php"); // Get all PHP files

$pages = [];

foreach ($files as $file) {
    $content = file_get_contents($file); // Read the file content
    $title = ucfirst(str_replace(".php", "", basename($file))); // Use filename as title
    $cleanContent = strip_tags($content); // Remove HTML tags

    $pages[] = [
        "title" => $title,
        "url" => basename($file),
        "content" => substr($cleanContent, 0, 500) // Get first 500 characters
    ];
}

$searchTerm = isset($_GET['q']) ? strtolower($_GET['q']) : '';

$results = [];
if (!empty($searchTerm)) {
    foreach ($pages as $page) {
        if (strpos(strtolower($page['title']), $searchTerm) !== false || strpos(strtolower($page['content']), $searchTerm) !== false) {
            $results[] = $page;
        }
    }
}

echo json_encode($results);
?>