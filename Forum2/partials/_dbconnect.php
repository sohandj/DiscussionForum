<?php
    //php script to connect to database

    $servername = 'localhost';
    $username = 'root';
    $passward = '';
    $database = 'forum';


    $conn = mysqli_connect($servername,$username,$passward,$database);

    
?>