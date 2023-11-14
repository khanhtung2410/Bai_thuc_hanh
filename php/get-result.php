<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sex = $_POST["sex"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    if($sex == "male" && $height >160 && $weight >50 || $sex == "female" && $height > 150 && $weight > 40 && $weight <70)
        echo "Ban da dat yeu cau vao cong ty";
    else echo "Ban khong dat yeu cau vao cong ty";
    ?>
</body>

</html>