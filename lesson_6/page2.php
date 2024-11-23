<?php
// page2.php
if (!isset($_GET['text'])) {
    die('Не передан текст для скачивания');
}

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="download.txt"');
echo htmlspecialchars($_GET['text']);
