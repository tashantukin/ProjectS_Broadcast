<?php
    include_once('../db.php'); 
        $sql = "SELECT value as oddsWala FROM settings where ID = 3";
        $resultset = mysqli_query($conn, $sql); //or die("database error:". mysqli_error($conn));  
        while( $record = mysqli_fetch_assoc($resultset)) {
            echo number_format($record['oddsWala']);
        }
 ?>