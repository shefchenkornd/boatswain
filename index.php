<?php
echo '<pre>ООП в PHP: ответы <br><br>';

$currentDir = '.';
$exclude = [
    '.git',
    '.gitignore',
    'docker',
    '.idea',
    'docker-compose.yml',
    'index.php'
];

echo '<ul>';

$files = scandir($currentDir);
sort($files);
foreach ($files as $entry) {

    if (in_array($entry, $exclude)) {
        continue;
    }

    if ($entry != "." && $entry != "..") {

        echo "<li><a href='$entry'>$entry</a></li>";
    }

}
echo '</ul>';