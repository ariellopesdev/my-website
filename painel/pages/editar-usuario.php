<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Editar Usuário</h2>
    <form method="post" enctype="multipart/form-data">
        <?php
            if(isset($_POST['acao'])){
                //Enviei meu formulário.
                Painel::alert('sucesso','   Atualizado com sucesso!');
            }
        ?>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $_SESSION['nome'];?>" required >
        </div><!--form-group-->
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="senha" value="<?php echo $_SESSION['password'];?>" required>
        </div><!--form-group-->
        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img'];?>">
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar">
        </div><!--form-group-->
    </form>
</div><!--box-content-->