<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
<?php include('head.php') ?>
</head>
<body class="">
<?php include('menu.php') ?>

  <div class="container border shadow-md fundo-pizza p-5">
    <div class="row py-5">

      <div class="bg-white mx-auto text-center mt-1 p-3">
        <a class="text-dark"><h3>Cadastro</h3></a>

        <form action="controle/cadastro.php" id="formulario">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control obrigatorio" id="inputEmail4" placeholder="Email">
        <span class="text-danger"></span> <br>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control obrigatorio" id="inputPassword4" placeholder="Senha">
        <span class="text-danger"></span> <br>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control obrigatorio" id="inputAddress" placeholder="Nome">
      <span class="text-danger"></span> <br>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço</label>
    <input type="text" class="form-control obrigatorio" id="inputAddress2" placeholder="Ex: Rua das Flores, 34">
      <span class="text-danger"></span> <br>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Bairro</label>
      <input type="text" class="form-control obrigatorio" id="inputCity"placeholder="Ex: Jardim Paraiso">
        <span class="text-danger"></span> <br>
    </div class="form-row">


    <button type="submit" class="btn btn-danger mt-2 p-2 ml-5" ><h6>Cadastrar</h6></button>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Bairro</label>
      <input type="text" class="form-control obrigatorio" id="inputCity"placeholder="Ex: Jardim Paraiso">
        <span class="text-danger"></span> <br>
    </div class="form-row">
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
