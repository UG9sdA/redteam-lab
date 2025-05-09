<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
  file_put_contents("users.txt", "$user:$pass\n", FILE_APPEND);
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <h2>Register</h2>
    <form method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Register</button>
    </form>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
