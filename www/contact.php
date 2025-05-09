<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $message = htmlspecialchars($_POST['message']);
  file_put_contents("contacts.txt", "$name: $message\n", FILE_APPEND);
  $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <main>
    <section>
      <h2>Send Us Your Thoughts</h2>
      <?php if (!empty($submitted)) echo "<p class='success'>Message received. Thank you!</p>"; ?>
      <form method="POST">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
      </form>
    </section>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>

