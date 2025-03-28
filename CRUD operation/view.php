<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn)
{
    die("failed to connect". $conn->connect_error);
}
$name=$_POST["name"];
$age=$_POST["age"];
$emai=$_POST["email"];
$mobileno=$_POST["mbl"];
$sql="SELECT *FROM EMPLOYEE";
$result=$conn->query($sql);
if($result->num_rows >0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<br>"." - Name: ". $row["NAME"]. " " . $row["AGE"] . $row["EMAIL"] .$row["MOBILENO"]."<br>";
    }
}
else{
    echo "Error to create table" .$conn->error;
}
$conn->close();
?>