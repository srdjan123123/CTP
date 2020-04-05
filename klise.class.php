<?php
include_once 'dbclass.php';

class KliseClass extends Baza {
// komunikacija samo sa bazom

//Koristim za Klisee
protected function getName($naziv) {

$sql = "SELECT * FROM klisei WHERE Name LIKE ?";
$conn=$this->connect();
$stmt =$conn->prepare($sql);
$stmt->bind_param('s', $naziv);
$stmt->execute();
$results = $stmt->get_result();
return $results;
//$stmt->close();
}



protected function deleteRn($id) {
$sql = "DELETE FROM plan WHERE id=?  AND StatusRn IS NULL ";
$conn=$this->connect();
$stmt =$conn->prepare($sql);
$stmt->bind_param('i',$id);
$stmt->execute();
//$stmt->close();
}

// ovo koristim za klisee
protected function getAllRn() {
$sql = "SELECT * FROM klisei";
$conn=$this->connect();
$results = $conn->query($sql);
return $results;
//$stmt->close();
}

//Koristim za Klisee
protected function getdate($datum) {
$sql = "SELECT * FROM klisei WHERE Datum=?";
$conn=$this->connect();
$stmt =$conn->prepare($sql);
$stmt->bind_param('s',$datum);
$stmt->execute();
$results = $stmt->get_result();
return $results;
}
//Koristim za Klisee
protected function getdate12($datum1, $datum2) {
$sql = "SELECT * FROM klisei WHERE Datum BETWEEN ? AND ?";
$conn=$this->connect();
$stmt =$conn->prepare($sql);
$stmt->bind_param('ss',$datum1, $datum2);
$stmt->execute();
$results = $stmt->get_result();
return $results;
}



protected function SetRn($RN,$Sifra,$Naziv,$BrojBoja,$Komentar,$StatusRn) {
$sql = "INSERT INTO plan (RN, Sifra , NazivPosla, BrojBoja, Komentar, StatusRn)
VALUES (?,?,?,?,?,?)";
$conn=$this->connect();
$stmt =$conn->prepare($sql);
$stmt->bind_param("ssssss", $RN, $Sifra, $Naziv,$BrojBoja,$Komentar,$StatusRn);
$stmt->execute();
//$stmt->close();
}

protected function updateRn($id, $StatusRn) {
/*echo $id;
echo $StatusRn;*/
$sql = "UPDATE plan SET StatusRn='$StatusRn' WHERE id='$id'";
$conn=$this->connect();

$stmt =$conn->prepare($sql);
//$stmt->bind_param("ss",$id, $StatusRn);
$stmt->execute();
//return $stmt->affected_rows;
//$stmt->close();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}


}

?>
