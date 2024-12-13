<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname="blog";

    $conn = new mysqli($serverna,$username, $password,$dbname);

    if($conn -> connect_error){
        die("Connection failed :".$conn -> connect_error );
    }else{
        
    }
?>