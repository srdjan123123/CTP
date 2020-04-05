<?php



include_once 'kliseview.class.php';
include 'header.html';
include 'pretraganaziv.html';
include 'kalendar.html';


if (isset($_GET["name"])) {
//  $naziv=$_GET["name"];
//  echo $naziv;
//echo "</br>".@$GLOBALS['a'];
echo "<h3>Rezultati pretrage za naziv koji sadrži :".$_GET["name"]."</h3>";
echo "</br></br>";
$naziv="%{$_GET['name']}%";
$pretraganaziv=new KliseView();
$pretraganaziv->shownamepovrsina($naziv);
$pretraganaziv=new KliseView();
$pretraganaziv->showname($naziv);

//
//echo "</br>".$GLOBALS['a'];
}

elseif (isset($_GET["date"]) ) {
$datum=$_GET['date'];
$datum=date_create("$datum");
$datum=date_format($datum,"Y-m-d");
echo "Pretraga za datum  ". $datum ."</br></br>";
$pretragadatum=new KliseView();
$pretragadatum-> showdatepovrsina($datum);
$pretragadatum=new KliseView();
$pretragadatum-> showdate($datum);
}
elseif(isset($_GET["date1"])&&isset($_GET["date2"]) ) {

$datum1=$_GET['date1'];
$datum2=$_GET['date2'];
/*$datum1=date_create("$datum1");
$datum1=date_format($datum1,"Y-m-d");
$datum2=date_create("$datum2");
$datum2=date_format($datum2,"Y-m-d");*/
//echo "Od ".date_format($datum1,"d-m-Y")." do ".date_format($datum2,"d-m-Y");

//echo $sddsf;
$date1=date_create($_GET['date1']);
$date2=date_create($_GET['date2']);
echo "Rezultati pretrage za datum od ".date_format($date1,"d-M-Y")." do ".date_format($date2,"d-M-Y")."</br>";

$pretragadatum12=new KliseView();
$pretragadatum12-> showdatepovrsina12($datum1, $datum2);
$pretragadatum12=new KliseView();
$pretragadatum12-> showdate12($datum1, $datum2);

}

else {
  $view=new KliseView();
  $view->showAll();
}







?>
