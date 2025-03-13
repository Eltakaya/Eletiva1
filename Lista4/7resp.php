<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Respostas</h1>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $data1 = $_POST["data1"];
          $data2 = $_POST["data2"];
          
          // Converter as datas para o formato YYYY-MM-DD
          $data1_formatada = DateTime::createFromFormat('d/m/Y', $data1);
          $data2_formatada = DateTime::createFromFormat('d/m/Y', $data2);
          
          if ($data1_formatada && $data2_formatada) {
              // Calcular a diferença entre as datas
              $diferenca = $data1_formatada->diff($data2_formatada);
              echo "A diferença entre as datas é de " . $diferenca->days . " dias.";
          } else {
              echo "Formato de data inválido. Use dd/mm/YYYY.";
          }
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>