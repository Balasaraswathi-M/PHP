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
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$sql2="UPDATE STUDENT1 SET FIRSTNAME='$fname',LASTNAME='$lname',EMAIL='$email' WHERE ID = '$id'";
$result3=$conn->query($sql2);
if ($result3 === TRUE) {
    $sql3="SELECT * FROM STUDENT1";
    $result4 = $conn->query($sql3);
  if ($result4->num_rows > 0) {
            while ($row = $result4->fetch_assoc()) {
                echo "<br> First Name: " . $row["FIRSTNAME"] .
                     "<br> Last Name: " . $row["LASTNAME"] .
                     "<br> Email id: " . $row["EMAIL"] . "<br>".
                     "<button><a href='data.php'>Back</a></button>";
            } 
        } else {
            echo "No updated record found.";
        }
   
} else {
    echo "Error updating record: " . $conn->error;
}



mysqli_close($conn);
?>