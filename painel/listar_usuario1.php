
<?php
include_once "conexao.php";

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);
//calcular o inicio visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

//consultar no banco de dados
$result_usuario = "SELECT * FROM erikap ORDER BY Id DESC LIMIT $inicio, $qnt_result_pg";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>

   
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        	
    <div class="col-xl-3 col-md-6 mb-4">
       
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de Avaliação feita Português</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
 
               <h4>


<?php
//https://gist.github.com/FelipeGrijo
$host = 'localhost';//Endereco
$user = 'root';//Usuario
$pass = '';//Senha
$db = 'ret';//Nome do banco de dados
$mysqli = new mysqli($host,$user,$pass,$db);

$sql="SELECT count(id) AS  total FROM erikap";//usuarios = nome da tabela
//$sql="SELECT count(id) AS  total FROM usuarios where ativo='0'";
$result=mysqli_query($mysqli,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></h4>

              </div>
            </div>
            <div class="col-auto">
             
            </div>
          </div>
        </div>
	<table class="table table-striped table-bordered table-hover">

		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
			 
			<th>CPF</th>
			<th>Visualizar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<th><?php echo $row_usuario['id']; ?></th>
					<td><?php echo $row_usuario['nome']; ?></td>
			        <td><?php echo $row_usuario['cpf']; ?></td>
					<td>
						<button type="button"  class="btn btn-outline-primary view_data" id="<?php echo $row_usuario['id']; ?>">Visualizar</button>
					</td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
</div></div><br>
	<?php
	//Paginação - Somar a quantidade de usuários
	$result_pg = "SELECT COUNT(id) AS num_result FROM erikap";
	$resultado_pg = mysqli_query($conn, $result_pg);
	$row_pg = mysqli_fetch_assoc($resultado_pg);

	//Quantidade de pagina
	$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

	//Limitar os link antes depois
	$max_links = 2;

	echo '<nav aria-label="paginacao">';
	echo '<ul class="pagination">';
	echo '<li class="page-item">';
	echo "<span class='page-link'><a href='#' onclick='listar_usuario(1, $qnt_result_pg)'>Primeira</a> </span>";
	echo '</li>';
	for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
		if($pag_ant >= 1){
			echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_usuario($pag_ant, $qnt_result_pg)'>$pag_ant </a></li>";
		}
	}
	echo '<li class="page-item active">';
	echo '<span class="page-link">';
	echo "$pagina";
	echo '</span>';
	echo '</li>';

	for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
		if($pag_dep <= $quantidade_pg){
			echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_usuario($pag_dep, $qnt_result_pg)'>$pag_dep</a></li>";
		}
	}
	echo '<li class="page-item">';
	echo "<span class='page-link'><a href='#' onclick='listar_usuario($quantidade_pg, $qnt_result_pg)'>Última</a></span>";
	echo '</li>';
	echo '</ul>';
	echo '</nav>';

}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
