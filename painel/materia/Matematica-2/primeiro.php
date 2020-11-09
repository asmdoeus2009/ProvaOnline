 <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />



   <form method="post" action="aluno.php">

<div class="col-md-12">

<div class="row">

  

   <div class="col-md-5 pr-md-1">



                      <div class="form-group">



                        <label style="color:#FBF7F7;">Nome</label>



                        <input type="text" name="nome" class="form-control" required placeholder="Digite o nome e o sobrenome">



                      </div>



              </div>











              <div class="col-md-3 px-md-1">



                      <div class="form-group">



                        <label style="color:#FBF7F7;">cpf</label>



                         <input type="text" name="cpf" class="form-control"  maxlength="14" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' required placeholder="Digite o seu cpf">



                      </div>



               </div>

<!-- Conteúdo a baico -->





 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">1. Marque apenas o número 5 em números romanos:</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="a) III " />&nbsp;A-) III </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="b) IV  " />&nbsp;B-) IV </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="c) I " />&nbsp;C-) c) I </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value=" d)	V" />&nbsp;D) V </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">2. Escreva em números romanos de 1 até 5. </p></h5>  </label><br>

<textarea name="resposta_2" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">3. Coloque V para verdadeiro e F para falso.</p></h5>  </label><br>

 <p>

  <p>O povo romano representava os números com as letras.

</p>

  <input type="radio" name="resposta_3"  value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_3" value="Falso" required/> &nbsp;<label>Falso</label>

</p>

<p>

 <p>Não encontramos esses símbolos em relógios.

</p>

 <input type="radio" name="resposta_4" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_4" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p>Encontramos os símbolos romanos em relógios capítulos de livros ,nomes de papas , séculos , eventos e reis.

</p>

 <input type="radio" name="resposta_5" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_5" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p>O povo romano não representava os números com as letras.

</p>

<input type="radio" name="resposta_6" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_6" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>



</div>

</div>

 





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">4. Marque apenas a alternativa que indica a ordem correta.</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value="a) II – I – III -V – I V " required />&nbsp;A-) II – I – III -V – I V </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value="b) I -III – II – IV -V  " required/>&nbsp;B-) I -III – II – IV -V </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value="c) I – II – III - IV – V " required/>&nbsp;C-) I – II – III - IV – V </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value=" d) V – II – I – IV – III " required/>&nbsp;D) V – II – I – IV – III  </label><br>

<hr/>

</div>

</div>



 

 





 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">5. Escreva  de 0 até 10 somente os números que termina em par.</p></h5>  </label><br>

<textarea name="resposta_8" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

<hr/>

</div>

</div>



 



 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">6.Marque apenas a alternativa que todos os números são ímpar.</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value="a)  0,3,2,4,6  " required/>&nbsp;A-) 0,3,2,4,6 </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value="b)  1,5,7,3,9 " required/>&nbsp;B-) 1,5,7,3,9 </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value="c)  2,3,4,0,9" required/>&nbsp;C-) 2,3,4,0,9 </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value=" d) 8,2,1,3,6" required/>&nbsp;D) 8,2,1,3,6 </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">7. Marque V ou F.</p></h5>  </label><br>

 <p>

  <p>Número par é quando os seus elementos são agrupados de dois em dois e não sobram elementos.

</p>

  <input type="radio" name="resposta_10"  value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_10" value="Falso" required/> &nbsp;<label>Falso</label>

</p>

<p>

 <p>Número ímpar é quando os seus elementos são agrupados de dois em dois e não sobram nenhum elemento. 

</p>

 <input type="radio" name="resposta_11" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_11" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p>Um número é ímpar quando os elementos são agrupados de dois em dois e sobram elementos.

</p>

 <input type="radio" name="resposta_12" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_12" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p>Um número par é quando  os seus elementos são agrupados de dois em dois e sobram elementos.

</p>

<input type="radio" name="resposta_13" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_13" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">8. Marque apenas a alternativa que todos os números são par.</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value="a) 	3,2,6,1,4 " />&nbsp;A-) 3,2,6,1,4 </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value="b)	5,2,8,7,6 " />&nbsp;B-) 5,2,8,7,6 </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value="c) 7.0,1,5,4 " />&nbsp;C-)	7.0,1,5,4 </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value=" d) 8,2,4,0,6" />&nbsp;D) 8,2,4,0,6 </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">9. Marque V ou F para as colocações da corrida.</p></h5>  </label><br>

 <p>

  <p> Ana está no terceiro lugar na corrida que indicam o número ordinais 4º. 

</p>

  <input type="radio" name="resposta_15"  value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_15" value="Falso" required/> &nbsp;<label>Falso</label>

</p>

<p>

 <p>Joana está no primeiro lugar na corrida que indica o número ordinais 1º.

</p>

 <input type="radio" name="resposta_16" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_16" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p>Malena está no segundo lugar na corrida que indica o número ordinais 8º.

</p>

 <input type="radio" name="resposta_17" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_17" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p> Mariana está no quarto lugar na corrida que indica o número ordinais 4º.

</p>

<input type="radio" name="resposta_18" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_18" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">10. Os números ordinais indicam:</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="a) A cor de cada número ordinais " required/>&nbsp;A-)  A cor de cada número ordinais </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="b) Ordem ou a posição de uma pessoa ou objeto em uma seqüência. " required/>&nbsp;B-)  Ordem ou a posição de uma pessoa ou objeto em uma seqüência. </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="c) A numeração.  " required/>&nbsp;C-) A numeração. </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value=" d) A linguagem." required/>&nbsp;D) A linguagem  </label><br>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<input type="submit" name="grupo2_btn"  class="btn btn-fill btn-primary" value="Finalizar">

</div>

</div> 

</div>

</div>

</form>