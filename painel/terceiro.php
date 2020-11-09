<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
  
  $query_user = "SELECT * FROM malenap WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
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
<label><h5><p class="text-danger">1. O que é sílaba tônica?</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_1'].'</label> 
<hr/>
</div>
</div>





<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">2.Assinale a única alternativa em que todas as palavras são oxítonas.</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_2'].'</label> 
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">3. Quais as classificações das sílabas tônicas?</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_3'].'</label> 
<hr/>
</div>
</div>







<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">4.Marque V para as alternativas verdadeiras e F para as falsas, de acordo com a posição da sílaba tônica.</p></h5>  </label><br>
 <p>
  <p>As palavras pajé e sabiá são classificadas como paroxítonas.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_4'].'</label> 
</p>
<p>
 <p>As palavras picolé e parabéns são classificadas como oxítonas.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_5'].'</label> </p>
<p>
  <p>As palavras lâmpada e árvore são classificadas como  proparoxítonas
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_6'].'</label> </p>
<p>
<p>As palavras mágico e óculos são classificadas como oxítonas.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_7'].'</label> </p>
<hr/>

</div>
</div>
 


<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">5.Classifique as palavras em oxítona, paroxítona e proparoxítona.</p></h5> <br>

a) Xícara <br>
b) Vírus <br>
c) Safári <br>
d) Anzol 

  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_8'].'</label> 
<hr/>
</div>
</div>





 
<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">6. Marque a alternativa cuja acentuação das palavras está incorreta.</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_9'].'</label> 
<hr/>
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">7. Quando utilizamos o acento circunflexo? </p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_10'].'</label> 
<hr/>
</div>
</div>









<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">8.Marque V para as alternativas verdadeiras e F para as falsas, de acordo com as palavras acentuadas corretamente.</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_11'].'</label> 
<hr/>
</div>
</div>


<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">9.Quando utilizamos o acento agudo?</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_12'].'</label> 
<hr/>
</div>
</div>







<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger">10.Marque V para as alternativas verdadeiras e F para as falsas, para as palavras acentuadas corretamente.</p></h5>  </label><br>
 <p>
  <p>âmbito e réptil.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_13'].'</label> 
</p>
<p>
 <p>pêsames e álbum.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_14'].'</label> </p>
<p>
  <p>êssencia e proxímo.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_15'].'</label> </p>
<p>
<p>êxito e último.
</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_16'].'</label> </p>
<hr/>
</div>
</div>
 
 
  ';
	
	echo $resultado;
}