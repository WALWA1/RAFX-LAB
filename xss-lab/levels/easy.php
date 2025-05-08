<?php
$feedback = $_POST['feedback'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Easy XSS</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h1>Feedback Form</h1>
  <form method="POST">
    <textarea name="feedback" placeholder="Your feedback..."></textarea>
    <button type="submit">Submit</button>
  </form>
  <?php if ($feedback): ?>
    <p>Thank you: <?= $feedback ?></p> <!-- VULNERABLE -->
  <?php endif; ?>
</div>
</body>
</html>
