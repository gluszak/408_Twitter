<?php

$servername = "localhost"; 
$username = "root"; 
$password = "coderslab"; 
$baseName = "Twitter";


$conn = new mysqli($servername, $username, $password, $baseName);

if ($conn->connect_error) 
    {die("Nie nawiazano polaczenia. Blad: " .
    $conn->connect_error); 
    }else {
        $conn->set_charset('utf8');
        echo ("Nawiazano polaczenie. <br>");
    }