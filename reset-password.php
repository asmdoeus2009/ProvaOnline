<?php
session_start();
error_reporting(0);
include('includes/dados.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $celular=$_SESSION['celular'];
    $email=$_SESSION['email'];
    $senha=md5($_POST['Senha']);

        $query=mysqli_query($db,"update tbluser set senha='$senha'  where  Email='$email' && celular='$celular' ");
   if($query)
   {
echo "<script>alert('Senha atualizada com sucesso');</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IRSEBA - redefinição</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript">
function checkpass()
{
if(document.changepassword.Senha.value!=document.changepassword.confirmpassword.value)
{
alert('Os campos Nova senha e Confirmar senha não correspondem');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<body>
	<div class="row">
			<h2 align="center">IRSEBA</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Redefinir senha</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" name="changepassword" onsubmit="return checkpass()">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Senha" name="Senha" type="password" value="" required="true">
							</div>
							
							<div class="form-group">
								<input class="form-control" placeholder="Confirmar Senha" name="confirmpassword" type="password" value="" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="" name="submit" class="btn btn-primary">Redefinir</button><span style="padding-left:250px"><a href="index.php" class="btn btn-primary">Login</a></span>

							</div>
						
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
