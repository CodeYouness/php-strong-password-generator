<?php
session_start();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="d-flex justify-content-between container">
        <div>
            <p>Benvenuto
                <?php echo $_SESSION['username'] ?>
            </p>
        </div>
        <div>
            <form method="post">
                <input type="submit" name="logout" value="Logout" />
            </form>
        </div>
    </main>
</body>

</html>