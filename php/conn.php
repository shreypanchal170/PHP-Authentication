<?php
    $conn = new mysqli("localhost", "root", "", "myphp");
 
    if(!$conn){
        die("Error: Cannot connect to the database");
    }
?>