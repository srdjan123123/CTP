<?php

include_once 'klise.class.php';
class KliseView extends KliseClass{


public function showname($naziv) {
  $results=$this->getName($naziv);
  //echo $results['BrojBoja'];
  //echo gettype ($results);

  echo "<br>";
  //echo $id;
  include 'pretraganaziv.php';
}

public function shownamepovrsina($naziv) {
  $results=$this->getNamepovrsina($naziv);
  $results=$results->fetch_assoc();
  //var_dump ($results);
echo "Ukupna površina rezultata pretrage: ".$results["SUM(Povrsina)"]. " cm2";
echo "<br>";
}


// KOristim za klisee
public function showdate($datum) {
  $results=$this->getdate($datum);
  //echo $results['BrojBoja'];
//  echo gettype ($results);
  echo "<br>";
//var_dump($results);
include 'pretraganaziv.php';
}

public function showdatepovrsina($datum) {
  $results=$this->getdatepovrsina($datum);
  $results=$results->fetch_assoc();
  //var_dump ($results);
echo "Ukupna površina rezultata pretrage: ".$results["SUM(Povrsina)"]. " cm2";
echo "<br>";
}


// KOristim za klisee
public function showdate12($datum1, $datum2) {
  $results=$this->getdate12($datum1, $datum2);
  //echo $results['BrojBoja'];
  //echo gettype ($results);
  echo "<br>";
//var_dump($results);
include 'pretraganaziv.php';
}

public function showdatepovrsina12($datum1, $datum2) {
  $results=$this->getdatepovrsina12($datum1, $datum2);
  $results=$results->fetch_assoc();
  echo "<br>";

echo "Ukupna površina rezultata pretrage: ".$results["SUM(Povrsina)"]. " cm2";
echo "<br>";
}

// ovo koristim za klisee
public function showAll() {
  $results=$this->getAllRn();
//  echo gettype ($results);
  echo "<br>";
include 'alldata.php';
}


}
?>
