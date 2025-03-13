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
      function AdentrodeB (string $palavra, $palavra2) : void{
        if (strpos($palavra, $palavra2) !== false) {
          echo "A palavra $palavra2 está contida na palavra $palavra";
        } else {
          echo "A palavra $palavra2 não está contida na palavra $palavra";
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST['palavra'];
        $palavra2 = $_POST['palavra2'];
        AdentrodeB($palavra,$palavra2);
        
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>