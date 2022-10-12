<html>

<head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="estilo/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <!--botao-menu-mobile-->
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <!--mobile-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <section class="banner-principal">
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
                <img class="right" src="images/minhaFoto.jpg" />
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
            <div class="clear"></div><!--clear float-->
        </div>
        <!--center-->
    </section>
    <!--especialidades-->
    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore omnis recusandae inventore, voluptate perferendis molestiae vitae in ex debitis fuga vel blanditiis distinctio commodi sed unde sint, perspiciatis quae? Iure?</p>
                    <!--depoimento-descricao-->
                    <p class="nome-autor">Lorem ipsum</p>
                    <!--nome-autor-->
                </div>
                <!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore omnis recusandae inventore, voluptate perferendis molestiae vitae in ex debitis fuga vel blanditiis distinctio commodi sed unde sint, perspiciatis quae? Iure?</p>
                    <!--depoimento-descricao-->
                    <p class="nome-autor">Lorem ipsum</p>
                    <!--nome-autor-->
                </div>
                <!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore omnis recusandae inventore, voluptate perferendis molestiae vitae in ex debitis fuga vel blanditiis distinctio commodi sed unde sint, perspiciatis quae? Iure?</p>
                    <!--depoimento-descricao-->
                    <p class="nome-autor">Lorem ipsum</p>
                    <!--nome-autor-->
                </div>
                <!--depoimento-single-->
            </div>
            <!--w50-->
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iste odit temporibus, dolore eum voluptatum ut qui eligendi natus enim facilis a corrupti totam omnis consequuntur, praesentium modi, itaque quo.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iste odit temporibus, dolore eum voluptatum ut qui eligendi natus enim facilis a corrupti totam omnis consequuntur, praesentium modi, itaque quo.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iste odit temporibus, dolore eum voluptatum ut qui eligendi natus enim facilis a corrupti totam omnis consequuntur, praesentium modi, itaque quo.</li>
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
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
        <!--center-->
    </footer>
</body>

</html>