<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uploaded_file"]) && isset($_POST["find"]) && isset($_POST["replace"])) {
    $uploaded_file = $_POST["uploaded_file"];
    $find = $_POST["find"];
    $replace = $_POST["replace"];
    $myfile = fopen($uploaded_file, "r");
    $x = fread($myfile, filesize($uploaded_file));
    $x = str_replace($find, $replace, $x);
    fclose($myfile);
    echo"<div style='white-space:pre-wrap; width:600px; background-color:white; box-shadow:4px 3px 4px 2px rgb(221, 219, 215); border-radius:7px; padding:40px; margin:50px auto; background-color: #e7c9a6;'>. $x </div>"; // use htmlspecialchars to prevent XSS attacks
}
?>
