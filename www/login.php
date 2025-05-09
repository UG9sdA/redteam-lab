<?if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $lines = file("users.txt");
  foreach ($lines as $line) {
    list($storedUser, $storedHash) = explode(":", trim($line));
    if ($storedUser === $user && password_verify($pass, $storedHash)) {
      $_SESSION['user'] = $user;
      header("Location: index.php");
      exit;
    }
  }
  $error = "Invalid credentials.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
    </form>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
