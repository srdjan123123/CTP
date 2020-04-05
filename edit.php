<?php


include 'baza.php';
include 'header.html';

echo "<br>";
if (isset($_GET["id"]) ) {
$id= $_GET["id"];
}

$sql = "SELECT * FROM klisei WHERE id= '$id' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<table class='table table-bordered'><tr><th>JobName</th><th>Name</th><th>PlateName</th><th>Datum</th><th>Komentar</th></tr>";
echo "<tr><td>".$row["JobName"]."</td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]. "</td><td><form action='/update.php' method='get'><input type='text' name='komentar' placeholder='$Komentar'><input type='hidden' name='id' value='$id'><input type='submit'><br> ".$row["Komentar"].  "</td></tr>";
$conn->close();
?>
