<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-4">
        <form>
          <div class="row g-2 mt-2">
                <div class="col-md-1">
                    <label for="codigo" class="form-label fw-bold">Código</label>
                    <input type="text" class="form-control" id="codigo" value="32" readonly>
                </div>
                <div class="col-md-5">
                    <label for="nome" class="form-label fw-bold">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome Completo do Cliente">
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label fw-bold">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="cliente@dominio.com">
                </div>
                <div class="col-md-2">
                    <label for="cpf" class="form-label fw-bold">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="Só números">
                </div>
          </div>

          <div class="row g-2 mt-2">
                
                <div class="col-md-2">
                    <label for="celular" class="form-label fw-bold">Nº Celular</label>
                    <input type="text" class="form-control" id="celular" placeholder="Nº do celular">
                </div>
                <div class="col-md-2">
                    <label for="telefone" class="form-label fw-bold">Nº Telefone fixo</label>
                    <input type="text" class="form-control" id="telefone" placeholder="Nº telefone">
                </div>
                <div class="col-md-2">
                    <label for="cep" class="form-label fw-bold">CEP</label>
                    <input type="text" class="form-control" id="cep" placeholder="ex: 88308070">
                </div>

                <div class="col-md-2">
                    <label for="logradouro" class="form-label fw-bold">Logradouro</label>
                    <input type="text" class="form-control" id="logradouro" placeholder="ex: Rua 1400,">
                </div>
                <div class="col-md-1">
                    <label for="numero" class="form-label fw-bold">Nº</label>
                    <input type="text" class="form-control" id="numero" placeholder="Nº">
                </div>
                <div class="col-md-3">
                    <label for="bairro" class="form-label fw-bold">Bairro</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                </div>
          </div>

          <div class="row g-2 mt-2">
                <div class="col-md-3">
                    <label for="cidade" class="form-label fw-bold">Cidade</label>
                    <input type="text" class="form-control" id="cidade" placeholder="Cidade">
                </div>
                <div class="col-md-1">
                    <label for="uf" class="form-label fw-bold">UF</label>
                    <input type="text" class="form-control" id="uf" placeholder="UF">
                </div>
                <div class="col-md-2">
                    <label for="status" class="form-label fw-bold">Status</label>
                    <select class="form-select" id="status">
                        <option selected>Selecione</option>
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                    </select>
                </div>
          </div>

            <div class="mt-4 text-end" >

                <button type="reset" class="btn btn-danger ">Resetar</button>
                <button type="submit" class="btn btn-success ">Próximo</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>