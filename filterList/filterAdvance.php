<?php

$int = 122;
$min = 100;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) == true) {
    echo "yes" . "<br>";
} else {
    echo "No" . "<br>";
}

//check ip V6

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) == true) {
    echo "yes, this is ip V6<br>";
}else {
    echo "No, its not ip V6<br>";
}

//check URL
//question?
$url = "www.alirezakohandani.ir";
if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) == true) {
    echo "valid URL<br>";    
}else {
    echo "not valid URL<br>";
}

$str = "<h1>Hello WorldÆØÅ!</h1>";
  $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  echo $newstr;

