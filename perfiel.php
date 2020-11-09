 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['usuarioId']==0)) {
  header('location:index.php');
  } else{
    if(isset($_POST['submit']))
  {
$id=$_SESSION['usuarioId'];
$nome=$_POST['nome'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
 $msg=$_POST['msg'];

     $query=mysqli_query($con, "update usuario set nome ='$nome', usuario='$usuario', email='$email', cpf='$cpf', cep='$cep' , rua='$rua' , bairro='$bairro', cidade='$cidade', uf='$uf' , msg='$msg' where ID='$id'");
    if ($query) {
    $msg="<p class='text-danger alert'>O perfil do usuário foi atualizado.</p>";
  }
  else
    {
      $msg="Algo deu errado. Por favor, tente novamente.";
    }
  }
  ?>
 

<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">

<link rel="icon" type="image/png" href="assets/img/favicon.png">

<title>Registro</title>

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/"> <!-- Bootstrap core CSS -->

<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
<link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">

<link href="assets/css/nucleo-icons.css" rel="stylesheet" />

  <!-- CSS Files -->

<link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->

<link href="assets/demo/demo.css" rel="stylesheet" />
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</head>

<body>

<div class="wrapper">



<div class="main-panel">

<div class="content">

      <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Complete Seu Perfil</h4>
         
                </div>
                <div class="card-body">



<?php if($msg){  echo $msg;  }  ?> </p>
          
<?php
$id=$_SESSION['usuarioId'];
$ret=mysqli_query($con,"select * from usuario where ID='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
                <form role="form" method="post" action="">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome do Aluno</label>
                         

                             <input class="form-control" type="text" value="<?php  echo $row['nome'];?>" required="true" name="nome" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome do usuário</label>
                         <input type="text" class="form-control" name="usuario" required="true"  value="<?php  echo $row['usuario'];?>" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Endereço de e-mail</label>
                         <input type="text" class="form-control" name="email" required="true" value="<?php  echo $row['email'];?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">CPF</label>
                          <input type="text" class="form-control" name="cpf" maxlength="11" required="true" value="<?php  echo $row['cpf'];?>" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">CEP</label>
                        <input type="text" class="form-control" name="cep" required="true" value="<?php  echo $row['cep'];?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Endereço</label>
                            <input type="text" class="form-control" name="rua" required="true" value="<?php  echo $row['cep'];?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Bairro</label>
                         <input type="text" class="form-control" name="bairro" required="true" value="<?php  echo $row['cep'];?>" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cidade</label>
                            <input type="text" class="form-control" name="cidade" required="true" value="<?php  echo $row['cidade'];?>" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Estado</label>
                  
                            <input type="text" class="form-control" name="uf" required="true" value="<?php  echo $row['uf'];?>" >
                        </div>
                      </div>
                    </div>
                  
 
                 
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Sobre mim</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea name="msg" class="form-control" required="true" value="<?php  echo $row['msg'];?>" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Atualizar perfil</button>
                    <div class="clearfix"></div>

 
                  </form> <?php } ?>
 
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

                      <img class="avatar" src="img/escudo.jpg" alt="...">

                      <h5 class="title"></h5>

                    </a>

                   <!--<p class="description">

                      Você é especial! E sua escola acredita em seu potencial.

                    </p>

                  </div>-->

                </p>

                <div class="card-description">

                  <center>....</center> 

                </div>

              </div>

              <div class="card-footer">

                <div class="button-container">

                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">

                    <i class="fab fa-facebook"></i></button>

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

 <?php } ?>

</div>

</div>

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

</body>

</html>  