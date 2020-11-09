<?php
require('conexao.php');

   $listagem = $conn->prepare("SELECT * FROM tblexpense");
   $listagem ->execute();
   while ($lista = $listagem->fetch(PDO::FETCH_ASSOC) ): 

?>
<?php echo $lista["pergunta_1"]; ?>

<?php endwhile; ?>