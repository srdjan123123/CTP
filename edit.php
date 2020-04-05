<?php


include 'classedit.php';

include 'header.html';

if (isset($_GET["id"]) ) {
$id= $_GET["id"];

$obj=new Edit;
$obj->edit($id);
}




?>
