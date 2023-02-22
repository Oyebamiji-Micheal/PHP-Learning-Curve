<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP Practice</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <?php
    $x = 5;
    $y = 3;
    function sum()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    sum();
    echo $z;
    ?>
</body>

</html>