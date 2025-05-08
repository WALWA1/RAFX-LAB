<?php
$bio = $_POST['bio'] ?? '';
$safe = htmlspecialchars($bio);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hard XSS</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h1>Edit Profile Bio</h1>
  <form method="POST">
    <textarea name="bio" placeholder="Describe yourself..."></textarea>
    <button type="submit">Save</button>
  </form>
  <?php if ($bio): ?>
    <p>Bio: <?= $safe ?></p> <!-- Proper escaping -->
  <?php endif; ?>
</div>
</body>
</html>
