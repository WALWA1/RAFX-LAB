<?php
$q = $_GET['q'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Very Easy XSS</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <h1>Search</h1>
  <form method="GET">
    <input type="text" name="q" placeholder="Search here">
    <button type="submit">Go</button>
  </form>
  <?php if ($q): ?>
    <p>Results for: <?= $q ?></p> <!-- VULNERABLE -->
  <?php endif; ?>
</div>
</body>
</html>
