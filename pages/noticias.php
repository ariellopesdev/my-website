<section class="header-noticias">
    <div class="center">
        <h2><i class="fa fa-bell-o" aria-hidden="true"></i></h2>
        <h2>Acompanhe as últimas <b>notícias do portal</b></h2>
    </div><!-- /.center -->
</section><!-- /.header-noticias -->
<section class="container-portal">
    <div class="center">
        <div class="sidebar">
            <div class="box-content-sidebar">
                <h3><i class="fa fa-search" aria-hidden="true"></i> Realizar uma busca:</h3>
                <form>
                    <input type="text" name="busca" placeholder="O que deseja encontrar?" required>
                    <input type="submit" name="acao" value="Pesquisar!">
                </form>
            </div><!-- /.box-content-sidebar -->
            <div class="box-content-sidebar">
                <h3><i class="fa fa-list-ul" aria-hidden="true"></i> Selecione a categoria: </h3>
                <form>
                    <select name="categoria">
                        <option value="esportes">Esportes</option>
                        <option value="esportes">Geral</option>
                    </select>
                </form>
            </div><!-- /.box-content-sidebar -->
            <div class="box-content-sidebar">
                <h3><i class="fa fa-user" aria-hidden="true"></i> Sobre o autor: </h3>
                <div class="autor-box-portal">
                    <div class="box-img-autor"></div>
                    <div class="texto-autor-portal text-center">
                        <h3>Ariel Lopes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo rerum perferendis amet. Ipsam vel odio, asperiores voluptate dolor alias doloribus voluptatem vitae necessitatibus perferendis fugiat, aspernatur eum dolores minima voluptatibus.</p>
                    </div><!--texto-autor-portal-->
                </div><!--autor-box-portal-->
            </div><!-- /.box-content-sidebar -->
        </div><!-- /.sidebar -->
        <div class="conteudo-portal">
            <div class="header-conteudo-portal">
                <!-- <h2>Visualizando todos os Posts</h2> -->
                <h2>Visualizando Posts em <span>Esportes</span></h2>
            </div><!-- /.header-conteudo-portal -->
            <?php
                for($i = 0; $i < 5; $i++){
            ?>
            <div class="box-single-conteudo">
                <h2>18/01/2023 - Conheça os eleitos para ga...</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque esse ea perferendis distinctio unde odit accusantium, itaque labore dolore fugiat architecto libero nihil, perspiciatis amet optio? Dolor quo ex rerum.</p>
                <a href="<?php echo INCLUDE_PATH; ?>esportes/nome-do-post">Leia mais</a>
            </div><!-- /.box-single-conteudo -->
            <?php } ?>
        </div><!--conteudo-portal-->
        <div class="clear"></div>
    </div><!-- /.center -->
</section><!-- /.container-portal -->