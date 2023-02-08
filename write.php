<?php
  if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $file = fopen("data.csv", "w");
    fwrite($file, $input);
    fclose($file);
  }
?>
