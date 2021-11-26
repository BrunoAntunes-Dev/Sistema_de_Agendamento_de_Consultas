<?php
include('verifica_login.php');
include('conexao.php');

?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Painel</title>
</head>
<body style="background-image: url(../img/fundo3.jpg)">

    
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong border-secondary" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">Base de Clientes</h3>
        
            <div>
                <a href="consultarcliente.php" >
                    <button type="button" class="btn btn-primary btn-lg btn-block mb-2 w-100 ">
                        Consultar
                    </button>
                </a>
            </div>
                    <div>
                        <a href="cadastro.php">
                            <button type="button" class="btn btn-primary btn-lg btn-block mb-2 w-100">
                            Cadastrar
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="logout.php">
                            <button type="button" class="btn btn-primary btn-lg btn-block mb-2 w-100">
                                Sair
                            </button>
                        </a>
                    </div>

            </div>
        </div>
      </div>
    </div>
  </div>
</section>
   
</body>
</html>