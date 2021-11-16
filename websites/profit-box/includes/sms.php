<?php

    if (empty($_POST['email']) || empty($_POST['contacto']) || empty($_POST['mensagem'])) {
      $erro ="<h2 style='text-align: center;'>Campos do Formulario em falta... </h2>";
    }else if (isset($_POST['email']) && isset($_POST['contacto']) && isset($_POST['mensagem'])) {
      include'../PHPMailer/mailler.php';
      $erro ="<h2 style='text-align: center;'> Mensagem Enviada com Sucesso</h2>";
    }
 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>ProfitBox - Armação de Pera</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    

    <style type="text/css">

      .footer {
        position: relative;
        margin-top: -150px; /* negative value of footer height */
        height: 150px;
        clear:both;
        padding-top:20px;
        background-color: #2f2929;
        color: white;
        text-align: center;
        margin-top: 300px;
      } 


        body{
        background-image: url(../imagens/azul.jpg);
        font-family: 'Open Sans', sans-serif;
        text-align: justify-all;
      }

 
</style>



</head>

<body>

<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<header>
<nav class="navbar navbar-dark bg-dark" id="home">
 <!--   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <span class="navbar-toggler-icon"></span>
    </button>
     <a class="navbar-brand" href="#home">PROFIT BOX </a>
  </nav>
<!-- #Header Starts -->
</header>

<div class="container " style="margin-top: 200px;margin-bottom: 180px ;">
    <div class="row">
            <div class="jumbotron" style="border-radius: 20px;margin-left:auto;margin-right:auto;">

              <?php echo $erro; ?>
              <p style="text-align: center;">Os nossos tecnicos estão a trabalhar para satisfazer as suas necessidades por favor aguarde... </p>
              <p style="font-size: 0.9em; text-align: center;">Telefone: <b>+351 282315680</b> / email:  <b>profitbox@sapo.pt</b></p>
       
            </div>
    </div>
</div>

  
<footer class="footer">
  <address>



      <h3>Profit box</h3>
      <p>
      Av. Beira Mar, 
      Edifício Atlântico Loja C/D
     
      8365-101 Armação de Pêra</p>
    
       Telefone +351 282315680  <br>
       Fax +351 282315680
      </p>
    
</div> 
  </address>

</footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>