<?php
$contact = $_POST['msg'] ?? '';
$safe = preg_replace('/[^a-zA-Z0-9 .,!?]/', '', $contact); // basic input sanitization
header("Content-Security-Policy: default-src 'self'; script-src 'none';");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Insane XSS</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h1>Contact Us</h1>
  <form method="POST">
    <textarea name="msg" placeholder="Message..."></textarea>
    <button type="submit">Send</button>
  </form>
  <?php if ($contact): ?>
    <p>Message received: <?= $safe ?></p> <!-- Strict CSP + sanitization -->
  <?php endif; ?>
</div>
</body>
</html>
