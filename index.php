<?php
include_once __DIR__ . '/./utilities/functions.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
            <div>
                <form action="./index.php" method="GET">
                    <label for="password-length"></label>
                    <input class="form-control" type="number" name="password-length" id="password-length" placeholder="Nessun parametro valido inserito" aria-label="default input example">
                    <button class="btn btn-outline-secondary">Invia</button>
                    <?php $_SESSION['password'] = getPassword($_GET['password-length']);
                    if (isset($_GET['password-length'])) {
                        header('Location: /php-strong-password-generator/password.php');
                    };
                    ?>
                </form>
            </div>

        </div>
    </main>
</body>

</html>
<!-- echo (getPassword($_GET['password-length'])) -->