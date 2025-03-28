<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$delete = $_GET['del'];
if ($delete > 0) {
    $sql = "DELETE FROM EMPLOYEE1 WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $delete);
  if ($stmt->execute()) {
        echo "<script>location.replace('dashboard.php');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
