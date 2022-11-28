<h2>hello news</h2>

<?php 
    while ( $row= mysqli_fetch_array($data["nguoidung"])){
        echo "<br/>";
        echo $row["name"];
    }

?>