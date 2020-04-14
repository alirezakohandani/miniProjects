<?php
    //set timezone Asia Tehran
    $date = date_default_timezone_set("Asia/Tehran");
    $date = date("Y-m-d h:i:sa");
    echo $date . "<br>";
    
    //unix (January/1970 00:00:00 GMT)
    $d = mktime(11, 14, 54, 8, 12, 2019);
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    //convert string to date with strottime()
    $da1 = strtotime("10:30pm April 15 2014");
    echo date("Y-m-d h:i:sa", $da1) . "<br>";

    $da2 = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $da2) . "<br>";

    $da3 = strtotime("next saturday");
    echo date("Y-m-d h:i:sa", $da3) . "<br>";

    $da4 = strtotime("+3 months");
    echo date("Y-m-d h:i:sa", $da4) . "<br>";

    $startdate = strtotime("Saturday");
    $end = strtotime("+6 weeks", $startdate);
    while ($startdate < $end) {
        echo date("Y-m-d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    //questions??
    $d1=strtotime("May 01 2020");
    $d2=ceil(($d1-time())/2020/03/23);
    echo "There are " . $d2 ." days until 4th of July.";
?>