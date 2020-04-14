<?php
//readfile()
echo readfile("note.txt") .  "<hr>";

//fopen("filename", "r") or die("alert")
//fopen mood-->r, w, a, x, r+, w+

//fopen->read
$myfile1 = fopen("note.txt", "r") or die("Unable to open file");
echo fread($myfile1, filesize("note.txt")) . "<hr>";
fclose($myfile1);

//fgets()
$myfiel2 = fopen("note.txt", "r") or die ("Unable to open file");
echo fgets($myfiel2) . "<hr>";
fclose($myfiel2);

//feof()
$myfile3 = fopen("note.txt", "r") or die("Unable to open file");
while (!feof($myfile3)) {
    echo fgets($myfile3) . "<br>";   
}
fclose($myfile3);
echo "<hr>";

//fgetc() -> read character
$myfile4 = fopen("note.txt", "r") or die("Unable to open file!");
while(!feof($myfile4)) {
  $character = fgetc($myfile4);
  echo $character;
  if($character == 'X') {
      break;
  }
}
fclose($myfile4);

//create new file for write
$myfile5 = fopen("test.txt", "w");
$txt = "Joan\n";
fwrite($myfile5, $txt);
fwrite($myfile5, $txt);
fclose($myfile5);

//overwriting in test.txt
fopen("test.txt", "w");
?>