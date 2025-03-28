<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$edit = $_GET['edit'];

$name = $age = $email = $mobileno = $imagename = "";
if ($edit > 0) {
    $sql = "SELECT * FROM EMPLOYEE1 WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $edit);
    $stmt->execute();
    $run = $stmt->get_result();

    if ($run->num_rows > 0) {
        $row = $run->fetch_assoc();
        $id = $row['id'];
        $name = $row['Emp_name'];
        $age = $row['Age'];
        $email = $row['Email'];
        $mobileno = $row['MobileNo'];
        $imagename = $row['image_name'];

    } else {
        die("No record found with ID: $edit");
    }
    $stmt->close();
}

if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $imagename = basename($_FILES["image"]["name"]);

    $targetfile = $target_dir . $imagename;
    $uploadok = 1;
 $imageFileType=strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
 {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadok = 0;
}
$uploaded_image = "default.jpg";
    if ($uploadok == 0)
     {
        echo "Sorry, your file was not uploaded.";
      } 
      else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetfile)) {
            $uploaded_image = $targetfile;
           
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
   
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $mobileno = $_POST["mbl"];

    $sql = "UPDATE EMPLOYEE1 SET Emp_name = ?, Age = ?, Email = ?, MobileNo = ?, image_name=? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssi", $name, $age, $email, $mobileno,$imagename, $edit);

    if ($stmt->execute()) {
        echo "<script>location.replace('dashboard.php');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your Name" value="<?php echo $name; ?>" required/>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your Age" value="<?php echo $age; ?>" required/>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email ID" value="<?php echo $email ?>" required/>

            <label for="mbl">Mobile No.:</label>
            <input type="number" id="mbl" name="mbl" placeholder="Enter your Mobile No." value="<?php echo $mobileno ?>" required maxlength="10"/>
             <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" required/>
            <img src="uploads/<?php echo $imagename; ?>" style="width:200px; height:200px;"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>