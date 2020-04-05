<?php

include_once 'tabelaklisei.php';
include_once 'loadXML.php';
include_once 'kliseview.class.php';
include 'header.html';
include 'pretraganaziv.html';
include 'kalendar.html';

if (isset($_GET["name"])) {
//  $naziv=$_GET["name"];
//  echo $naziv;
$naziv="%{$_GET['name']}%";
$pretraganaziv=new KliseView();
$pretraganaziv->showname($naziv);
}

elseif (isset($_GET["date"]) ) {
$datum=$_GET['date'];
$datum=date_create("$datum");
$datum=date_format($datum,"d-m-Y");
echo "Pretraga za datum  ". $datum;
$pretragadatum=new KliseView();
$pretragadatum-> showdate($datum);
}
elseif(isset($_GET["date1"])&&isset($_GET["date2"]) ) {
$datum1=$_GET['date1'];
$datum2=$_GET['date2'];
$datum1=date_create("$datum1");
$datum1=date_format($datum1,"d-m-Y");
$datum2=date_create("$datum2");
$datum2=date_format($datum2,"d-m-Y");
echo $datum1;
echo '<br>';
echo $datum2;
$pretragadatum12=new KliseView();
$pretragadatum12-> showdate12($datum1, $datum2);
}

else {
  $view=new KliseView();
  $view->showAll();
}



/*$createkliseitable=new Tabela();
$createkliseitable-> createtable();*/

/*$load=new LoadXML();
$load-> insertxml();*/



?>
