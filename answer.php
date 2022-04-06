<?php
require_once("./class/PythagoreanTheorem.php");

$a = $_GET['a'];
$b = $_GET['b'];
$pt = new PythagoreanTheorem();
$answer = $pt->createAnswer($a,$b);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>回答</title>
</head>
<body>
    <h1>回答</h1>
    <p>
    <?php print $answer; ?>
    </p>
    <a href="./index.php">戻る</a>
</body>
</html>