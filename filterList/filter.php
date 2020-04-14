<table>
   <tr>
     <td>Filter Name</td>
     <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
<?php
  echo "<hr>";
  $str = "<h1>Hello how are you</h1>";
  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
  echo $newstr . "<br>";

  $int = 0;
  if (filter_var($int, FILTER_VALIDATE_INT) == 0 || filter_var($int, FILTER_VALIDATE_INT) == true) {
        echo "this is an integer<br>";
  }else {
      echo "this is not integer, Please check<br>";
  }

  $ip ="185.88.152.64";
  if (!filter_var($ip, FILTER_VALIDATE_IP == false)) {
      echo "the ip is valid";
     
  
    } else {
      echo "the ip is not valid!";
  }
?>