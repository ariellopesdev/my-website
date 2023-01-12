<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Cadastrar Categoria</h2>
    <form method="post" enctype="multipart/form-data">
        <?php
            if(isset($_POST['acao'])){
                //Enviei meu formulário.
                $nome = $_POST['nome'];
                if($nome == ''){
                    Painel::alert('erro','   Campo nome é obrigatório!');  
                }else{
                    //Podemos cadastrar!
                    if(Painel::imagemValida($imagem) == false){
                        Painel::alert('erro','   Formato escolhido não é válido. Selecione imagem com formatos .jpg, .jpeg ou png!');
                    }else{
                        //Apenas cadastrar no banco de dados!
                        include('../classes/lib/WideImage.php');
                        $imagem = Painel::uploadFile($imagem);
                        $arr = ['nome'=>$nome,'slide'=>$imagem,'order_id'=>'0','nome_tabela'=>'tb_site.categorias'];
                        Painel::insert($arr);
                        Painel::alert('sucesso','Cadastro do slide realizado com sucesso!');
                    }
                }
            }
        ?>
        <div class="form-group">
            <label>Nome da Categoria:</label>
            <input type="text" name="nome">
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Cadastrar!">
        </div><!--form-group-->
    </form>
</div><!--box-content-->