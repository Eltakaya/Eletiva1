<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <h1>Boa Noite! Hoje é 
        <?php 
            // para executar php usar comando: php -S localhost:8080
            // Comentario
            # Tbm Comentario
            /* comentario
            em bloco */
            echo  date("d/m/y");
        ?>
    </h1>
    <p>
        <?php
            $nome = "Eduardo"; // criei uma variavel e atribui uma string, Cria variavel com $
            echo "O nome é: $nome "; // Com $ exibe o valor da variavel quando usa aspas duplas
            echo 'O nome é: $nome '; // Com aspas simples não exibe conteudo
        ?>
    </p>
    <p>
        <?php
            echo 'O nome é: '.$nome;
        ?>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>