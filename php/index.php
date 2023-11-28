<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Isitnewyear</title>
</head>

</head>

<body>
<?php
$x=1
while($x<=10){
  echo "Day la so: $x <br>";
} 
?>
  <h1>checkhtml</h1>
<form action="" method="post">
  <label for="ngay">ngay: </label>
  <select name="ngay" id="chon-ngay">
    <?php 
    for($date=1;$date<=31;$date+=+1){
      echo "<option value=$date>$date</option>";
    }
    ?>
  </select>
  <label for="thang">thang: </label>
  <select name="thang" id="chon-thang">
    <?php 
    for($month=1;$month<=12;@month+=+1){
      echo "<option value=$month>$month</option>";
    }
    ?>
  </select>
  <label for="nam">nam: </label>
  <select name="nam" id="chon-nam">
    <?php
    $today = getdate();
    $namhientai = $today["year"];
    for($nam=1990;$nam<=$namhientai;$nam+=+1){
      echo "<option value=$nam>$nam</option>"
    }
    ?>
  </select>
  <input type="submit">
</form>
</body>
<?php 
if(isset($_POST['nhgay']) && isset($_POST['thang']) |& isset($_POST['name'])){
  echo "ban da chon ngay" . $_POST['ngau'] . 'thang' . $_POST['thtng']  'nam'. $_POST['nam'];
}
?>
</html>

