<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <script src="js/jquery-3.4.1.js" charset="utf-8"></script>
  <script src="popper/popper.min.js" charset="utf-8"></script>
  <script src="bootstrap/bootstrap.js" charset="utf-8"></script>

  <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>pizzaplanet</title>
</head>
<body class="">

  <div class="container border shadow-sm bg-danger ">
    <div class="row dark pt-3">
      <div class="col-md pl-5 pb-3 bg-da">
        <nav class="navbar navbar-expand-lg navbar-light ">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Local e Horários</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Menu</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

  </div>

  <div class="container border shadow-md fundo-pizza p-5">
    <div class="row py-5">

      <div class="bg-white mx-auto text-center mt-1 p-3">
        <a class="text-dark"><h3>Cadastro</h3></a>

        <form action="controle/cadastro.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Ex: Rua das Flores, 34">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Bairro</label>
      <input type="text" class="form-control" id="inputCity"placeholder="Ex: Jardim Paraiso">
    </div class="form-row">


    <button type="submit" class="btn btn-danger mt-2 p-2 ml-5" ><h6>Cadastrar</h6></button>
    </div>
  </div>


</form>

      </div>

    </div>

  </div>
</div>
</div>

</body>
</html>
