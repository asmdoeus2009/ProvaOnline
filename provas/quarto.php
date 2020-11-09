 
<?php
require('includes/dbconnection.php');
$id = 4;
$ret=mysqli_query($con,"select * from tblprova where id='$id'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
 <div class="col-md-5 pr-md-1">
<div class="form-group">
<label style="color:#FBF7F7;">Nome</label>
<input type="text" name="nome" class="form-control" required placeholder="Digite seu nome">
</div>
</div>
<div class="col-md-3 px-md-1">
<div class="form-group">
<label style="color:#FBF7F7;">cpf</label>
<input type="text" name="cpf" maxlength="11" class="form-control" required placeholder="Seu cpf">
</div>
</div>

<div class="col-md-3 px-md-1">
<div class="form-group">
<label style="color:#FBF7F7;">Materia</label>
<input type="text" name="materia"class="form-control" disabled="" style="font-size:12px; color:red"  value="<?php  echo $row['materia'];?>">
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_1'];?></p></h5>  </label><br>
<textarea name="resposta_1" class="form-control" required placeholder="Digite sua resposta ..."></textarea>
<hr/>
</div>
</div>





<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['pergunta_2'];?></p></h5>  </label><br>

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_3'];?>"/>&nbsp;<?php  echo $row['pergunta_3'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_4'];?>" />&nbsp;<?php  echo $row['pergunta_4'];?> </label><BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_5'];?>" />&nbsp;<?php  echo $row['pergunta_5'];?> </label> <BR />

<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_2" value="<?php  echo $row['pergunta_6'];?>" />&nbsp;<?php  echo $row['pergunta_6'];?> </label><br>

<hr/>

</div>

</div>






<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_7'];?></p></h5>  <br><?php  echo $row['extra'];?></label><br>
<textarea name="resposta_3" class="form-control" required placeholder="Digite sua resposta ..."></textarea>
<hr/>
</div>
</div>



<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_8'];?></p></h5>  </label><br>
 <p>
  <p> <?php  echo $row['pergunta_9'];?>
</p>
  <input type="radio" name="resposta_4"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
  <input type="radio" name="resposta_4" required value="Falso" /> &nbsp;<label>Falso</label>
</p>
<p>
 <p> <?php  echo $row['pergunta_10'];?>
</p>
 <input type="radio" name="resposta_5" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_5"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
  <p> <?php  echo $row['pergunta_11'];?>
</p>
 <input type="radio" name="resposta_6" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_6"  requiredvalue="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
<p> <?php  echo $row['pergunta_12'];?>
</p>
<input type="radio" name="resposta_7" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_7" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<hr/>
</div>
</div>
 

 

<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"> <?php  echo $row['pergunta_13'];?></p></h5> <br><?php  echo $row['extras'];?> </label><br>
<textarea name="resposta_8" class="form-control" required placeholder="Digite sua resposta ..."></textarea>
<hr/>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_14'];?></p></h5>  <br><?php  echo $row['extra'];?></label><br>
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_15'];?>"/>&nbsp;<?php  echo $row['pergunta_15'];?> </label> <BR />
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_16'];?>" />&nbsp;<?php  echo $row['pergunta_16'];?> </label><BR />
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_17'];?>" />&nbsp;<?php  echo $row['pergunta_17'];?> </label> <BR />
<label style="color:#FBF7F7;font-size:15px;font-family:calibri ;"><input type="radio" required name="resposta_9" value="<?php  echo $row['pergunta_18'];?>" />&nbsp;<?php  echo $row['pergunta_18'];?> </label><br>
<hr/>
</div>
</div>






<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"> <?php  echo $row['pergunta_19'];?></p></h5> <br><?php  echo $row['extrass'];?> </label><br>
<textarea name="resposta_10" class="form-control" required placeholder="Digite sua resposta ..."></textarea>
<hr/>
</div>
</div>





<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_20'];?></p></h5>  <br><?php  echo $row['extras'];?> </label><br>
 <p>
  <p> <?php  echo $row['pergunta_21'];?>
</p>
  <input type="radio" name="resposta_4"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
  <input type="radio" name="resposta_4" required value="Falso" /> &nbsp;<label>Falso</label>
</p>
<p>
 <p> <?php  echo $row['pergunta_22'];?>
</p>
 <input type="radio" name="resposta_5" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_5"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
  <p> <?php  echo $row['pergunta_23'];?>
</p>
 <input type="radio" name="resposta_6" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_6"  requiredvalue="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
<p> <?php  echo $row['pergunta_24'];?>
</p>
<input type="radio" name="resposta_7" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_7" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<hr/>
</div>
</div>
 


<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_25'];?></p></h5>  </label><br>
<textarea name="resposta_15" class="form-control" required placeholder="Digite sua resposta ..."></textarea>
<hr/>
</div>
</div>













<div class="col-md-12">
<div class="form-group">
<label><h5><p class="text-danger"><?php  echo $row['pergunta_26'];?></p></h5>  <br><?php  echo $row['extrass'];?> </label><br>
 <p>
  <p> <?php  echo $row['pergunta_27'];?>
</p>
  <input type="radio" name="resposta_4"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
  <input type="radio" name="resposta_4" required value="Falso" /> &nbsp;<label>Falso</label>
</p>
<p>
 <p> <?php  echo $row['pergunta_28'];?>
</p>
 <input type="radio" name="resposta_5" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_5"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
  <p> <?php  echo $row['pergunta_29'];?>
</p>
 <input type="radio" name="resposta_6" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_6"  requiredvalue="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<p>
<p> <?php  echo $row['pergunta_30'];?>
</p>
<input type="radio" name="resposta_7" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>
<input type="radio" name="resposta_7" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>
<hr/>
</div>
</div>


 <div class="col-md-12">
<div class="card-footer">
<button type="submit"  name="grupo4_btn" class="btn btn-primary pull-right">Finalizar</button>
</div>
</div> 
 
 <?php } ?>
 
