<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Document</title>
</head>

<body>
<form action="get-result.php" method="post">
  <label for="amount">Amount:</label><br>
  <input type="number" name="amount" required><br>
  <label for="choose-currency">Select currency</label><br>
  <select name="choose-currency">
    <option value="USD">USD</option>
    <option value="AUD">AUD</option>
    <option value="JPY">JPY</option>
    <option value="EUR">EUR</option>
  </select>
  <input type="submit" value="Convert">
</form>
</body>

</html>