<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Document</title>
</head>

<body>
  <p>bai 1 - 2 bien dau vao - 1 bien ra</p>
  <?php
  $so1 = 15;
  $so2 = 4;
  if ($so1 > $so2)
    echo $so1;
  else echo $so2;
  ?>
  <p>bai 2 - 3 bien đau vao - 1 bien ra</p>
<?php 
$a = 1;
$b = 2;
$c = 3;
$so_nghiem_x;
?>
<p>bai 3 - 1 bien dau vao (string) - 1 bien ra</p>
<?php 
$string_vidu = "hoc thoi hh";
$so_h = 0;
?>
<p>bai 4 - 2 bien dau vao - 1 bien ra</p>
<?php
$canh_a = 4;
$canh_b = 5;
if($a!=$b) echo "hinh chu nhat";
else echo "hinh vuong" ;
?>

</body>

</html>