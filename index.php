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
        <div>
            <form action="./index.php" method="GET">
                <label for="password-length">Lunghezza Password</label>
                <input class="form-control" type="number" name="password-length" id="password-length" placeholder="Default input" aria-label="default input example">
                <button type="submit">Invia</button>
            </form>
            <p><?php echo (getPassword($_GET['password-length'])) ?></p>
        </div>
    </main>
</body>

</html>

<?php

function getPassword($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-={}[]|:;"<>,.?/';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}


// function randomPassword($number)
// {
//     $bytes = random_bytes($number);
//     return bin2hex($bytes);
// }
?>