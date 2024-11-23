<?php
// page4.php
session_start();
$page3Visits = $_SESSION['page3_visits'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница 4</title>
</head>
<body>
<h1>Страница 4</h1>
<p>Страница 3 была открыта <?php echo $page3Visits; ?> раз.</p>
</body>
</html>
