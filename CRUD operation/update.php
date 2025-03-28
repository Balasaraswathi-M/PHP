<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
die("connection filed:".$conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$sql2="SELECT * FROM STUDENT1";
$result3=$conn->query($sql2);
if ($result3 === TRUE) {
    echo "$fname,$lname,$email";
} else {
    echo "Error updating record: " . $conn->error;
}


// Close connection
mysqli_close($conn);
?>