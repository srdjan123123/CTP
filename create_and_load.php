<?php
include 'header.html';
include_once 'tabelaklisei.php';
include_once 'loadXML.php';
$createkliseitable=new Tabela();
$createkliseitable-> createtable();

$load=new LoadXML();
$load-> insertxml();

?>
