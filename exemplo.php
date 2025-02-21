<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        
    <form method="post" action="resposta.php"> // get envia para o link, post não mostra no link
                        
        <div class="mb-3"> 
            <label for="Valor1" class="form-label">Valor1</label>
            <input type="number" id="Valor1" name="Valor1" class="form-control" required="">
        </div>             
            <div class="mb-3">
                <label for="Valor2" class="form-label">Valor2</label>
                <input type="number" id="Valor2" name="Valor2" class="form-control" required="">
            </div>
                    
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>