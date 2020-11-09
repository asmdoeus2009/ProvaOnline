<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<style type="text/css">     
.modal-content {
    border: 1;
    margin-top: 1px;
}
</style>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Avaliação do Alunos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <form action="code.php" method="POST">

        <div class="modal-body">

          
      
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
 
  <!--<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Adicionar
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
               Adicionar  Perfiel 
            </button>
    </h6>
  </div>-->

  
 

      
       
<span id="conteudo"></span><br><br><br>
    </div>
    
    <div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"> 
            <h5 class="modal-title" id="visulUsuarioModalLabel"><img src="img/escudo.jpg" width="163" height="100"><br>Detalhes das provas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <span id="visul_usuario"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
          </div>
       
    
 
 
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


 <script>

    $(function(){
      $('#visulUsuarioModal').find('.modal-dialog').css('max-width','55%');
    });
</script>

    <script>
      var qnt_result_pg = 50; //quantidade de registro por página
      var pagina = 1; //página inicial
      $(document).ready(function () {
        listar_usuario(pagina, qnt_result_pg); //Chamar a função para listar os registros
      });
      
      function listar_usuario(pagina, qnt_result_pg){
        var dados = {
          pagina: pagina,
          qnt_result_pg: qnt_result_pg
        }
        $.post('listar_usuario5.php', dados , function(retorna){
          //Subtitui o valor no seletor id="conteudo"
          $("#conteudo").html(retorna);
        });
      }
      
      $(document).ready(function(){
        $(document).on('click','.view_data', function(){
          var user_id = $(this).attr("id");
          //alert(user_id);
          //Verificar se há valor na variável "user_id".
          if(user_id !== ''){
            var dados = {
              user_id: user_id
            };
            $.post('quinto.php', dados, function(retorna){
              //Carregar o conteúdo para o usuário
              $("#visul_usuario").html(retorna);
              $('#visulUsuarioModal').modal('show'); 
            });
          }
        });
      });
    </script>