<?php
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $noticia = Painel::select('tb_site.noticias','id = ?',array($id));
    }else{
        Painel::alert('erro','   Você precisa passar o parametro ID.');
        die();
    }
?>
<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Editar Notícias</h2>
    <form method="post" enctype="multipart/form-data">
        <?php
            if(isset($_POST['acao'])){
                //Enviei meu formulário.
                $nome = $_POST['titulo'];
                $conteudo = $_POST['conteudo'];
                $imagem = $_FILES['capa'];
                $imagem_atual = $_POST['imagem_atual'];
                $verifica = MySql::conectar()->prepare("SELECT `id` FROM `tb_site.noticias` WHERE titulo = ? AND categoria_id = ? AND id != ?");
                $verifica->execute(array($nome,$_POST['categoria_id'],$id));
                if($verifica->rowCount() == 0){
                    if($imagem['name'] != ''){
                        //Existe o upload de imagem
                        if(Painel::imagemValida($imagem)){
                            Painel::deleteFile($imagem_atual);
                            $imagem = Painel::uploadFile($imagem);
                            $slug = Painel::generateSlug($nome);
                            $arr = ['titulo'=>$nome,'data'=>date('Y-m-d'),'categoria_id'=>$_POST['categoria_id'],'conteudo'=>$conteudo,'capa'=>$imagem,'slug'=>$slug,'id'=>$id,'nome_tabela'=>'tb_site.noticias'];
                            Painel::update($arr);
                            $noticia = Painel::select('tb_site.noticias','id = ?',array($id));
                            Painel::alert('sucesso','   Notícia atualizada junto a imagem com sucesso!');
                        }else{
                            Painel::alert('erro','   O formato da imagem não é válido');
                        }
                    }else{
                        $imagem = $imagem_atual;
                        $slug = Painel::generateSlug($nome);
                        $arr = ['titulo'=>$nome,'categoria_id'=>$_POST['categoria_id'],'conteudo'=>$conteudo,'capa'=>$imagem,'slug'=>$slug,'id'=>$id,'nome_tabela'=>'tb_site.noticias'];
                        Painel::update($arr);
                        $noticia = Painel::select('tb_site.noticias','id = ?',array($id));
                        Painel::alert('sucesso','   Notícia atualizada com sucesso!');
                    }
                }else{
                    Painel::alert('erro','   Já existe nóticia com esse nome!');
                }
            }
        ?>
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="titulo" required value="<?php echo $noticia['titulo'];?>">
        </div><!--form-group-->
        <div class="form-group">
            <label>Conteúdo:</label>
            <textarea class="tinymce" name="conteudo"><?php echo $noticia['conteudo']; ?></textarea>
        </div><!--form-group-->
        <div class="form-group">
            <label>Categoria: </label>
            <select name="categoria_id">
                <?php
                $categorias = Painel::selectAll('tb_site.categorias');
                foreach ($categorias as $key => $value) {
                ?>
                    <option <?php if($value['id'] == $noticia['categoria_id']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['nome'] ?></option>
                <?php } ?>
            </select>
        </div><!--form-group-->
        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="capa">
            <input type="hidden" name="imagem_atual" value="<?php echo $noticia['capa'];?>">
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar">
        </div><!--form-group-->
    </form>
</div><!--box-content-->