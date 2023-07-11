<?php
include('../config/config.php');
include('../functions/common_function.php');

if (isset($_POST['user_login'])) {
  $user_username = $_POST['user_username'];
  $user_password = $_POST['user_password'];
  $user_ip = getIPAddress();

  $select_query = "SELECT * FROM `daftar_user` WHERE username = '$user_username'";
  $result = mysqli_query($conn, $select_query);

  if ($result) {
    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
      $row_data = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $user_username;

      if (password_verify($user_password, $row_data['pass_user'])) {
        $_SESSION['username'] = $user_username;
        echo "<script>alert('Login Successful')</script>";
        echo "<script>window.open('index_user.php', '_self')</script>";
      } else {
        echo "<script>alert('Invalid password')</script>";
      }
    } else {
      echo "<script>alert('Username not registered')</script>";
    }
  } else {
    echo "Error: " . mysqli_error($conn); // Tampilkan pesan error jika query SELECT gagal
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .login-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-top: 100px;
      position: relative;
    }
    .login-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-form .back-button {
      position: absolute;
      top: 0px;
      left: 10px;
      font-size: 40px;
      color: #333;
      text-decoration: none;
      background-color: #fff;
      padding: 5px 10px;
      border-radius: 50%;
    }
    .register-link {
      display: block;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-form">
          <a href="../index.php" class="back-button">&larr;</a>
          <h2>Login</h2>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="user_username" class="form-label">Username</label>
              <input type="text" class="form-control" id="user_username" name="user_username" required>
            </div>
            <div class="mb-3">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" class="form-control" id="user_password" name="user_password" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="user_login">Login</button>
              <a href="register_user.php" class="register-link">Register</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
