<?php
require_once("./class/Edit.php");
$id = $_POST['id'];
$content = $_POST['content'];

$edit = new Edit();

$edit->editTask($id,$content);

header("Location:show.php?id=".$id);

?>