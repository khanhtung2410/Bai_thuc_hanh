<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $currency = $_GET['currency'];
    echo " $amount $currency is equal ";
    switch ($currency) {
        case "UDS":
            echo $amount * $USD;
        case "EUR":
            echo $amount * $EUR;
        case "SGD":
            echo $amount * $SGD;
        case "JPY":
            echo $amount * $JPY;
    }
    ?>
</body>

</html>