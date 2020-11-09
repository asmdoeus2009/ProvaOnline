<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $senha=md5($_POST['senha']);
    $query=mysqli_query($con,"select ID from tbluser where  Email='$email' && senha='$senha' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['detsuid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Senha incorreta. Tente novamente ou clique em 'Esqueceu a senha?' para redefini-la.";
    }
  }
  ?>


<!DOCTYPE html>

<html lang="pt-br">



<head><meta charset="euc-jp">

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">

  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <title>Gestão</title>

  <!--     Fonts and icons     -->

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- Nucleo Icons -->

  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />

  <!-- CSS Files -->

  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->

  <link href="assets/demo/demo.css" rel="stylesheet" />



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">



$(document).ready(function () {

 

window.setTimeout(function() {

    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){

        $(this).remove(); 

    });

}, 5000);

 

});

</script>

</head>



<body class="">
<div class="wrapper">
<div class="main-panel">
<div class="content">
<div class="row">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<h5 class="title">Professor</h5>
</div>
<div class="card-body">
             

 
 
<form role="form" action="" method="post" id="" name="login">
    
<div class="row">               
<div class="col-md-4 pr-md-1">
<div class="form-group">
<label>E-mail</label>
<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
 
</div>
</div> 
<div class="col-md-4 px-md-1">
<div class="form-group">
<label>Senha</label>
<input class="form-control" placeholder="Senha" name="senha" type="password" value="" required="true">
 



 <button type="submit" value="login" name="login" class="btn btn-fill btn-primary">Entrar</button>
 
 <br> <br>
<p class="small text-center text-gray-soft"> <a href="forgot-password.php">Esqueceu a senha?</a></p><br>
  <br> <br>
<p class="small text-center text-gray-soft"> <a href="index.php">Aluno</a></p><br>
 
</div>
</div>
</div>
</form>
  <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

</div>
</div>
</div>

           

    <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                    <amp-img class="avatar" lightbox="lightbox-amp-carousel" srcset src="img/escudo.jpg"  layout="responsive"> </amp-img> 
                        <h5 class="title">Creche Escola Prof. Jodson Jorge</h5>
                    </a>
                     <!-- <p class="description">
                                           Você é especial! E sua escola acredita em seu potencial.

                    </p>-->
                  </div>
                </p>
                <!--<div class="card-description">
                  <center>Faça uma ótima avaliação.</center> 
                                  </div>-->



              </div>
              <div class="card-footer">



                <div class="button-container">


                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>

                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">



                    <i class="fab fa-twitter"></i>



                  </button>

                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">



                    <i class="fab fa-google-plus"></i>



                  </button>



                </div>



              </div>



            </div>



          </div>

    </div>

  </div>

  

  </div>
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <script async src="https://cdn.ampproject.org/v0.js"></script>
 <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>

</body>



</html>

