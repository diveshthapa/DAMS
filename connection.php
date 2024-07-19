<?php

    $database= new mysqli("localhost","root","","dams");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>