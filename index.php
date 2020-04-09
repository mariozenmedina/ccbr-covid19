<?php get_header(); ?>
<nav id="menu" data-color="branco">
    <div>
        <h1><a href="<?php bloginfo('url'); ?>"><?php logo(); ?></a></h1>
        <ul class="menu">
            <a class="close-menu"><img width="30" src="<?php bloginfo('template_url'); ?>/img/close.svg"></a>
            <li><a data-go="capa" class="go active">Estamos nessa juntos</a></li>
            <li><a data-go="como" class="go">Pilares de atuação</a></li>
            <li><a data-go="oque" class="go">O que já fizemos</a></li>
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
            <p>Vamos juntos?</p>
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
        <img class="dotball1" src="<?php bloginfo('template_url'); ?>/img/dot-ball.svg">
        <img class="dotball2" src="<?php bloginfo('template_url'); ?>/img/dot-ball.svg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pilares de Atuação</h2>
                </div>
            </div>
            <div class="row item saude align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball" style="background-image: url('<?php bloginfo('template_url'); ?>/img/imagem_av1.png'); background-position: center center;">
                        <h4>Auxílio<br>à Saúde</h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-saude.svg">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Os trabalhadores da saúde estão na linha de frente do combate da Covid-19, e é fundamental apoiá-los. Nossa contribuição envolve doação de bebidas a hospitais e centros de saúde. Também usamos a nossa capacidade de distribuição para fazer chegar a eles itens fundamentais, como álcool.</p>
                </div>
            </div>
            <div class="row item comunidades align-items-center">
                <div class="col-4 col-xl-2 order-xl-1">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-comunidades.svg">
                </div>
                <div class="col-8 col-xl-5 order-xl-3">
                    <div class="ball" style="background-image: url('<?php bloginfo('template_url'); ?>/img/imagem_av2.png'); background-position: center center;">
                        <h4>Comunidades<br>Vulneráveis</h4>
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Catadores de materiais recicláveis - autônomos e cooperativados - e comunidades com as quais mantemos relações via Instituto Coca-Cola Brasil são apoiados por meio de um fundo administrado com a ajuda de nossos parceiros para alocar os investimentos da melhor maneira.</p>
                </div>
            </div>
            <div class="row item prevencao align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball" style="background-image: url('<?php bloginfo('template_url'); ?>/img/imagem_av3.png'); background-position: center center;">
                        <h4>Medidas de<br>Prevenção</h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-prevencao.svg">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Medidas de prevenção são fundamentais para combater o avanço da Covid-19. Por isso, para amplificar as orientações do Ministério da Saúde, estamos usando a força dos nossos canais, inclusive os rótulos de nossas embalagens, para divulgar os cuidados necessários para evitar o contágio.</p>
                </div>
            </div>
            <div class="row item outras align-items-center">
                <div class="col-4 col-xl-2 order-xl-1">
                    <img class="symbol" src="<?php bloginfo('template_url'); ?>/img/symbol-outras.svg">
                </div>
                <div class="col-8 col-xl-5 order-xl-3">
                    <div class="ball" style="background-image: url('<?php bloginfo('template_url'); ?>/img/imagem_av4.png'); background-position: center center;">
                        <h4>Outras<br>Iniciativas</h4>
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p>Estamos, por meio de todo o Sistema Coca-Cola Brasil, empenhados no controle dessa pandemia. Nossos nove grupos fabricantes, Leão Alimentos e Bebidas e a Verde Campo, que atuam em diferentes regiões do país, também estão desenvolvendo ações locais, de acordo com as necessidades urgentes de suas comunidades.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row anchor oque" id="oque" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="balls-line"></div>
                    <h2>O que já fizemos</h2>
                </div>
            </div>
            <div class="row filtros">
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="saude" class=""><?php svg('saude','cvermelho'); ?><br>Auxílio <br>à saúde</a>
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
                <div class="col-12 col-xl-4 item item-comunidades">
                    <div class="box">
                        <span><?php svg('comunidades','cbranco'); ?></span>
                        <p>A Coca-Cola Brasil criou um fundo para apoiar comunidades com as quais tem relações há mais de 10 anos por meio do Instituto Coca-Cola Brasil, com o programa Coletivo Jovem, e de suas organizações parceiras.</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-comunidades">
                    <div class="box">
                        <span><?php svg('comunidades','cbranco'); ?></span>
                        <p>A Coca-Cola Brasil está contribuindo com um fundo que beneficia catadores de materiais recicláveis - autônomos e cooperativados - para que eles possam ficar em suas casas. Os aportes são feitos via Ancat e por meio da Campanha de Solidariedade aos Catadores do Brasil.</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('prevencao','cbranco'); ?></span>
                        <p>A Recofarma, fábrica de concentrados em Manaus, doou 50 toneladas de álcool etílico 70% para os estados do AM e RR.</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?></span>
                        <p>A Brasal Refrigerantes, engarrafadora no Distrito Federal, doou à Secretaria de Saúde do GDF equipamentos para as UTIs, como ventiladores mecânicos, além de insumos como máscaras, luvas e álcool em gel.</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('prevencao','cbranco'); ?></span>
                        <p>Em uma parceria com a Unica, União da Indústria de Cana-de-Açúcar, a Coca-Cola Femsa Brasil garantiu a logística da entrega de 250 mil litros de álcool 70 líquido para a rede pública de saúde de SP.</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('prevencao','cbranco'); ?></span>
                        <p>A Coca-Cola Femsa Brasil doou, até o momento: <br>6 mil máscaras de proteção <br>2 mil garrafas PET <br>2 mil tampas de garrafas PET</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-comunidades">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('comunidades','cbranco'); ?></span>
                        <p>A Solar Coca-Cola doou, até o momento: <br>350 mil garrafas PET com tampa <br>23 toneladas de cestas básicas <br>18,3 mil produtos Coca-Cola</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('prevencao','cbranco'); ?></span>
                        <p>A Coca-Cola Andina Brasil doou, até o momento: <br>32,4 mil litros de água mineral <br>5 mil garrafas PET <br>Transporte de 100 mil litros de álcool líquido</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-comunidades item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('comunidades','cbranco'); ?><?php svg('prevencao','cbranco'); ?></span>
                        <p>O Grupo Simões doou, até o momento: <br>1 milhão de unidades de água mineral <br>3,2 toneladas de cestas básicas <br>12,6 mil produtos (latas 350ml) <br>2,5 mil garrafas PET <br>63 bombonas</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-comunidades">
                    <div class="box">
                        <span><?php svg('comunidades','cbranco'); ?></span>
                        <p>A Verde Campo doou, até o momento: <br>1 mil unidades de produtos</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-comunidades">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('comunidades','cbranco'); ?></span>
                        <p>A Leão Alimentos e Bebidas doou, até o momento: <br>400 unidades de máscaras e aventais <br>14 mil produtos Coca-Cola/Leão</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-prevencao">
                    <div class="box">
                        <span><?php svg('prevencao','cbranco'); ?></span>
                        <p>A CVI Refrigerantes doou, até o momento: <br>6 mil garrafas PET com tampa</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <div class="col-12 col-xl-4 item item-saude item-prevencao">
                    <div class="box">
                        <span><?php svg('saude','cbranco'); ?><?php svg('prevencao','cbranco'); ?></span>
                        <p>A Refrescos Bandeirantes doou, até o momento: <br>2,5 mil litros de álcool em gel <br>60 mil unidades de pré-formas para envase de álcool em gel</p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 tc"><a class="mais">Veja mais ações +</a></div>
            </div>
        </div>
    </div>
    <div class="row anchor onde" id="onde" data-color="branco">
        <div class="container" id="mapa">
            <div class="scroll">
                <div class="regiao">
                    <img class="brasil" src="<?php bloginfo('template_url'); ?>/img/mapa.svg">
                    <?php $cnt = 0; $h = fopen(get_bloginfo('template_url').'/mapa/dados-atualizados3.csv', "r"); while ( ($data = fgetcsv($h, 1000, ";") ) !== FALSE): ?>
                    <?php $x = (floatval($data[2])) / 12; $y = (floatval($data[3])) / 12.32; ?>
                    <img class="pin" id="pin<?php echo $cnt; ?>" data-uf="<?php echo $data[0]; ?>" data-texto="<?php echo $data[6]; ?>" data-cidade="<?php echo $data[1]; ?>" data-nome="<?php echo $data[5]; ?>" data-cat="<?php echo $data[4]; ?>" data-id="<?php echo $cnt; ?>" data-x="<?php echo $x; ?>" data-y="<?php echo $y; ?>" src="<?php bloginfo('template_url'); ?>/img/pin-<?php echo $data[4]=='Coletivo Jovem' ? 'coletivo' : strtolower($data[4]); ?>.svg" style="left: <?php echo $x-18/12; ?>%; top: <?php echo $y-44/12.32; ?>%;">
                    <?php $cnt++; endwhile; ?>
                </div>
            </div>
            <div class="bloco">
                <div class="info topbar bvermelho">
                    <p><span>Fabricante</span> <a class="close-card">Fechar X</a></p>
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
                    <p></p>
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
<!--
                            <div class="item">
                                <div class="quote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dolor earum facilis, ex, autem iusto, ullam labore accusantium facere explicabo voluptatem porro, voluptatum consectetur animi? Perferendis a quod, omnis dolorem!</p>
                                    <p class="sign">Douis autem</p>
                                </div>
                            </div>
-->
                            <div class="item">
                                <div class="iframe">
                                    <iframe src="https://www.youtube.com/embed/5f2Q5fFPrFo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Solar Coca-Cola: doações para seis estados brasileiros</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iframe">
                                    <iframe src="https://www.youtube.com/embed/lAyHvB-u2O4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Washington Reis, prefeito de Duque de Caxias</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iframe">
                                    <iframe src="https://www.youtube.com/embed/SIAouArC3ZY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Aluizio Nascimento, do IACTI, em Roraima</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iframe">
                                    <iframe src="https://www.youtube.com/embed/fPJ0m36rY4k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Simplício Araújo, secretário de Indústria, Comércio e Energia do Maranhão</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iframe">
                                    <iframe src="https://www.youtube.com/embed/buPHyjr7iOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Wilson Miranda, governador do Amazonas</p>
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