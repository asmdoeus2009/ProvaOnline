<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
  
  $query_user = "SELECT * FROM daianep WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
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

<label><h5><p class="text-danger">1.Corrija o texto a seguir aplicando o uso da maiúscula e minúscula da forma correta: “andré e Maria, São Amigos. domingo eles viajaram para a cidade de recife e conheceram o Mar, nadaram com os Golfinhos e tomaram bastante Sol na praia.”</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_1'].'</label> 

<hr/>

</div>

</div>











<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">2.Marque a alternativa onde todas as palavras estão escritas aplicando o uso correto da maiúscula e minúscula.</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_2'].'</label> 

<hr/>

</div>

</div>







<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">3. Escreva 5 palavras distintas que tem como regra utilizar a letra maiúscula e 5 com letras minúsculas? </p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_3'].'</label> 

<hr/>

</div>

</div>















<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">4. Marque verdadeiro ou falso nas alternativas a seguir.</p></h5>  </label><br>

 <p>

  <p>Nome de pessoas se escreve com letra maiúscula.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_4'].'</label> 

</p>

<p>

 <p>Ao iniciar um texto começamos com letra maiúscula.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_5'].'</label> </p>

<p>

  <p>Nome de cidades ou países se escrevem com letras minúsculas. 

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_6'].'</label> </p>

<p>

<p>Nome de objetos e títulos de textos se escrevem com letra minúsculas.  

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_7'].'</label> </p>

<hr/>



</div>

</div>

 


<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">5.Passe o texto a seguir para o feminino: “O menino comprou um boi, um cavalo e um carneiro na fazenda do vizinho. No caminho encontrou seu amigo que estava acompanhado do irmão e perguntou: ‘ como está? Vamos comigo levar esses animais no doutor veterinário? ’ então os três seguiram, colocando as conversas em dia e matando a saudade da amizade.”</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_8'].'</label> 

<hr/>

</div>

</div>













 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">6.Marque a alternativa incorreta, no que diz respeito a feminino e masculino:</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_9'].'</label> 

<hr/>

</div>

</div>













<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">7. Complete o texto, utilizando a criatividade para completar a história sobre a pandemia (mínimo 10 linhas): “Um belo dia uma criança questionou ao pai o que significava pandemia e porque ela não podia sair na rua, e teria que usar máscara todas as vezes que saia...</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_10'].'</label> 

<hr/>

</div>

</div>







<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">8.Marque verdadeiro ou falso sobre fonemas e letras.</p></h5>  </label><br>

 <p>

  <p>Na palavra fixa, a letra x representa o fonema /ks/, ou seja, foneticamente, é igual a "ficsa”. Por essa razão, é uma palavra que possui 4 letras e 5 fonemas.

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_11'].'</label> 

</p>

<p>

 <p>As letras da palavra sucedida representam 8 letras e o número de fonemas diferente das letras..

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_12'].'</label> </p>

<p>

  <p>A palavra técnico possui 7 letras e 7 fonemas (/t/ /e/ /c/ /n/ /i/ /c/ /o/), já que todas as letras representam o mesmo número de sons da palavra.
</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_13'].'</label> </p>

<p>

<p>Na palavra complexo, a letra x equivale ao fonema /ks/ sendo assim 8 letras e 7 fonemas. 

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_14'].'</label> </p>

<hr/>

</div>

</div>

 





 <div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">9. Escreva quantas letras e fonemas tem as palavras a seguir respectivamente: a- chute b-máximo c- coçar  d- singelo.</p></h5>  </label><br>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_15'].'</label> 

<hr/>

</div>

</div>













<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">10.Marque verdadeiro ou falso </p></h5>  </label><br>

 <p>

  <p>Na palavra nexo, há 4 letras e 5 fonemas. 
</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_16'].'</label> 

</p>

<p>

 <p>As letras são as representações gráficas dos fonemas.

</p>
<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_17'].'</label> </p>

<p>

  <p>Letras representam o som das palavras e fonemas a grafia, como ela é escrita.
</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_18'].'</label> </p>

<p>

<p>Formada por 8 letras e 7 fonemas: Letras /e/ /s/ /p/ /e/ /l/ /h/ /o/ /s/ (8); Fonemas /e/ /s/ /p/ /e/ /lh/ /o/ /s/ (7).

</p>

<label style="color:#000;font-size:15px;font-family:calibri ;">'.$row_user['resposta_19'].'</label> </p>

<hr/>

</div>

</div>
 
  ';
	
	echo $resultado;
}