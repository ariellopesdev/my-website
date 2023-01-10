<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Editar Configurações do Site</h2>
    <form method="post" enctype="multipart/form-data">
        <?php
            if(isset($_POST['acao'])){
                if(Painel::update($_POST,false)){
                    Painel::alert('sucesso','   Oserviço foi editado com sucesso!');
                    $servico = Painel::select('tb_site.config',false);
                }else{
                    Painel::alert('erro','   Campos vazios não são permitidos!');
                }
            }
        ?>
        <div class="form-group">
            <label>Nome da Pessoa:</label>
            <textarea name="servico"><?php echo $servico['servico']?></textarea>
        </div><!--form-group-->
        <div class="form-group">
            <input type="hidden" name="nome_tabela" value= "tb_site.servicos">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!--form-group-->
    </form>
</div><!--box-content-->