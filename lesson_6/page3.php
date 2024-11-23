<?php
// page3.php
session_start();

if (!isset($_SESSION['page3_visits'])) {
    $_SESSION['page3_visits'] = 0;
}
$_SESSION['page3_visits']++;

if ($_SESSION['page3_visits'] % 3 === 0) {
    header('Location: page4.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница 3</title>
</head>
<body>
<h1>Страница 3</h1>
<p>Количество посещений этой страницы: <?php echo $_SESSION['page3_visits']; ?></p>
</body>
</html>
