<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');" class="banner-single"></div>
    <!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg');" class="banner-single"></div>
    <!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form3.jpg');" class="banner-single"></div>
    <!--banner-single-->
    <div class="overlay"></div>
    <!--overlay-->
    <div class="center">
        <form>
            <h2>Qual seu e-mail?</h2>
            <input type="email" name="email" required />
            <input type="submit" name="acao" value="Cadastrar!" />
        </form>
    </div>
    <!--center-->
    <div class="bullets"></div><!--bullets-->
</section>
<!--banner-principal-->
<section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
            <h2>Ariel Lopes</h2>
            <p>
                “Não importa a distância que nos separa, se há um céu que nos une.” “Se você sabe explicar o que sente, não ama, pois o amor foge de todas as explicações possíveis.” “O mundo é grande e cabe nesta janela sobre o mar. O mar é grande e cabe na cama e no colchão de amar.
            </p>
            <p>
                “Nossa capacidade de amar é limitada, e o amor infinito; este é o drama.”

                “Não sei amar pela metade, não sei viver de mentiras, não sei voar com os pés no chão.”

                “Quero que todos os dias do ano, todos os dias da vida, de meia em meia hora, de cinco em cinco minutos me digas: eu te amo.”
            </p>
        </div>
        <!--w50-->
        <div class="w50 left">
            <!--Pegar imagem depois-->
            <img class="right" src="<?php echo INCLUDE_PATH; ?>images/minhaFoto.jpg" />
        </div>
        <!--w50-->
        <div class="clear"></div>
    </div>
    <!--center-->
</section>
<!--descricao-autor-->
<section class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illo magni nam, laudantium repudiandae nostrum reiciendis blanditiis labore eveniet est dolore architecto consectetur sit eaque vitae nemo ut eligendi culpa.</p>
        </div>
        <!--box-especialidades-->
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illo magni nam, laudantium repudiandae nostrum reiciendis blanditiis labore eveniet est dolore architecto consectetur sit eaque vitae nemo ut eligendi culpa.</p>
        </div>
        <!--box-especialidades-->
        <div class="w33 left box-especialidades">
            <h3><i class="fa fa-jpy" aria-hidden="true"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illo magni nam, laudantium repudiandae nostrum reiciendis blanditiis labore eveniet est dolore architecto consectetur sit eaque vitae nemo ut eligendi culpa.</p>
        </div>
        <!--box-especialidades-->
        <div class="clear"></div>
        <!--clear float-->
    </div>
    <!--center-->
</section>
<!--especialidades-->
<section class="extras">
    <div class="center">
        <div id="depoimentos" class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <?php
                $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3 ");
                $sql->execute();
                $depoimentos = $sql->fetchAll();
                foreach($depoimentos as $key => $value){
            ?>
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                        <!--depoimento-descricao-->
                        <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                        <!--nome-autor-->
                    </div>
                    <!--depoimento-single-->
                <?php } ?>
        </div>
        <!--w50-->
        <div id="servicos" class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <?php
                        $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 3 ");
                        $sql->execute();
                        $servicos = $sql->fetchAll();
                        foreach($servicos as $key => $value){
                    ?>
                    <li><?php echo $value['servico']; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <!--servicos-->
        </div>
        <!--w50-->
        <div class="clear"></div>
    </div>
    <!--center-->
</section>
<!--extras-->