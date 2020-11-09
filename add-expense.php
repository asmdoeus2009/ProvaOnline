<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
$userid=$_SESSION['detsuid'];
$ExpenseDate=$_POST['ExpenseDate'];
$pergunta_1=$_POST['pergunta_1'];
$pergunta_2=$_POST['pergunta_2'];
$pergunta_3=$_POST['pergunta_3'];
$pergunta_4=$_POST['pergunta_4'];
$pergunta_5=$_POST['pergunta_5'];
$pergunta_6=$_POST['pergunta_6'];
$pergunta_7=$_POST['pergunta_7'];
$pergunta_8=$_POST['pergunta_8'];
$pergunta_9=$_POST['pergunta_9'];
$pergunta_10=$_POST['pergunta_10'];
$pergunta_11=$_POST['pergunta_11'];
$pergunta_12=$_POST['pergunta_12'];
$pergunta_13=$_POST['pergunta_13'];
$pergunta_14=$_POST['pergunta_14'];
$pergunta_15=$_POST['pergunta_15'];
$pergunta_16=$_POST['pergunta_16'];
$pergunta_17=$_POST['pergunta_17'];
$pergunta_18=$_POST['pergunta_18'];
$pergunta_19=$_POST['pergunta_19'];
$pergunta_20=$_POST['pergunta_20'];
$pergunta_21=$_POST['pergunta_21'];
$pergunta_22=$_POST['pergunta_22'];
$pergunta_23=$_POST['pergunta_23'];
$pergunta_24=$_POST['pergunta_24'];
$pergunta_25=$_POST['pergunta_25'];
$pergunta_26=$_POST['pergunta_26'];
$pergunta_27=$_POST['pergunta_27'];
$pergunta_28=$_POST['pergunta_28'];
$pergunta_29=$_POST['pergunta_29'];
$pergunta_30=$_POST['pergunta_30'];
$pergunta_31=$_POST['pergunta_31'];
$pergunta_32=$_POST['pergunta_32'];
$pergunta_33=$_POST['pergunta_33'];
$pergunta_34=$_POST['pergunta_34'];
$pergunta_35=$_POST['pergunta_35'];
$pergunta_36=$_POST['pergunta_36'];
$pergunta_37=$_POST['pergunta_37'];
$pergunta_38=$_POST['pergunta_38'];
$pergunta_39=$_POST['pergunta_39'];
$pergunta_40=$_POST['pergunta_40'];
$pergunta_41=$_POST['pergunta_41'];
$pergunta_42=$_POST['pergunta_42'];
$datahora=$_POST['datahora'];
    $query=mysqli_query($con, "insert into erika_questao(UserId,ExpenseDate,pergunta_1,pergunta_2,pergunta_3,pergunta_4,pergunta_5,pergunta_6,pergunta_7,pergunta_8,pergunta_9,pergunta_10,pergunta_11,pergunta_12,pergunta_13,pergunta_14,pergunta_15,pergunta_16,pergunta_17,pergunta_18,pergunta_19,pergunta_20,pergunta_21,pergunta_22,pergunta_23,pergunta_24,pergunta_25,pergunta_26,pergunta_27,pergunta_28,pergunta_29,pergunta_30,pergunta_31,pergunta_32,pergunta_33,pergunta_34,pergunta_35,pergunta_36,pergunta_37,pergunta_38,pergunta_39,pergunta_40,pergunta_41,pergunta_42,datahora) value('$userid','$ExpenseDate','$pergunta_1,','$pergunta_2','$pergunta_3','$pergunta_4','$pergunta_5','$pergunta_6','$pergunta_7','$pergunta_8','$pergunta_9','$pergunta_10','$pergunta_11','$pergunta_12','$pergunta_13','$pergunta_14','$pergunta_15','$pergunta_16','$pergunta_17','$pergunta_18','$pergunta_19','$pergunta_20','$pergunta_21','$pergunta_22','$pergunta_23','$pergunta_24','$pergunta_25','$pergunta_26','$pergunta_27','$pergunta_28','$pergunta_29','$pergunta_30','$pergunta_31','$pergunta_32','$pergunta_33','$pergunta_34','$pergunta_35','$pergunta_36','$pergunta_37','$pergunta_38','$pergunta_39','$pergunta_40','$pergunta_41','$pergunta_42','$datahora')");
if($query){
echo "<script>alert('Prova foi adicionada');</script>";
echo "<script>window.location.href='manage-expense.php'</script>";
} else {
echo "<script>alert('Algo de errado aconteceu. Por favor, tente novamente');</script>";

}
  
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IRSEBA</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Criar Prova</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Prova</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							
							<form role="form" method="post" action="">

<div class="col-md-12">
<div class="form-group"><input type="text " class="form-control" name="pergunta_1"  value="1. Questão" > <br>
A<input type="text " class="form-control" name="pergunta_2" > <br>
B<input type="text " class="form-control" name="pergunta_3" > <br>
C<input type="text " class="form-control" name="pergunta_4" > <br>
D<input type="text " class="form-control" name="pergunta_5" > <br>
<hr/>
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_6"  value="2.Questão" > <br>
<hr/>
</div>
</div>




<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_7"  value="3.Coloque V para verdadeiro e F para falso." > <br>
<input type="text " class="form-control" name="pergunta_8" > <br> 
<input type="text " class="form-control" name="pergunta_9" > <br>
<input type="text " class="form-control" name="pergunta_10" > <br> 
<input type="text " class="form-control" name="pergunta_11" > <br> 
<hr/>
</div>
</div>
 


<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_12" value="4. Questão" > <br>
A<input type="text " class="form-control" name="pergunta_13" > <br>
B<input type="text " class="form-control" name="pergunta_14" > <br>
C<input type="text " class="form-control" name="pergunta_15" > <br>
D<input type="text " class="form-control" name="pergunta_16" > <br>
<hr/>
</div>
</div>
 

<div class="col-md-12">
<div class="form-group"> 
<input type="text " class="form-control" name="pergunta_17"  value="5.	Escreva por extenso os números 9,7,0 e 8. " >
<hr/>
</div>
</div>


<div class="col-md-12">
<div class="form-group"><input type="text " class="form-control" name="pergunta_18" value="6. Questão" > <br>
A<input type="text " class="form-control" name="pergunta_19" > <br>
B<input type="text " class="form-control" name="pergunta_20" > <br>
C<input type="text " class="form-control" name="pergunta_21" > <br>
D<input type="text " class="form-control" name="pergunta_22" > <br>
<hr/>
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_23"  value="7.Coloque V para verdadeiro e F para falso." > <br>
<input type="text " class="form-control" name="pergunta_24" > <br> 
<input type="text " class="form-control" name="pergunta_25" > <br>
<input type="text " class="form-control" name="pergunta_26" > <br> 
<input type="text " class="form-control" name="pergunta_27" > <br> 
<hr/>
</div>
</div>

 

<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_28"  value="8. Marque a seqüência correta:"> <br>
A<input type="text " class="form-control" name="pergunta_29" > <br>
B<input type="text " class="form-control" name="pergunta_30" > <br>
C<input type="text " class="form-control" name="pergunta_31" > <br>
D<input type="text " class="form-control" name="pergunta_32" > <br>
<hr/>
</div>
</div>


<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_33"  value="9.Coloque V para verdadeiro e F para falso." > <br>
<input type="text " class="form-control" name="pergunta_34" > <br> 
<input type="text " class="form-control" name="pergunta_35" > <br>
<input type="text " class="form-control" name="pergunta_36" > <br> 
<input type="text " class="form-control" name="pergunta_37" > <br> 
<hr/>
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<input type="text " class="form-control" name="pergunta_38"value="10. Questão" > <br>
A<input type="text " class="form-control" name="pergunta_39" > <br>
B<input type="text " class="form-control" name="pergunta_40" > <br>
C<input type="text " class="form-control" name="pergunta_41" > <br>
D<input type="text " class="form-control" name="pergunta_42" > <br>
<hr/>
</div>
</div>

 




								



								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Criar Prova</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php }  ?>