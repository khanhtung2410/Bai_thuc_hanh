<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $diem_toan = $_POST['toan'];
    $diem_ly = $_POST['ly'];
    $diem_hoa = $_POST['hoa'];
    $diem_anh = $_POST['anh'];
    $diem_van = $_POST['van'];
    $diem_su = $_POST['su'];
    $TBM = ($diem_toan + $diem_ly + $diem_hoa + $diem_anh + $diem_su + $diem_van) / 6;
    echo "<h1>EM LA HOC SINH </h1>";
    if ($diem_anh < 4 || $diem_hoa < 4 || $diem_ly < 4 || $diem_su < 4 || $diem_toan < 4 || $diem_van < 4) {
        echo "<h1>YEU</h1>";
    } else {
        if ($TBM < 5) {
            echo "<h1>YEU</h1>";
        } elseif ($TBM < 6.4) {
            echo "<h1>TRUNG BINH</h1>";
        } elseif ($TBM < 7.9) {
            echo "<h1>KHA</h1>";
        } else  echo "<h1>GIOI</h1>";
    }
    ?>
</body>

</html>