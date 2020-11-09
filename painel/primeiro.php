<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
  
  $query_user = "SELECT * FROM erikap WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
	$resultado_user = mysqli_query($conn, $query_user);
	$row_user = mysqli_fetch_assoc($resultado_user);
	
	$resultado .= ' 
<table width="412" class="table" border="1">
  <tr>
    <td width="05" scope="col"class="table-secondary">id</td>
    <td width="142" scope="col"class="table-secondary">Nome</td>
 <td width="142" scope="col"class="table-secondary">CPF</td>
    
  </tr>
  <tr>
    <td >'.$row_user['id'].'</td>
    <td >'.$row_user['nome'].'</td>
     <td >'.$row_user['cpf'].'</td>
    
  </tr>
  </table>




 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">1. A palavra paralelepípedo é separada assim:</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_1'].'</label> 
 

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">2. Escreva 4 palavras com a letra L. </p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_2'].'</label> 

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">3. Coloque V para verdadeiro e F para falso.</p></h5>  </label><br>

 <p>

  <p>Futebol, bola e trave são palavras com a inicial T.

</p>

 <label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_3'].'</label> 

</p>

<p>

 <p>Camila, Daniele e Franciane são nomes começados com letra M.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_4'].'</label> </p>

<p>

  <p>Gabriela e Gabriel são nomes com inicial da letra G.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_5'].'</label> </p>

<p>

<p>Paula , Paty e Paloma são nomes com inicia P.
</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_6'].'</label></p>

<hr/>



</div>

</div>

 





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">4. Marque como separamos as palavras sorvete e barco.</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_7'].'</label>

<hr/>

</div>

</div>



 

 





 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">5. Escreva uma frase com a palavra Palito. </p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_8'].'</label>

<hr/>

</div>

</div>



 



 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">6. A palavra Mesa, madeira e mamão se iniciam com a letra.</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_9'].'</label>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">7. A palavra sapateiro se inicia com a letra :</p></h5>  </label><br>

 <p>

  <p> A
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_10'].'</label>

</p>

<p>

 <p> J 

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_11'].'</label></p>

<p>

  <p> S

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_12'].'</label></p>

<p>

<p> M 

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_13'].'</label></p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">8. Complete com V para verdadeiro e F para falso.

</p></h5>  </label><br>

 <label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_14'].'</label>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">9.Marque V ou F na ordem abaixo:</p></h5>  </label><br>

 <p>

  <p>A palavra panela , canudo e mapa são escritas com a letra J. 

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_15'].'</label>

</p>

<p>

 <p>A família silábica da letra M é Ma, Mi,Mo,Um.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_16'].'</label></p>

<p>

  <p>A palavra canela é escrita com a letra C.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_17'].'</label></p>

<p>

<p>As palavras Homem e harpa são escritas com a letra H.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_18'].'</label></p>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">10.A palavra sabonete é separada assim:</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_19'].'</label>



</div>

</div>

 
  ';
	
	echo $resultado;
}