<?php

    if (empty($_POST['nome']) || empty($_POST['empresa']) || empty($_POST['mensagem'])) {
      $erro ="<h2 style='text-align: center;'>Campos do Formulario em falta... </h2>";
    }else if (isset($_POST['nome']) && isset($_POST['empresa']) && isset($_POST['mensagem'])) {
      include'smsMailer.php';
      $erro ="<h2 style='text-align: center;'> Mensagem Enviada com Sucesso</h2>";
    }
    
    $nome = $_POST['nome'];
    $empresa = $_POST['empresa'];
    $sms = $_POST['mensagem'];
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Zeroum - IT Solutions</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bootstrap 
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />
<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="assets/style.css">



<style type="text/css">

  
  .logo{

      margin-top: 20px;
      margin-bottom: 20px;
  }

  .dn{
    margin-top: 20px;
  }

  .apoio{

    width: 100px;
    border-radius: 10px;
    margin-top: 20px;

  }

    .drop{
    border-radius: 10px;
    width: 314px;

  }

  .box{
    width: 100px;
    height: 100px;  
    text-align: center;
    background-color: white;   
    padding-top: 15px;
  }

  /*  alert box  */

#modalContainer {
    background-color:rgba(0, 0, 0, 0.3);
    position:absolute;
    width:100%;
    height:100%;
    top:0px;
    left:0px;
    z-index:10000;
    background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements*/
  }

#alertBox {
    position:relative;
    width:300px;
    min-height:100px;
    margin-top:50px;
    border:1px solid #666;
    background-color:#fff;
    background-repeat:no-repeat;
    background-position:20px 30px;
    border-bottom-left-radius: 20px; 
    border-bottom-right-radius: 20px;
}

#modalContainer > #alertBox {
    position:fixed;
}

#alertBox > h1 {
    margin:0;
    font:bold 0.9em verdana,arial;
    background-color:#00a9c6;  /* #3073BB */
    color:#FFF;
    border-bottom:1px solid #000;
    padding:2px 0 2px 5px;
}

#alertBox > p {
    font:0.7em verdana,arial;
    height:50px;
    padding-left:5px;
    margin-left:55px;
    margin-top: 30px;
}

#alertBox #closeBtn {
    display:block;
    position:relative;
    margin:5px auto;
    padding:7px;
    border:0 none;
    width:70px;
    font:0.7em verdana,arial;
    text-transform:uppercase;
    text-align:center;
    color:#FFF;
    background-color:#00a9c6;/* #357EBD*/
    border-radius: 3px;
    text-decoration:none;
}

/* unrelated styles */

#mContainer {
    position:relative;
    width:600px;
    margin:auto;
    padding:5px;
    border-top:2px solid #000;
    border-bottom:2px solid #000;
    font:0.7em verdana,arial;
}

h1 {
    margin:0;
    padding:4px;
    font:bold 1.5em verdana;
    border-bottom:1px solid #000;
}

code {
    font-size:1.2em;
    color:#069;
}

#credits {
    position:relative;
    margin:25px auto 0px auto;
    width:350px; 
    font:0.7em verdana;
    border-top:1px solid #000;
    border-bottom:1px solid #000;
    height:90px;
    padding-top:4px;
}

#credits img {
    float:left;
    margin:5px 10px 5px 0px;
    border:1px solid #000000;
    width:80px;
    height:79px;
}

.important {
    background-color:#F5FCC8;
    padding:2px;
}

code span {
    color:green;
}
</style>

<script type="text/javascript">

var ALERT_TITLE = "Linha apoio";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
    window.alert = function(txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    d = document;

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";

}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
 
  
</script>

</head>

<body>

<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<header>
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header logo">
        
              <a class="logo" href="http://localhost/php/zeroumbackup/"><img src="images/logoneo.png" alt="logo"></a>
           


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

<nav>
           
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">

                 <li class="active"><a href="#works">Home</a></li>
                 <li ><a href="#about">Sobre nos</a></li>
                 <li ><a href="#partners">Parceiros</a></li>
                 <li ><a href="#contact">Contacte-nos</a></li>
                 

             <li class="dropdown" >

                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">produtos/Servicos <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" style="border-radius: 10px; ">
                            <ul class="list-inline">

                                <li class="box" style=" margin-left: 7px;"><a href="computadores.html"><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></a></li>
                                <li class="box" ><a href=""><i class="fa fa-keyboard-o fa-2x" aria-hidden="true"></i></a></li>
                                <li class="box"><a href=""><i class="fa fa-microchip fa-2x" aria-hidden="true"></i></a></li>

                            </ul>
                            <ul class="list-inline">

                                <li class="box" style=" margin-left: 7px;"><a href=""><i class="fa fa-wifi fa-2x" aria-hidden="true"></i></a></li>
                                <li class="box"><a href=""><i class="fa fa-video-camera fa-2x" aria-hidden="true"></i></a></li>
                                <li class="box"><a href=""><i class="fa fa-fax fa-2x" aria-hidden="true"></i></a></li>

                            </ul>
                            <ul class="list-inline">

                                <li class="box" style=" margin-left: 7px;"><a href=""><i class="fa fa-ambulance fa-2x" aria-hidden="true"></i></a></li>
                                <li class="box"><a href=""><i class="fa fa-video-camera fa-2x" aria-hidden="true"></i></a></li>
                                <li class="box"><a href=""><i class="fa fa-fax fa-2x" aria-hidden="true"></i></a></li>

                            </ul>
                      </ul>
                              
                  </li>

                  <div class="phone" onclick="alert('<h4>Telefone: 300 500 434 <br>email: comercial@zeroum.p</h4>')"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></div>

              </ul>
            </div>
          
</nav>
          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->
</header>

<div class="container " style="margin-top: 200px;margin-bottom: 180px ">
<div class="row">
        <div class="jumbotron" style="border-radius: 20px;">

          <?php echo $erro; ?>
          <p style="text-align: center;">Os nossos tecnicos estão a trabalhar para satisfazer as suas necessidades por favor aguarde... </p>
          <p style="font-size: 0.9em; text-align: center;">Telefone: <b>300 500 343</b> / email:  <b>sat@zeroum.pt</b></p>
   
        </div>
</div>

</div>

<?php
    echo $nome;
    echo "</br>";
    echo $empresa;
    echo "</br>";
    echo $sms;

?>
  <footer>
      <div class="footer text-center spacer">
      <p class="wowload flipInX"><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook fa-2x"></i></a> <a href="https://www.instagram.com/?hl=pt" target="_blank"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a> </p>
      Copyright 2017 Zeroum. All rights reserved.
      <address>
          <br>
          <p> EN 124, Av. Marginal, Lote 6 , Edificio Plazza , Loja F, 8300-101 Silves</p>

      </address>
      </div>
</footer>

</body>

</html>

