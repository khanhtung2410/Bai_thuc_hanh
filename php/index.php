<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Isitnewyear</title>
</head>

<body>
 <h3>currency exchange</h3>
 <form action="" method="post">
  <p>amount</p>
  <input type="number" name="amount">
  <p>select currency</p>
  <select name="currency">
    <option value="usd">usd</option>
    <option value="eur">eur</option>
  <option value="sgd">singapore dolar</option>
  <option value="jpy">japanese yen</option>
  </select>
  <input type="submit" value="convert">
 </form>
</body>
<?php
$exchangerate = array("usd"=>22300,'eur'=>27300,'sgd'=>17000,'jpy'=>200);
if (isset($_POST['amount'])) {
  $amount = $_POST['amount'];
  $currency = $_POST['currency'];
  echo "$amount usd is equal". number_format($amount * $exchangerate['currency']). "vnd";
}
?>

</html>