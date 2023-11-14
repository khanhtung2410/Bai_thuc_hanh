<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Isitnewyear</title>
</head>

<body >
<form action="get-result.php" method="post">
  <label for="sex">Gioi tinh</label><br>
  <input type="radio" name="sex" value="male">Nam
  <input type="radio" name="sex" value="female">Nu <br>
  <label for="height">Chieu cao</label><br>
  <input type="text" name="height" required><br>
  <label for="weight">Can nang</label><br>
  <input type="text" name="weight" required><br>
  <input type="submit" value="Submit">
</form>
</body>

</html>