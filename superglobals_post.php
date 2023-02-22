<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP Practice</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php if (isset($_POST)) {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        echo $_POST['name'] . ', your form is submitted';
    } ?>
    <form action="post_superglobals.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="major" placeholder="Current major">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>