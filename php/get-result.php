<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "The game ";
if ($_GET["quit"] == "yes"){echo "has been quit";
}
else{echo "will be continue in 3 seconds";
}
?>
</body>
</html>