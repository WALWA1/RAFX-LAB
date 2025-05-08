<?php
$comment = $_POST['comment'] ?? '';
$filtered = strip_tags($comment);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Medium XSS</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h1>Comment Section</h1>
  <form method="POST">
    <textarea name="comment" placeholder="Leave a comment..."></textarea>
    <button type="submit">Post</button>
  </form>
  <?php if ($comment): ?>
    <p>Your comment: <?= $filtered ?></p> <!-- Some tags removed -->
  <?php endif; ?>
</div>
</body>
</html>
