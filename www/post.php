<?php session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);
  file_put_contents("posts.txt", "{$_SESSION['user']} - $title: $content\n", FILE_APPEND);
  $posted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Post</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <h2>Create a Post</h2>
    <?php if (!empty($posted)) echo "<p class='success'>Post created!</p>"; ?>
    <form method="POST">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" required>
      <label for="content">Content</label>
      <textarea id="content" name="content" required></textarea>
      <button type="submit">Post</button>
    </form>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
