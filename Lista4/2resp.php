<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Respostas</h1>
    <?php
      function exibeM (string $palavra) : void{
        $palavraMinuscula = strtolower($palavra);
        $palavraMaiuscula = strtoupper($palavra);
        echo "A palavra maiuscula $palavraMaiuscula <br>";
        echo "A palavra minuscula $palavraMinuscula";

      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST['palavra'];
        exibeM($palavra);        
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>