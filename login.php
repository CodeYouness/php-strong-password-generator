<?php
include_once __DIR__ . "/users.php";
session_start();
$user = [];
$login = 'firstlogin';
var_dump($login,);

if (isset($_GET['username']) && isset($_GET['password'])) {
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
} else {
    session_unset();
}

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $user = array_filter($users, fn ($user) => $user['username'] === $_SESSION['username'] && $user['password'] === $_SESSION['password']);
    if (count($user) > 0) {
        $login = true;
    } else {
        $login = false;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LoginPage</title>
</head>

<body>
    <header class="text-center">
        <h1>LOGIN PAGE</h1>
    </header>
    <main>
        <form action="./login.php" method="get">

            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password">

            <button type="submit" class="btn btn-dark btn-sm">Login</button>
        </form>
        <?php if ($login === 'firstlogin') {
        } elseif ($login) { ?>
            <div>
                <p class="text-success">
                    succesfull login
                </p>
            </div>
        <?php header("refresh:5;url=index.php");
        } elseif (!$login) { ?>
            <div>
                <p class="text-danger ps-5">
                    wrong username or password
                </p>
            </div>
        <?php } ?>
    </main>
</body>

</html>