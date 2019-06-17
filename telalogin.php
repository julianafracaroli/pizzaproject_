<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
<?php include('head.php') ?>
</head>
<body class="">

  <?php include('menu.php') ?>

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


</body>
</html>
