<?php


//include 'editclass.php';
include 'dbclass.php';
include 'header.html';

if (isset($_GET["id"]) ) {
$id= $_GET["id"];
}

class Edit extends Baza {
public function edit2($id) {
echo "<br>";

$sql = "SELECT * FROM klisei WHERE id= '$id' ";
$conn=$this->connect();
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<table class='table table-bordered'><tr><th>JobName</th><th>Name</th><th>PlateName</th><th>Datum</th><th>Komentar</th></tr>";
echo "<tr><td>".$row["JobName"]."</td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"].
"</td><td><form action='/update.php' method='get'><input type='text' name='komentar'>
<input type='hidden' name='id' value='$id'><input type='submit'><br> ".$row["Komentar"].  "</td></tr>";
$conn->close();
}
}

$obj=new Edit;
$obj->edit2($id);





?>
