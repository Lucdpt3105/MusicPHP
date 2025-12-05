<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="music" id="fileToUpload">
        <input type="submit" name="submit" value="Upload File Now" >
    </form>
</body>
</html>


<?php
if(isset($_REQUEST['submit']))
{
    $currentDir = getcwd();
    $errors = []; 
    $fileName = $_FILES['music']['name'];
    $fileSize = $_FILES['music']['size'];
    $fileTmpName  = $_FILES['music']['tmp_name'];
      $fileType = $_FILES['music']['type'];
	if (isset($_POST['submit'])) {

        if ($_FILES["music"]["type"] != "audio/mp3") {
            $errors[] = "This file extension is not allowed. Please upload a Mp3  file";
        }
 if (empty($errors)) 
 {
            $didUpload = move_uploaded_file($fileTmpName, "upload/".$fileName);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }
    }


?>