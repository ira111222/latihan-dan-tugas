<!DOCTYPE html>
<html>
<head>
<style>
.kotak {
  width: 50px;
  height: 50px;
  border: 1px solid black;
  text-align: center;
  line-height: 50px;
}
</style>
</head>
<body>

<?php
$huruf1 = "A";
$huruf2 = "B";
$huruf3 = "C";
?>

<div style="display: inline-block;">
  <div class="kotak"><?php echo $huruf1; ?></div>
</div>

<div style="display: inline-block;">
  <div class="kotak"><?php echo $huruf1; ?></div>
  <div class="kotak"><?php echo $huruf2; ?></div>
</div>

<div style="display: inline-block;">
  <div class="kotak"><?php echo $huruf1; ?></div>
  <div class="kotak"><?php echo $huruf2; ?></div>
  <div class="kotak"><?php echo $huruf3; ?></div>
</div>

</body>
</html>