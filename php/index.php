<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Isitnewyear</title>
</head>

<body>
<?php
$items = array('ahri.jpg','ryze.jpg','hecarim.jpg');
foreach($items as $item){
  echo "<img src='/php/$item' width=50px height=50px alt='$item'>";

}
?>
<h1>function</h1>
<?php 
$item = array('ahri.jpg','hecarim.jpg');
foreach($items as $item){
  echo "<img scr='images/$item' width=50px height=50px alt='$item'>";
}
?>
</body>

</html>