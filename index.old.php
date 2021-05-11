<?php get_header(); ?>
<?php if($_POST && $_POST['senha']=='juntos'): ?>
<nav id="menu" data-color="branco">
    <div>
        <h1><a data-go="capa" class="go"><?php logo(); ?></a></h1>
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
        <div class="container-fluid" id="dados">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Onde<br>estamos<br>atuando</h2>
                        </div>
                        <div class="col-12 col-xl-6">
                            <p>Nós, da Coca-Cola Brasil e do Instituto Coca-Cola Brasil, criamos o fundo “Estamos nessa juntos”, para apoiar os mais vulneráveis. Contamos com a ajuda e a expertise dos nossos parceiros nas comunidades e na gestão de resíduos para alocar os investimentos da melhor forma possível. Além disso, os nossos fabricantes estão trabalhando em ações locais por todo o Brasil.</p>
                        </div>
                        <div class="col-12 col-xl-6">
                            <h3>O Sistema Coca-Cola Brasil e seus parceiros estão unidos com o objetivo de somar esforços e construir uma grande rede de apoio para ajudar as pessoas que mais precisam no nosso país.</h3>
                        </div>
                        <div class="col-12">
                            <div class="tabela">
                                <img class="borda" src="<?php bloginfo('template_url'); ?>/img/dados-table-border.svg">
                                <table>
                                    <tr>
                                        <td><span>Coletivo Jovem</span></td>
                                        <td><span>Cooperativas</span></td>
                                        <td><span>Catadores</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>71</span><p>bases</p></td>
                                        <td><span>229</span><p>apoiadas</p></td>
                                        <td><span>11 <small>mil</small></span><p>autônomos impactados, sendo:</p></td>
                                    </tr>
                                    <tr>
                                        <td><span>14</span><p>estados + DF</p></td>
                                        <td><span>21</span><p>estados</p></td>
                                        <td><span>6 <small>mil</small></span><p>do Reciclar pelo Brasil</p></td>
                                    </tr>
                                    <tr>
                                        <td><span>2,8 <small>mi</small></span><p>de pessoas impactadas</p></td>
                                        <td><span>145</span><p>municípios</p></td>
                                        <td><span>5 <small>mil</small></span><p>potencialmente beneficiados pelo fundo</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row cadastro align-items-center">
                                <div class="col-12 col-xl-4">
                                    <h5>Quer ser beneficiado pelo fundo?</h5>
                                    <p>Clique ao lado para se cadastrar</p>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSd1cllTE9-CfQwkGD_T64ftTf5OwyYC3UqOW2dM_S5T0XGPcg/viewform" target="_blank" class="botao">&gt; Sou cooperativa</a>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdcbPbVmMn4Do_jjBja6UINddROQ_HUGyYFYUZdaAiUvGApcw/viewform?usp=sf_link" target="_blank" class="botao">&gt; Sou catador autônomo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="mapa">
            <div class="scroll">
                <div class="regiao">
                    <img class="brasil" src="<?php bloginfo('template_url'); ?>/img/mapa.svg">
                    <?php $cnt = 0; $h = fopen(get_bloginfo('template_url').'/mapa/dados-por-estados.csv', "r"); while ( ($data = fgetcsv($h, 1000, ";") ) !== FALSE): ?>
                    <?php $x = (floatval($data[2])) / 12; $y = (floatval($data[3])) / 12.32; ?>
                    <img class="pin" id="pin<?php echo $cnt; ?>" data-uf="<?php echo $data[0]; ?>" data-texto="<?php echo $data[6]; ?>" data-cidade="<?php echo $data[1]; ?>" data-nome="<?php echo $data[5]; ?>" data-cat="<?php echo $data[4]; ?>" data-id="<?php echo $cnt; ?>" data-x="<?php echo $x; ?>" data-y="<?php echo $y; ?>" src="<?php bloginfo('template_url'); ?>/img/pin-<?php echo $data[4]=='Coletivo Jovem' ? 'coletivo' : strtolower($data[4]); ?>.svg" style="left: <?php echo $x-18/12; ?>%; top: <?php echo $y-44/12.32; ?>%;">
                    <?php $cnt++; endwhile; ?>
                    <ul class="legenda">
                        <li><img src="<?php bloginfo('template_url'); ?>/img/pin-coletivo.svg"><span>Coletivo Jovem</span></li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/pin-cooperativa.svg"><span>Cooperativas</span></li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/pin-fabricante.svg"><span>Fabricantes</span></li>
                    </ul>
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
                    <h2>Depoimentos e entregas</h2>
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
                                <li data-num="5" class=""></li>
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
            <p>Entre em contato com o nosso centro de relacionamento pelo whatsapp (21)4002-2121. <small class="t12">Ou, se preferir, ligue para 0800-0212121.</small> <span>Estamos nessa juntos!</span></p>
            <div class="row">
                <div class="col-12 col-xl-6"><p><a href="https://www.cocacolabrasil.com.br/sobre-a-coca-cola-brasil/termos-e-condicoes" target="_blank">Termos e condições</a></p></div>
                <div class="col-12 col-xl-6"><p><a href="https://www.cocacolabrasil.com.br/sobre-a-coca-cola-brasil/politica-de-privacidade" target="_blank">Política de privacidade</a></p></div>
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
<?php else: ?>
<div class="container-fluid" style="min-height: 100vh;">
    <div class="row bvermelho align-items-center" style="min-height: 100vh;">
        <div class="container">
            <div class="wrap" style="max-width: 320px; margin: auto;">
                <h2 class="alterfont uc tc cbranco t48">Estamos<br>nessa<br>juntos</h2>
                <br><br><br>
                <form method="post" class="m0 p0" style="width: 100%;">
                    <input type="password" name="senha" placeholder="Digite a senha" class="m0 p0 t14" style="border: none; outline: none; height: 42px; width: 210px; float: left; padding-left: 5px;">
                    <button class="alterfont cbranco t13 uc transition" style="border: solid 1px #FFF; padding: 10px 0px 10px 15px; width: 110px; text-align: left;" type="submit">Acessar <img width="10" src="<?php bloginfo('template_url'); ?>/img/seta-alt.svg" style="transform: rotate(180deg);"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>form button img{ margin-left: 5px; } form button:hover img{ margin-left: 10px; } </style>
<?php endif; ?>
<?php get_footer(); ?>