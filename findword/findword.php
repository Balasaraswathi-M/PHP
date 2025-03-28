<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $target_dir = "uploads/";  
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;  
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));  // File type validation
    if ($fileType != "txt" && $fileType != "html" && $fileType != "php") {
        echo "<div style='color: red;'>Sorry, only txt, html, and php files are allowed.</div>";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "<div style='color: red;'>Sorry, the file was not uploaded.</div>";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $myfile = fopen($target_file, "r");
            echo "<div style='white-space:pre-wrap; width:600px; background-color:white; box-shadow:4px 3px 4px 2px #faebd7; padding:40px; margin:20px auto;'>" . fread($myfile, filesize("$target_file")) . "</div>";
            echo "<form method='POST' action='updatedfile.php' style='margin:20px auto; width:500px; background-color:#c16da2; border-radius:11px; padding:40px; color:white;'>";
            echo "<input type='hidden' name='uploaded_file' value='" . $target_file . "'/>";
            echo "<label for='find'>FIND:</label>";
            echo "<input type='text' name='find' style='margin-bottom: 19px; margin-left:42px; border-radius:5px; padding:7px; border:0px;'/><br/>";
            echo "<label for='replace'>REPLACE:</label>";
            echo "<input type='text' name='replace' style='margin-bottom:25px; padding:7px; margin-left:12px;border-radius:6px;border:0px;'/><br/>";
            echo "<input type='submit' value='Replace' style='background-color: #4CAF50; color: white; border: none; padding: 10px 20px; cursor: pointer;'/>";
            echo "</form>";
        } else {
            echo "<div style='color: red;'>Sorry, there was an error uploading your file.</div>";
        }
    }
 }
?>
