<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['usuario'] = 'Eduardo';
        echo 'Session is set';
        //       (nome do cookie, valor, tempo de vida)
        setcookie('usuario', 'Eduardo', time() + 3600);
    ?>
    <h1>Bem vindo <?= $_SESSION['usuario']?> </h1>
    <h2>Bem vindo <?= $_COOKIE['usuario']?> </h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>