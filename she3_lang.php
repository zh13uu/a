<?php
if (isset($_GET['f'])) {
  $file = $_GET['f'];
  echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre>";
}
?>
