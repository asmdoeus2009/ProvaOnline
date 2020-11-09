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

<label><h5><p class="text-danger">1. O que é centena?</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="a)	Um conjunto de 20 unidades. " />&nbsp;A-) Um conjunto de 20 unidades. </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="b) Um conjunto de 50 unidades.  " />&nbsp;B-) Um conjunto de 50 unidades. </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value="c) Um conjunto de 70 unidades. " />&nbsp;C-) Um conjunto de 70 unidades. </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_1" value=" d)	Um conjunto de 100 unidades." />&nbsp;D) Um conjunto de 100 unidades. </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">2. Escreva os números por extenso:</p></h5> <br>

120 ______________________________________________<br>
163 ______________________________________________<br>
199 ______________________________________________


 </label><br>

<textarea name="resposta_2" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">3. Sobre a Centena, use V para verdadeiro e F para falso.</p></h5>  </label><br>

 <p>

  <p>1 centena é igual a 200 unidades.

</p>

  <input type="radio" name="resposta_3"  value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_3" value="Falso" required/> &nbsp;<label>Falso</label>

</p>

<p>

 <p>1 centena é igual a 500 unidades.

</p>

 <input type="radio" name="resposta_4" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_4" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p>1 centena é igual a 100 unidades.

</p>

 <input type="radio" name="resposta_5" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_5" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p>1 centena é igual a 1000 unidades.

</p>

<input type="radio" name="resposta_6" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_6" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>



</div>

</div>

 





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">4. O número 100 é formado por:</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value="a) 2 algarismos " required />&nbsp;A-) 2 algarismos </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value="b) 3 algarismos  " required/>&nbsp;B-) 3 algarismos</label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value="c) 4 algarismos " required/>&nbsp;C-) 4 algarismos </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_7" value=" d) 5 algarismos " required/>&nbsp;D) 5 algarismos </label><br>

<hr/>

</div>

</div>



 

 





 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">5. Escreva os números com algarismos.</p></h5> <br>



Cento e setenta e dois ___________________<br>
Cento e noventa e nove __________________<br>
Cento e vinte e três ______________________<br>
Cento e um ____________________


 </label><br>

<textarea name="resposta_8" class="form-control" required placeholder="Digite sua resposta ..."></textarea>

<hr/>

</div>

</div>



 



 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">6. O número 134 decomposto fica:</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value="a) 1 centena, 4 dezenas, 3 unidades. " required/>&nbsp;A-) 1 centena, 4 dezenas, 3 unidades.</label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value="b) 1 centena, 3 dezenas, 4 unidades. " required/>&nbsp;B-) 1 centena, 3 dezenas, 4 unidades. </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value="c) 1 centena, 7 dezenas, 4 unidades." required/>&nbsp;C-) 1 centena, 7 dezenas, 4 unidades.</label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_9" value=" d) 1 centena, 4 dezenas, 7 unidades." required/>&nbsp;D) 1 centena, 4 dezenas, 7 unidades.</label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">7.Calcule mentalmente e veja se as alternativas são verdadeiras ou falsas.</p></h5>  </label><br>

 <p>

  <p>100 + 100 = 300

</p>

  <input type="radio" name="resposta_10"  value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_10" value="Falso" required/> &nbsp;<label>Falso</label>

</p>

<p>

 <p>200 + 100 = 300

</p>

 <input type="radio" name="resposta_11" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_11" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p>400 + 200 = 600

</p>

 <input type="radio" name="resposta_12" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_12" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p>400 + 100 = 500

</p>

<input type="radio" name="resposta_13" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_13" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">8. A centena pertence a qual ordem?</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value="a) 	Primeira ordem " />&nbsp;A-) Primeira ordem</label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value="b)	Segunda ordem " />&nbsp;B-) Segunda ordem  </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value="c)	Terceira ordem " />&nbsp;C-) Terceira ordem</label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_14" value=" d)	Quarta ordem" />&nbsp;D) Quarta ordem </label><br>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">9. Use V para verdadeiro e F para falso.</p></h5>  </label><br>

 <p>

  <p> 186 vem antes de 187.

</p>

  <input type="radio" name="resposta_15"  value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_15" value="Falso" required/> &nbsp;<label>Falso</label>

</p>

<p>

 <p>128 vem depois de 129.

</p>

 <input type="radio" name="resposta_16" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_16" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p>154 vem antes de 153.

</p>

 <input type="radio" name="resposta_17" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_17" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p>149 vem depois de 148.

</p>

<input type="radio" name="resposta_18" value="Verdadeiro" required/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_18" value="Falso" required/> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>



<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">10. O número 196 decomposto fica:</p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="a) 9 centenas, 1 dezena, 6 unidades. " required/>&nbsp;A-)	9 centenas, 1 dezena, 6 unidades. </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="b)	1 centena, 6 dezenas, 9 unidades. " required/>&nbsp;B-)  1 centena, 6 dezenas, 9 unidades. </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value="c) 1 centena, 9 dezenas, 6 unidades.  " required/>&nbsp;C-) 1 centena, 9 dezenas, 6 unidades. </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" name="resposta_19" value=" d)  6 centenas, 1 dezena, 9 unidades." required/>&nbsp;D) 6 centenas, 1 dezena, 9 unidades. </label><br>

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