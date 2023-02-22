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
    if (isset($_GET)) {
        echo $_GET['name'] . '<br />';
        echo $_GET['major'];
    } ?>
    <form action="superglobals_get.php" method="get">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="major" placeholder="major">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>