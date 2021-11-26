<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body  style="background-image: url(../img/fundopainel.png)">
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;" >
          <div class="card-body p-5 text-center" >

            <h3 class="mb-5">Login</h3>
            <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div>
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
            <form action="login.php" method="POST">
            <div class="form-outline mb-4">
              <input name="usuario" id="usuario" type="text" class="form-control form-control-lg" />
              <label class="form-label" for="usuario">Usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input name="senha" id="senha" type="password" class="form-control form-control-lg" />
              <label class="form-label" for="senha">Senha</label>
            </div>

            

            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
        </form>
            

            
            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>