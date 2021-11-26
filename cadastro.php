<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   
</head>

<body style="background-image: url(../img/fundo3.jpg)">
    <section style="background-color:white;" class="container py-5 h-100">
        <form action="cadastrar.php" method = "POST">
            <div  class="col">
                <label for="nome">
                    Nome:
                </label>
                <input type="text" name ="nome" id="nome">
            </div>
            <div>
                <label for="rg">
                    RG:
                </label>
                <input type="text" name ="rg" id="rg">
            </div>
            <div>
                <label for="cpf">
                    CPF:
                </label>
                <input type="number" name ="cpf" id="cpf">
            </div>
            <div>
                <label for="sexo">
                    Sexo:
                </label>
                <input type="radio" name ="sexo" id="sexo" value ="m">Masculino
                <input type="radio" name ="sexo" id="sexo" value="f">Feminino
            </div>
            <div>
                <label for="email">
                    E-mail:
                </label>
                <input type="email" name ="cemail" id="cemail">
            </div>
            <div>
                <label for="tel">
                    Telefone:
                </label>
                <input type="tel" name ="ctel" id="ctel">
            </div>
            <div>
                <label for="cel">
                    Celular:
                </label>
                <input type="tel" name ="ccel" id="ccel">
            </div>
            <div>
                <label for="dtnasc">
                    Data de Nascimento:
                </label>
                <input type="date" name ="dtnasc" id="dtnasc">
            </div>
            <div>
                <label>
                    Rua:
                </label>
                <input type="text" name ="erua" id="erua">
            </div>
            <div>
                <label>
                    Nº:
                </label>
                <input type="text" name ="enumero" id="enumero">
            </div>
            <div>
                <label>
                    Bairro:
                </label>
                <input type="text" name ="ebairro" id="ebairro">
            </div>
            <div>
                <label>
                    CEP:
                </label>
                <input type="text" name ="ecep" id="ecep">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
                    
        <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      1 de 3
    </div>
    <div class="col-md-auto">
      Conteúdo com largura variável
    </div>
    <div class="col col-lg-2">
      3 de 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 de 3
    </div>
    <div class="col-md-auto">
      Conteúdo com largura variável
    </div>
    <div class="col col-lg-2">
      3 de 3
    </div>
  </div>
</div>
   
   
</body>
</body>

</html>