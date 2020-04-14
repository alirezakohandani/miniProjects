<?php

session_start();

$_SESSION['FirstName'] = "Alireza";
$_SESSION['LastName'] = "Kohandani";

echo "My first name is " . $_SESSION['FirstName'] . " And my LastName is " . $_SESSION['LastName']; 