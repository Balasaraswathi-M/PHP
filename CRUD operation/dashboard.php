<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM EMPLOYEE1";
$run = $conn->query($sql);
if (!$run) {
    die("Query failed: " . $conn->error);
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
    <style>
        body { background-color: #f8f9fa; }
        .container { max-width: 1100px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 50px; }
        .btn { width: 130px; margin: 10px 0; }
        table { width: 100%; margin-top: 20px; }
        th, td { padding: 15px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1 class="text-primary text-center mt-5">Dashboard</h1>
    <div class="container text-start">
        <h2 class="text-dark">Insert Data</h2>
        <div class="flex gap-4">
        <button class="btn btn-primary">
        <a href="insert.php" class="text-decoration-none text-white">Add New</a>
        
        </button>
       
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($run)) {
                    $id = $row['id'];
                    $name = $row['Emp_name'];
                    $age = $row['Age'];
                    $email = $row['Email'];
                    $mobileno = $row['MobileNo'];
                    
                ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $mobileno; ?></td>
                    <td><?php echo "<img src='uploads/{$row['image_name']}' style='width:200px; height:200px;'><br>"; ?></td>
                    <td>
                        <div class="d-flex gap-2">
                            <button class="btn btn-warning">
                                <a href="uploadimg.php?edit=<?php echo $id; ?>" class="text-white text-decoration-none">Edit</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="del.php?del=<?php echo $id; ?>" class="text-white text-decoration-none">Delete</a>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
