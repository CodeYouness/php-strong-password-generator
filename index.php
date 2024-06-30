<?php
session_start();
echo $_SESSION['username'];
echo $_SESSION['password'];

if (isset($_POST['logout'])) {
    header('Location: ./login.php');
    session_unset();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form method="post">
            <input type="submit" name="logout" value="Logout" />
        </form>
    </main>
</body>

</html>