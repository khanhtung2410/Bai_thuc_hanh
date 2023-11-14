<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Document</title>
</head>
<?php
 $items = array('item 1','item 2','item 3');
foreach ($items as $item)
{
  echo "<img scr='image/$item width = 50px height =50px  alt='$item'>";
}
 ?>
</body>

</html>