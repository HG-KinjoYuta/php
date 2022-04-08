<?php
require_once("./class/Create.php");

$content = $_POST['content'];

$create = new Create();

$create->createTask($content);

header("Location:index.php");

?>