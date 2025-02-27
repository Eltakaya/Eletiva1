<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form method="post" class="container mt-5" action="15resp.php">
                        
                        <div class="mb-3 col-md-2">
                            <label for="num1" class="form-label ">Entre com seu peso:</label>
                            <input type="number" id="num1" name="num1" class="form-control " required="">
                        </div>
                    
                        <div class="mb-3 col-md-2">
                            <label for="num2" class="form-label ">Entre com sua altura:</label>
                            <input type="number" step="0.01" id="num2" name="num2" class="form-control " required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    
                </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>