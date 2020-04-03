<?php get_header(); ?>
<nav id="menu">
    <div>
        <h1><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ccbr_preto.svg"></a></h1>
        <ul class="menu">
            <a class="close-menu"><img width="30" src="<?php bloginfo('template_url'); ?>/img/close.svg"></a>
            <li><a data-go="capa" class="go active">Estamos nessa juntos</a></li>
            <li><a data-go="como" class="go">Como estamos atuando</a></li>
            <li><a data-go="oque" class="go">O que estamos fazendo</a></li>
            <li><a data-go="onde" class="go">Onde estamos atuando</a></li>
            <li><a data-go="depos" class="go">Depoimentos</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row anchor capa" id="capa" data-color="branco">
        <div class="container" style="max-width: 420px !important;">
            <a class="open-menu"><img width="40" src="<?php bloginfo('template_url'); ?>/img/bars.svg"></a>
            <h1>Estamos nessa juntos</h1>
            <img class="logo" src="<?php bloginfo('template_url'); ?>/img/ccbr_branco.svg">
            <p>Diante do avanço do novo coronavírus em todo o mundo, como não poderia deixar de ser, temos tomado medidas que acreditamos ser capazes de ajudar as pessoas a atravessar essa crise.</p>
            <p>A The Coca-Cola Company, nossos parceiros engarrafadores e a The Coca-Cola Foundation vão doar mais de 120 milhões de dólares em apoio aos esforços de prevenção e reação à Covid-19 nas comunidades afetadas.</p>
            <p>Aqui no Brasil, estamos contribuindo com bebidas e itens necessários aos trabalhadores da saúde, apoio a comunidades vulneráveis e amplificação das mensagens de prevenção. Vamos usar esse espaço para contar mais detalhadamente o que temos feito diante desse cenário desafiador.</p>
            <p>Acompanhe:</p>
        </div>
    </div>
    <div class="row anchor como" id="como" data-color="preto">
        <div class="container">
            <h2>Como estamos atuando</h2>
        </div>
    </div>
    <div class="row anchor oque" id="oque" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="balls-line"></div>
                    <h2>O que estamos fazendo</h2>
                </div>
            </div>
            <div class="row filtros">
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="star" class=""><?php svg('star','cvermelho'); ?> Trabalhadores <br>da saúde</a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="tria" class=""><?php svg('tria','cvermelho'); ?> Comunidades <br>vulneráveis</a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="remo" class=""><?php svg('remo','cvermelho'); ?> Medidas de <br>prevenção</a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="circ" class=""><?php svg('circ','cvermelho'); ?> Outras <br>iniciativas</a>
                </div>
            </div>
            <div class="row itens">
                <div class="col-12 col-xl-4 item item-star item-tria item-circ">
                    <div class="box">
                        <span><?php svg('star','cbranco'); ?><?php svg('tria','cbranco'); ?><?php svg('remo','cbranco'); ?><?php svg('circ','cbranco'); ?></span>
                        <p>item-star item-tria item-circ Pausa em todas as campanhas publicitárias de Coca-Cola e de todas as nossas marcas, por tempo indeterminado. Nosso foco está em garantir a segurança e o bem-estar dos nossos associados e comunidades</p>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-tria item-remo item-circ">
                    <div class="box">
                        <p>item-tria item-remo item-circ Pausa em todas as campanhas publicitárias de Coca-Cola eem-estar dos nossos associados e comunidades</p>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-circ">
                    <div class="box">
                        <p>item-circ Pausa em todas as campanhas publicitárias de Coca-Cola e de todas as nossas marcas, por tempo indeterminado. Nosso foco está em garantir a segurança e o bem-estar dos nossos associados e comunidades</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 tc"><a class="mais">Veja mais ações +</a></div>
            </div>
        </div>
    </div>
    <div class="row anchor onde" id="onde" data-color="preto">
        <div class="container">
        </div>
    </div>
    <div class="row anchor depos" id="depos" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="balls-line"></div>
                    <h2>Depoimentos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p0">
                    <div class="carousel">
                        <div class="flow">
                            <div class="item">
                                <div class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dolor earum facilis, ex, autem iusto, ullam labore accusantium facere explicabo voluptatem porro, voluptatum consectetur animi? Perferendis a quod, omnis dolorem!</p>
                                    <p class="sign">Douis autem</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dolor earum facilis, ex, autem iusto, ullam labore accusantium facere explicabo voluptatem porro, voluptatum consectetur animi? Perferendis a quod, omnis dolorem!</p>
                                    <p class="sign">Douis autem</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dolor earum facilis, ex, autem iusto, ullam labore accusantium facere explicabo voluptatem porro, voluptatum consectetur animi? Perferendis a quod, omnis dolorem!</p>
                                    <p class="sign">Douis autem</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dolor earum facilis, ex, autem iusto, ullam labore accusantium facere explicabo voluptatem porro, voluptatum consectetur animi? Perferendis a quod, omnis dolorem!</p>
                                    <p class="sign">Douis autem</p>
                                </div>
                            </div>
                        </div>
                        <div class="controls">
                            <ul>
                                <li data-num="1" class="active"></li>
                                <li data-num="2" class=""></li>
                                <li data-num="3" class=""></li>
                                <li data-num="4" class=""></li>
                            </ul>
                            <a class="left"><img width="25" src="<?php bloginfo('template_url'); ?>/img/seta.svg"></a>
                            <a class="right"><img width="25" src="<?php bloginfo('template_url'); ?>/img/seta.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row duvida anchor" id="duvida" data-color="branco">
        <div class="container">
            <h2>Ficou com alguma dúvida?</h2>
            <p>Entre em contato com o nosso centro de relacionamento <a href="">pelo chat</a> ou pelo telefone (21)4002-2121. <span>Estamos nessa juntos!</span></p>
            <div class="row">
                <div class="col-12 col-xl-6"><p><a href="">Termos e condições</a></p></div>
                <div class="col-12 col-xl-6"><p><a href="">Política de privacidade</a></p></div>
            </div>
            <p class="tc"><img class="img-fluid" width="150" src="<?php bloginfo('template_url'); ?>/img/ccbr_branco.svg"></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>