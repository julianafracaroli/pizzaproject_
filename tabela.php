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
        <a class="text-dark"><h3>Clientes Cadastrados
        </h3></a>



    <div class="row border ">
                        <div class="col-sm">
                            <table class="display table table-striped" id="tabela">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Senha</th>
                                        <th>Rua</th>
                                        <th>Bairro</th>
                                        <th>CEP</th>
                                        <th>Alterar</th>
                                        <th>Excluir</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <?php
                                  require_once('./control/listarcadastro.php');

                                    ?>
                                </tbody>
                            <table>
                        </div>
                    </div>

    <script>
         $(document).ready(function(){
              $('#tabela').DataTable();
          });
      </script>
    </script>


</div>
</div>
</div>

</body>
</html>
