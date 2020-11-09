<?php
require('conexao.php');

   $listagem = $conn->prepare("SELECT * FROM prova");
   $listagem ->execute();
   while ($row = $listagem->fetch(PDO::FETCH_ASSOC) ): 

?>

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger">1</p></h5>  </label><br>

<?php  echo $row['resposta_1'];?>

<hr/>

</div>

</div>


<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['resposta_1'];?></p></h5>  </label><br>

 <p>

  <p> <?php  echo $row['resposta_2'];?>

</p>

  <input type="radio" name="resposta_10"  required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

  <input type="radio" name="resposta_10" required value="Falso" /> &nbsp;<label>Falso</label>

</p>

<p>

 <p> <?php  echo $row['resposta_3'];?>

</p>

 <input type="radio" name="resposta_11" required value="Verdadeiro"/>&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_11"  required value="Falso"/> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

  <p> <?php  echo $row['resposta_4'];?>

</p>

 <input type="radio" name="resposta_12" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_12"  requiredvalue="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

<p>

<p> <?php  echo $row['resposta_5'];?>

</p>

<input type="radio" name="resposta_13" required value="Verdadeiro" />&nbsp;<label>Verdadeiro</label>

<input type="radio" name="resposta_13" required value="Falso" /> &nbsp;<label>Falso</label>&nbsp;</p>

<hr/>

</div>

</div>

 

<div class="col-md-12">

<div class="form-group">

<label><h5><p class="text-danger"><?php  echo $row['resposta_6'];?>

</p></h5>  </label><br>

<?php  echo $row['resposta_7'];?>

 

<hr/>

</div>

</div>

  

 
<?php endwhile; ?>