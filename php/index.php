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
  function display_image_list($imagelist)
  {
    foreach ($imagelist as $item) {
      echo "<img scr='images/$item' width=50px height=50px alt='$item'>";
    }
  }
  $item = array('ahri.jpg', 'hecarim.jpg', 'ryze.jpg');
  ?>
  <h1>function</h1>
  <?php
  require('13-function.php');
  $item = array('ahri.jpg', 'hecarim.jpg');
  display_image_list($item);

  ?>
</body>

</html>