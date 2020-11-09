<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
  
  $query_user = "SELECT * FROM andressap WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
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

<label><h5><p class="text-danger">1.O que são substantivos?</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_1'].'</label> 

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">2.Dê 2 exemplos de substantivos comuns: </p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_2'].'</label> 

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">3.Sobre os substantivos próprios e comuns, coloque V para verdadeiro e F para falso.</p></h5>  </label><br>

 <p>

  <p>Substantivos próprios nomeiam seres e coisas de uma mesma espécie.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_3'].'</label> 

</p>

<p>

 <p>Substantivos próprios nomeiam as pessoas, lugares e lojas.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_4'].'</label> </p>

<p>

  <p>Mariana, Brasil, Lili e Renner são substantivos comuns.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_5'].'</label> </p>

<p>

<p>Estojo, casa, mala e porta são substantivos próprios.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_6'].'</label> </p>

<hr/>



</div>

</div>

 





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">4. Assinale a alternativa que tem somente substantivos próprios:</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_7'].'</label> 

<hr/>

</div>

</div>



 

 





 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">5.Escreva 4 palavras que tenham “ç”.</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_8'].'</label> 

<hr/>

</div>

</div>



 



 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">6.Assinale a alternativa que a palavra está correta:</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_9'].'</label> 
<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">7.Sobre o uso as cedilha, coloque V para verdadeiro e F para fevereiro. </p></h5>  </label><br>

 <p>

  <p>Cedilha é o sinal que colocamos na letra r antes das letras a, o ou u.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_10'].'</label> 

</p>

<p>

 <p>Cedilha é o sinal que colocamos na letra c antes das letras a, o ou u.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_11'].'</label> </p>

<p>

  <p>Cedilha não se usa em início de palavras.

</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_12'].'</label> </p>

<p>

<p>Usamos a cedilha na letra C antes de e e i.
</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_13'].'</label> </p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">8. Marque a alternativa na qual as palavras estão corretas.</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_14'].'</label> 

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">9.Verifique a frase e corrija mentalmente. Respondendo se está correta marque verdadeira e se está errada marque falsa.</p></h5> <br>

“O pássaro pasou perto do ninho.”

 </label><br>

 <p>

  <p>O Pássaro pasou perto do ninho.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_15'].'</label> 

</p>

<p>

 <p> Ele passou tinta na casa.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_16'].'</label> </p>

<p>

  <p>Aqui está um sossego.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_17'].'</label> </p>

<p>

<p>Eu gosto de sosego.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_18'].'</label> </p>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">10.Observe qual a palavra escrita corretamente e assinale a alternativa.</p></h5>  </label><br>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_19'].'</label> 

</div>

</div>

 
 
  ';
	
	echo $resultado;
}