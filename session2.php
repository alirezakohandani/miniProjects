<?php
    session_start();
    echo "<h1 style='text-align: center'>give data from session define in sessio1.php</h1>";
    echo "My FristName is " . $_SESSION['FirstName'] . " And My LastName is " . $_SESSION['LastName'];

?>