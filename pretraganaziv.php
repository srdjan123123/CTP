<?php
//global $a;

echo "broj rezultata pretrage=".$results->num_rows. "</br></br>";
$a=0;
if ($results->num_rows > 0) {
    echo "<table class='table table-bordered'><tr><th>JobName</th><th>Name</th><th>PlateName</th><th>Datum</th><th>Komentar</th><th>Povrsina</th></tr>";
    // output data of each row
    while($row = $results->fetch_assoc()) {
    	$a+=$row["Povrsina"];
//        echo "<tr><td>".$row["JobName"]."</td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]."</td><td> ".$row["Komentar"].   "</td></tr>";
$id=$row["id"];
echo "<tr><td><a href='edit.php?id=$id'>".$row["JobName"]."</a></td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]. "</td><td> ".$row["Komentar"]."</td><td> ".$row["Povrsina"].  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "broj klisea=".$results->num_rows. "<br>";
echo "povrsina=".$a;



/*
$a=0;

if ($results->num_rows > 0) {
    echo "<table class='table table-bordered'><tr><th>JobName</th><th>Name</th><th>PlateName</th><th>Datum</th><th>Komentar</th><th>Povrsina</th></tr>";
    // output data of each row
    while($row = $results->fetch_assoc()) {
    	$a+=$row["Povrsina"];
//        echo "<tr><td>".$row["JobName"]."</td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]."</td><td> ".$row["Komentar"].   "</td></tr>";
$id=$row["id"];
echo "<tr><td><a href='edit.php?id=$id'>".$row["JobName"]."</a></td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]. "</td><td> ".$row["Komentar"]."</td><td> ".$row["Povrsina"].  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "broj klisea=".$results->num_rows. "<br>";
echo "povrsina=".$a;*/
?>
