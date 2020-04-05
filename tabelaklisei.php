<?php

include 'dbclass.php';

Class Tabela extends Baza {

public function createtable() {
  $sql ="CREATE TABLE if not exists klisei (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  JobName VARCHAR(20) NOT NULL,
  Name VARCHAR(250) NOT NULL,
  PlateName VARCHAR(15),
  Datum VARCHAR(25),
  Komentar VARCHAR(50),
  Povrsina VARCHAR(15)
  )";
$conn=$this->connect();

if ($conn->query($sql) === TRUE) {
    echo "Table klisei created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
}

}

?>
