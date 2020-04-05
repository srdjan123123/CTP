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

// KOristim za klisee
public function showdate($datum) {
  $results=$this->getdate($datum);
  //echo $results['BrojBoja'];
  echo gettype ($results);
  echo "<br>";
//var_dump($results);
include 'pretraganaziv.php';
}
// KOristim za klisee
public function showdate12($datum1, $datum2) {
  $results=$this->getdate12($datum1, $datum2);
  //echo $results['BrojBoja'];
  echo gettype ($results);
  echo "<br>";
//var_dump($results);
include 'pretraganaziv.php';
}


// ovo koristim za klisee
public function showAll() {
  $results=$this->getAllRn();
  echo gettype ($results);
  echo "<br>";
include 'alldata.php';
}


}
?>
