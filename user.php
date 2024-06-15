<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $file = $_FILES['picture'];
    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $file_error = $file['error'];

    $file_separate = explode('.', $file_name);
    $file_extension = strtolower(end($file_separate));
    $extension = array('jpg', 'jpeg', 'png');

    if (in_array($file_extension, $extension)) {
        $upload_img = "Pictures/" . $file_name;
        move_uploaded_file($file_temp, $upload_img);

        $sql = "INSERT INTO `crud` (name, email, mobile, password, picture) VALUES ('$name', '$email', '$mobile', '$password', '$file_name')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header('location:display.php');
            exit;
        } else {
            echo "Error inserting data: " . mysqli_error($con);
        }
    } else {
        echo "Invalid file type.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Add User</title>
    <link rel="stylesheet" href="login.css">
    <style>
        h1{
            text-align: center;
            color: white;
            font-weight: bold;
            margin-top: 20px;
            margin-right: 20px;
        }
    </style>
</head>
<body class="bg-dark bg-gradient text-white">
    <h1>Login Form</h1>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center m-5">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile Num" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label class="form-label">Picture</label>
                <input class="form-control p-0 h-100" type="file" name="picture" id="picture" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
</body>
</html>
