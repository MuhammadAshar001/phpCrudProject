<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Data Enter</title>
  <style>
    .btn-warning:hover {
      background-color: #ffc107;
      border: 1.5px solid #ec9b00;
    }

    .btn-success:hover {
      background-color: #28a745;
      border: 1.5px solid lightgreen;
    }

    .btn-danger:hover {
      background-color: #dc3545;
      border: 1.5px solid rosybrown;
    }
  </style>
</head>

<body class="bg-info bg-gradient">
  <div class="container">
    <button type="submit" class="btn btn-warning my-5">
      <a href="user.php" class="text-light text-decoration-none">Add User</a>
    </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile No.</th>
          <th scope="col">Password</th>
          <th scope="col">Picture</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($con, $sql);

        if ($result) {
          $serial_number = 1; // Initialize the counter
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            $picture = "Pictures/" . $row['picture'];

            echo '<tr>
            <th scope="row">' . $serial_number . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td><img src="' . $picture . '" alt="Picture" width="100" height="100"/></td>
            <td>
              <button class="btn btn-success"><a href="update.php?updateid=' . $id . '" class="text-light text-decoration-none">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light text-decoration-none">Delete</a></button>
            </td>
          </tr>';
            $serial_number++; // Increment the counter
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
