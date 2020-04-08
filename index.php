<?php get_header(); ?>
<nav id="menu" data-color="branco">
    <div>
        <h1><a href="<?php bloginfo('url'); ?>"><?php logo(); ?></a></h1>
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
        <div class="container">
            <a class="open-menu"><img width="40" src="<?php bloginfo('template_url'); ?>/img/bars.svg"></a>
            <h1>Estamos nessa juntos</h1>
            <p>Diante do avanço do novo coronavírus em todo o mundo, como não poderia deixar de ser, temos tomado medidas que acreditamos ser capazes de ajudar as pessoas a atravessar essa crise.</p>
            <p>A The Coca-Cola Company, nossos parceiros engarrafadores e a The Coca-Cola Foundation vão doar mais de 120 milhões de dólares em apoio aos esforços de prevenção e reação à Covid-19 nas comunidades afetadas.</p>
            <p>Aqui no Brasil, estamos contribuindo com bebidas e itens necessários aos trabalhadores da saúde, apoio a comunidades vulneráveis e amplificação das mensagens de prevenção. Vamos usar esse espaço para contar mais detalhadamente o que temos feito diante desse cenário desafiador.</p>
            <p>Acompanhe:</p>
        </div>
    </div>
    <div class="row anchor logos" id="logos" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col lista">
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/ccbr.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/instituto.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/sorocaba.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/verde-campo.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/uberlandia.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/grupo-simoes.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/femsa.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/brasal.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/solar.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/bandeirantes.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/leao.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/cvi.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/andina.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row anchor como" id="como" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Como estamos atuando</h2>
                </div>
            </div>
            <div class="row item saude align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball">
                        <h4>Trabalhadores da Saúde</h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-saude.svg">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Os trabalhadores da saúde estão na linha de frente do enfrentamento da Covid-19, e é fundamental apoiá-los. Nós estamos enviando bebidas aos hospitais e centros de saúde e também usando a nossa capacidade de distribuição para fazer chegar a eles itens fundamentais, como álcool gel.</p>
                </div>
            </div>
            <div class="row item comunidades align-items-center">
                <div class="col-4 col-xl-2 order-xl-1">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-comunidades.svg">
                </div>
                <div class="col-8 col-xl-5 order-xl-3">
                    <div class="ball">
                        <h4>Comunidades Vulneráveis</h4>
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Catadores de materiais recicláveis e comunidades com as quais mantemos relações pelo programa Coletivo Jovem serão apoiados por meio de um fundo, que será administrado com a ajuda de nossos parceiros para alocar os investimentos da melhor maneira.</p>
                </div>
            </div>
            <div class="row item prevencao align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball">
                        <h4>Medidas de Prevenção</h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-prevencao.svg">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Medidas de prevenção são fundamentais para combater o avanço da Covid-19. Por isso, em parceria com o Ministério da Saúde, estamos usando a força dos nossos canais, inclusive os rótulos de nossas embalagens, para divulgar os cuidados necessários para evitar o contágio.</p>
                </div>
            </div>
            <div class="row item outras align-items-center">
                <div class="col-4 col-xl-2 order-xl-1">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-outras.svg">
                </div>
                <div class="col-8 col-xl-5 order-xl-3">
                    <div class="ball">
                        <h4>Outras Iniciativas</h4>
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Estamos, por meio de todo o Sistema Coca-Cola Brasil, empenhados no controle dessa pandemia. Os fabricantes, que estão em diferentes regiões do país, também estão desenvolvendo ações locais, de acordo com as necessidades urgentes de suas comunidades.</p>
                </div>
            </div>
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
                    <a data-cat="saude" class=""><?php svg('saude','cvermelho'); ?><br>Trabalhadores <br>da saúde</a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="comunidades" class=""><?php svg('comunidades','cvermelho'); ?><br>Comunidades <br>vulneráveis</a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="prevencao" class=""><?php svg('prevencao','cvermelho'); ?><br>Medidas de <br>prevenção</a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="outras" class=""><?php svg('outras','cvermelho'); ?><br>Outras <br>iniciativas</a>
                </div>
            </div>
            <div class="row itens">
                <div class="col-12 col-xl-4 item item-saude item-comunidades item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('comunidades','cbranco'); ?><?php svg('prevencao','cbranco'); ?><?php svg('outras','cbranco'); ?></span>
                        <p>Pausa em todas as campanhas publicitárias de Coca-Cola e de todas as nossas marcas, por tempo indeterminado. Nosso foco está em garantir a segurança e o bem-estar dos nossos associados e comunidades</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
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
    <div class="row anchor mapa" id="mapa" data-color="branco">
        <div class="container">
            <div class="regiao">
                <img class="img-fluid brasil" src="<?php bloginfo('template_url'); ?>/img/mapa.svg">
                <?php /*$cnt = 0; $h = fopen(get_bloginfo('template_url').'/mapa/dados3.csv', "r"); while ( ($data = fgetcsv($h, 1000, ";") ) !== FALSE): ?>
                <?php $x = (floatval($data[2])) / 12; $y = (floatval($data[3])) / 12.32; ?>
                <img class="pin" id="pin<?php echo $cnt; ?>" data-uf="<?php echo $data[0]; ?>" data-texto="<?php echo $data[6]; ?>" data-cidade="<?php echo $data[1]; ?>" data-nome="<?php echo $data[5]; ?>" data-id="<?php echo $cnt; ?>" data-x="<?php echo $x; ?>" data-y="<?php echo $y; ?>" src="<?php bloginfo('template_url'); ?>/img/pin-<?php echo strtolower($data[4]); ?>.svg" style="left: <?php echo $x-18/12; ?>%; top: <?php echo $y-44/12.32; ?>%;">
                <?php $cnt++; endwhile;*/ ?>
            </div>
            <div class="bloco">
                <div class="info topbar bvermelho">
                    <p>Fabricante <a class="close-card">Fechar X</a></p>
                </div>
                <div class="info uf">
                    <p class="uf"><a class="chev-uf left"><img width="25" src="<?php bloginfo('template_url'); ?>/img/seta.svg"></a><span>Rio Grande do Norte</span><a class="chev-uf right"><img width="25" src="<?php bloginfo('template_url'); ?>/img/seta.svg"></a></p>
                    <p class="cidade">Manaus</p>
                </div>
                <div class="info ator">
<!--                    <img src="<?php bloginfo('template_url'); ?>/img/logos/grupo-simoes.png">-->
                    <h3>Nome do Coletivo</h3>
                </div>
                <div class="info texto">
                    <p>Doações:</p>
                    <p>1 milhão de unidades de água mineral</p>
                    <p>23 toneladas de cestas básicas</p>
                    <p>12,6 mil produtos (latas 350ml)</p>
                    <p>2,5 mil garrafas PET</p>
                    <p>63 bombonas</p>
                    <p>Linha 7</p>
                    <p>Linha 8</p>
                </div>
                <div class="info ctrl bvermelho">
                    <p><a class="chev-bloco left"><img width="25" src="<?php bloginfo('template_url'); ?>/img/seta-alt.svg"> Anterior</a><a class="chev-bloco right">Próximo <img width="25" src="<?php bloginfo('template_url'); ?>/img/seta-alt.svg"></a></p>
                </div>
            </div>
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
    <div class="row anchor logos" id="logos2" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col lista">
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/ccbr.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/instituto.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/sorocaba.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/verde-campo.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/uberlandia.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/grupo-simoes.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/femsa.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/brasal.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/solar.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/bandeirantes.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/leao.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/cvi.png"></a>
                    <a><img src="<?php bloginfo('template_url'); ?>/img/logos/andina.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>