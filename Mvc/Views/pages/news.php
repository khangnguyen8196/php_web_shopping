<h2>hello news</h2>

 <?php 
   
        while ( $row= mysqli_fetch_array($data["categories"]) ){
            echo "<br/>";
            echo $row["name"];
        }
  

?> 