<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Isitnewyear</title>
</head>

<body>
  <form action="get-result.php" method="post">
    <label for="toan">Toan</label>
    <input type="text" name="toan" id="toan" required><br>
    <label for="ly">Ly</label>
    <input type="text" name="ly" id="ly" required><br>
    <label for="hoa">Hoa</label>
    <input type="text" name="hoa" id="hoa" required><br>
    <label for="anh">Anh</label>
    <input type="text" name="anh" id="anh" required><br>
    <label for="van">Van</label>
    <input type="text" name="van" id="van" required><br>
    <label for="su">Su</label>
    <input type="text" name="su" id="su" required><br>
    <input type="submit" value="Submit">
  </form>
</body>
<script>
  document.getElementById("toan").onkeyup = function() {
    if (document.getElementById("toan").value > 10|| document.getElementById("toan").value < 0) {
      alert("Sai dinh dang");
      document.getElementById("toan").value = ' ';
    }
  }
  document.getElementById("ly").onkeyup = function() {
    if (document.getElementById("ly").value > 10|| document.getElementById("ly").value < 0) {
      alert("Sai dinh dang");
      document.getElementById("ly").value = ' ';
    }
  }
  document.getElementById("hoa").onkeyup = function() {
    if (document.getElementById("hoa").value > 10|| document.getElementById("hoa").value < 0) {
      alert("Sai dinh dang");
      document.getElementById("hoa").value = '';
    }
  }
  document.getElementById("anh").onkeyup = function() {
    if (document.getElementById("anh").value > 10|| document.getElementById("anh").value < 0) {
      alert("Sai dinh dang");
      document.getElementById("anh").value = '';
    }
  }
  document.getElementById("van").onkeyup = function() {
    if (document.getElementById("van").value > 10 || document.getElementById("van").value < 0) {
      document.getElementById("van").value = '';
      alert("Sai dinh dang");
    }
  }
  document.getElementById("su").onkeyup = function() {
    if (document.getElementById("su").value > 10 || document.getElementById("su").value < 0) {
      alert("Sai dinh dang");
      document.getElementById("su").value = ' ';
    }
  }
</script>

</html>