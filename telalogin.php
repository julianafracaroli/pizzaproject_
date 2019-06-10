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
    <div class="row py-5" >
      <div class="col-md-6 mx-auto">


        <div class="bg-white text-center p-5">

          <h3>Faça seu login:</h3>
          <hr>


          <form action="controle/login.php" method="post">

            <!-- label serve apenas de etiqueta para o campo -->
            <label>Usuário:</label><br>
            <!-- Todo input tem que ter um type (tipo) e um name (identificação)
            O name é a identificação do campo lá no action deste formulário -->
            <input type="text" name="login" value="" class="form-control"><br>

            <label>Senha:</label><br>
            <input type="password" name="senha" value="" class="form-control"><br>


            <button type="submit" class="mt-3 btn btn-primary">Entrar</button>
            <br>
            <br>
                  <a class="text-primary" href="telacadastro.php"><strong>Ainda não é cadastrado?</strong></a>

          </form>

        </div>

      </div>



    </div>
  </div>
</div>

</body>
</html>
