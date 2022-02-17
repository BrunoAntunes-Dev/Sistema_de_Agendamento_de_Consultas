<?php
session_start();
include('verifica_login.php');
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
<header>  
        <nav class="navbar navbar-light" style="background-color: #1F3960">
        <h2>ODONTO-SSELVI</h2>
    </header>

    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
                    <span class="title">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <span class="title">Setting</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <span class="title">Password</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>



    <h2>Olá, <?php echo $_SESSION['nome'];?></h2>


    <h1>Agenda do Dia</h1>

    <table style="border-style:solid; margin:auto;">
        <tr>
            <td style="border-style:solid; margin:auto;">cliente</td>
            <td style="border-style:solid; margin:auto;">procedimento</td>
            <td style="border-style:solid; margin:auto;">valor</td>
            <td style="border-style:solid; margin:auto;">data</td>
            <td style="border-style:solid; margin:auto;">hora</td>
        </tr>

<?php
$sql = " SELECT * FROM consultas where data = CURDATE()";

$resultado = $conexao->query($sql);

while($registro = $resultado->fetch_assoc())

    if($registro["data"]){
?>


    <tr >
        
        <td style="padding:30px;border-style:solid;"><?php echo $registro["cliente"]?>
        <td style="padding:30px;border-style:solid;"><?php echo $registro["procedimento"]?>
        <td style="padding:30px;border-style:solid;"><?php echo $registro["valor"]?>
        <td style="padding:30px;border-style:solid;"><?php echo $registro["data"]?>
        <td style="padding:30px;border-style:solid;"><?php echo $registro["hr_ini"];} ?>
                
           

    

    </tr>
         </table>
    
</body>
</html>