<?php
    include_once('../db.php'); 
        $sql = "SELECT value as oddsMeron FROM settings where ID = 4";
        $resultset = mysqli_query($conn, $sql); //or die("database error:". mysqli_error($conn));  
        while($record = mysqli_fetch_assoc($resultset)) {
            echo number_format($record['oddsMeron']);
        }
 ?>