<?php
require_once("./class/Delete.php");
$id = $_POST['id'];

$delete = new Delete();

$delete->deleteTask($id);

header("Location:index.php");

?>