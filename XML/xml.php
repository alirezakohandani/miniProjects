<?php
libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8' ?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml =(array) simplexml_load_string($myXMLData) or die|("Error: Cannot create object");

foreach ($xml as $key => $value) {
    echo $key . " is " . $value . "<br>";
}

//error handeling for XML file

$myXMLData2 =
"<?xml version='1.0' encoding='UTF-8' ?>
  
<document> 
<user>John Doe</wronguser> 
<email>john@example.com</wrongemail> 
</document>"; 

$xml2 = simplexml_load_string($myXMLData2);

if ($xml2 === false) {
    echo "failed loading XML: ";
    foreach (libxml_get_errors() as $error) {
       echo "<br>" . $error->message;
    }
}

echo "<br>";
$xml3=simplexml_load_file("note.xml") or die("Error: Cannot create object");
print_r($xml3);

echo $xml3->to . "<br>";
echo $xml3->from . "<br>";

