<?php

//include '..\include\header.html';
include_once 'dbclass.php';

Class LoadXML extends Baza {

public function insertxml() {

	foreach(glob('XMLdata/*.xml') as $filename){

	$xml=simplexml_load_file("$filename") or die("Error: Cannot create object");
	$JobName=$xml->JOB->JobName;
	$PlateName=$xml->Plate->PlateName;
	//$Datum=$xml->JOB->Date;
	/*$Datum=substr($xml->JOB->Date,0,11);
	$Datum=date_create("$Datum");
	$Datum=date_format($Datum,"d-m-Y");*/
	$Datum=$xml->JOB->Date;
	$Datum=date_create("$Datum");
	$Datum=date_format($Datum,"Y-m-d");

	$Povrsina=$xml->Images->Name->TotalArea;

	foreach ($xml->Images->Name as $name) {
		$sql = "INSERT  INTO klisei (JobName, Name , PlateName, Datum, Povrsina)
	VALUES ('$JobName', '$name', '$PlateName','$Datum', '$Povrsina')";
	$conn=$this->connect();
	?>

	<table class="table table-bordered">
	<thead>
	    <tr>
	      <th>JobName</th>
	      <th>Name</th>
	      <th>PlateName</th>
	      <th>Datum</th>
	      <th>Povrsina</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>

	<?php
	echo      "<td>$JobName</td>";
	  echo    "<td>$name</td>";
	  echo    "<td>$PlateName</td>";
	  echo    "<td>$Datum</td>";
	  echo    "<td>$Povrsina</td>";
	echo  "</tbody> </table> </div></body>";



	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    echo "<br>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	}

	}


	$x= count ($xml->Images->Name);
	$conn->close();


}
}
?>
