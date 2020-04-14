<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    //check extension file for real image
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else {
            echo "File is not an image";
            $uploadOk = 0;
        }
    }
    //Check if file already exits
    if (file_exists($target_file)) {
        echo "sorry this file exists";
        $uploadOk = 0;
    }

    //Allow just this formats
    if ($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "png" && $imageFileType !== "gif" ) {
        echo "sorry, your format is wrong";
        $uploadOk = 0;

    //Check filesize
    if ($_FILES['fileToUpload']['size'] > 500000) {
        echo "sorry, your file is too large";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "sorry, you dont allow to upload your file";
    } else {
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "The file" . basename($_FILES['fileToUpload']['name']) . "has been uploaded.";
        }
        else {
            echo "sorry, there was an error uploading your file";
        }
    }
    ?>

<html>
<head>

</head>
<body>
<form action = "send-image.php" method="POSt" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">

</form>
</body>
</html>