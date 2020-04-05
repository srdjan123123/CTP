<?php

/*include 'baza.php';
include 'header.html';
include 'query.php';*/


echo "<h1> Baza podataka klišei </h1><br>";


        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 15;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $conn=$this->connect();
        $total_pages_sql = "SELECT COUNT(*) FROM klisei";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM klisei LIMIT $offset, $no_of_records_per_page";

        $res_data = mysqli_query($conn,$sql);
        echo "<table class='table table-bordered'><tr><th>JobName</th><th>Name</th><th>PlateName</th><th>Datum</th><th>Komentar</th><th>Površina</th></tr>";
        while($row = mysqli_fetch_array($res_data)){
            $id=$row["id"];
            echo "<tr><td><a href='edit.php?id=$id'>".$row["JobName"]."</a></td><td>".$row["Name"]."</td><td> ".$row["PlateName"]."</td><td> ".$row["Datum"]. "</td><td> ".$row["Komentar"]. "</td><td> ".$row["Povrsina"]. "</td></tr>";

        }


        $conn->close();
    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>
