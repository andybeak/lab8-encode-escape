<!DOCTYPE html>
<html>
<head>
    <title>Encoding demo</title>
</head>
<body>
    <?php
        if (isset($_GET['error'])) {
            echo '<p>' . $_GET['error'] . '</p>';
        }
    ?>
    <form action="check_login.php">
        Username: <input type="text" name="username" />
        <br />
        Password: <input type="password" name="password" />
        <br />
        <input type="submit" value="Login" />
    </form>

</body>
</html>