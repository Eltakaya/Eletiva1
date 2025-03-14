<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="POST">
      <?php for($i=0; $i<5; $i++): ?>
        <input type="text" name="nome[]" placeholder="Digite um nome">
        <input type="number" name="tel[]" placeholder="Digite um telefone">
        <br/>
      <?php endfor; ?>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try{
          $a = array();
          $nome = $_POST['nome'];
          $tel = $_POST['tel'];
          for($i=0; $i<5; $i++){
            $posicao = $nome[$i];
            $a[$posicao] = $tel[$i];
            }
          }catch (Exception $e){
          echo $e->getMessage();
        }
        $nomes = $_POST['nome'];
        $telefones = $_POST['tel'];
        for($i=0; $i<5; $i++){
          echo "Nome: ", $nomes[$i], " - Telefone: ", $telefones[$i], "<br/>";
        }
      }
      
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>