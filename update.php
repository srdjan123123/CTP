<?php


include 'baza.php';
include 'header.html';
$komentar=$_GET["komentar"];
$id=$_GET["id"];
echo $komentar;
echo $id;
$sql = "UPDATE klisei SET Komentar='$komentar' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$sql = "SELECT * FROM klisei WHERE id= '$id' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<table class='table table-bordered'><tr><th>JobName</th><th>Name</th><th>PlateName</th><th>Datum</th><th>Komentar</th></tr>";
echo "<tr><td><a href='edit.php/id=$id'>".$row["JobName"]."</a></td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]. "</td><td> ".$row["Komentar"].  "</td></tr>";
/*echo "<tr><td>".$row["JobName"]."</td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]. "</td><td><form action='/Klisei/update.php' method='get'><input type='text' name='komentar'><input type='hidden' name='id' value='$rest'><input type='submit'><br> ".$row["Komentar"].  "</td></tr>";*/


$conn->close();

//header("Location: /Klisei/edit.php");

?>
