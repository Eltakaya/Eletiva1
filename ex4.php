<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ex4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h2 class="mt-4">Novo Usuário</h2>
    <form class="mt-4">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Informe o nome">
      </div>
      <div class="row g-2 mt-2">
        <div class="col-md-3">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" placeholder="Informe o CPF">
        </div>
        <div class="col-md-7">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" placeholder="Informe o endereço">
        </div>
        <div class="col-md-2">
          <label for="nivel">Nível:</label>
          <select class="form-control" id="nivel">
              <option>--</option>
              <option>Administrador</option>
              <option>Usuário</option>
              <option>Convidado</option>
          </select>
        </div>
      </div>
      <div class="row g-2 mt-2">
          <div class="col-md-6">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Informe o email">
          </div>
          <div class="col-md-4">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" id="senha" placeholder="Informe a senha">
          </div>
          <div class="col-md-2">
              <label for="status">Status:</label>
              <select class="form-control" id="status">
                  <option>--</option>
                  <option>Ativo</option>
                  <option>Inativo</option>
              </select>
          </div>
      </div>
      <div class="mt-3 text-end">
        <button type="submit" class="btn btn-success col-md-1">Enviar</button>
        <button type="button" class="btn btn-secondary col-md-1">Cancelar</button>
      </div>
      
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>