<?php get_header(); ?>
<?php if($_POST && $_POST['senha']=='juntos'): ?>
<nav id="menu" data-color="branco">
    <div>
        <h1><a data-go="capa" class="go"><?php logo(); ?></a></h1>
        <ul class="menu">
            <a class="close-menu"><img width="30" src="<?php bloginfo('template_url'); ?>/img/close.svg"></a>
            <li><a data-go="capa" class="go active"><?php the_field('capa-titulo'); ?></a></li>
            <li><a data-go="como" class="go"><?php the_field('pilares-titulo'); ?></a></li>
            <li><a data-go="oque" class="go"><?php the_field('oque-titulo'); ?></a></li>
            <li><a data-go="onde" class="go"><?php the_field('onde-titulo'); ?></a></li>
            <li><a data-go="depos" class="go"><?php the_field('depo-titulo'); ?></a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row anchor capa" id="capa" data-color="branco">
        <div class="container">
            <a class="open-menu"><img width="40" src="<?php bloginfo('template_url'); ?>/img/bars.svg"></a>
            <h1><?php the_field('capa-titulo'); ?></h1>
            <?php the_field('capa-texto'); ?>
        </div>
    </div>
    <div class="row anchor logos" id="logos" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col lista">
                    <?php $logos = get_field('logos-lista'); foreach($logos as $l): ?>
                    <a><img src="<?php echo $l; ?>"></a>
                    <?php endforeach; ?>
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
                    <h2><?php the_field('pilares-titulo'); ?></h2>
                </div>
            </div>
            <?php $pilares = get_field('pilares-lista'); ?>
            <div class="row item saude align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball" style="background-image: url('<?php echo $pilares[0]['imagem']; ?>')">
                        <h4><?php echo $pilares[0]['titulo']; ?></h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php echo $pilares[0]['icone']; ?>">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p><?php echo $pilares[0]['texto']; ?></p>
                </div>
            </div>
            <div class="row item comunidades align-items-center">
                <div class="col-4 col-xl-2 order-xl-1">
                    <img class="symbol" src="<?php echo $pilares[1]['icone']; ?>">
                </div>
                <div class="col-8 col-xl-5 order-xl-3">
                    <div class="ball" style="background-image: url('<?php echo $pilares[1]['imagem']; ?>'">
                        <h4><?php echo $pilares[1]['titulo']; ?></h4>
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p><?php echo $pilares[1]['texto']; ?></p>
                </div>
            </div>
            <div class="row item prevencao align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball" style="background-image: url('<?php echo $pilares[2]['imagem']; ?>')">
                        <h4><?php echo $pilares[2]['titulo']; ?></h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php echo $pilares[2]['icone']; ?>">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p><?php echo $pilares[2]['texto']; ?></p>
                </div>
            </div>
            <div class="row item outras align-items-center">
                <div class="col-4 col-xl-2 order-xl-1">
                    <img class="symbol" src="<?php echo $pilares[3]['icone']; ?>">
                </div>
                <div class="col-8 col-xl-5 order-xl-3">
                    <div class="ball" style="background-image: url('<?php echo $pilares[3]['imagem']; ?>')">
                        <h4><?php echo $pilares[3]['titulo']; ?></h4>
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p><?php echo $pilares[3]['texto']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row anchor oque" id="oque" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="balls-line"></div>
                    <h2><?php the_field('oque-titulo'); ?></h2>
                </div>
            </div>
            <div class="row filtros">
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="saude" class=""><?php svg('saude','cvermelho'); ?><br><?php the_field('filtro-saude'); ?></a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="comunidades" class=""><?php svg('comunidades','cvermelho'); ?><br><?php the_field('filtro-comunidades'); ?></a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="prevencao" class=""><?php svg('prevencao','cvermelho'); ?><br><?php the_field('filtro-prevencao'); ?></a>
                </div>
                <div class="col-6 col-xl-3 p5">
                    <a data-cat="outras" class=""><?php svg('outras','cvermelho'); ?><br><?php the_field('filtro-outras'); ?></a>
                </div>
            </div>
            <div class="row itens">
                <?php if( have_rows('oque-postits') ): while( have_rows('oque-postits') ): the_row(); $cats = get_sub_field('categorias'); ?>
                <div class="col-12 col-xl-4 item <?php foreach($cats as $c){ echo 'item-'.$c['value'].' '; } ?>">
                    <div class="box">
                        <span><?php foreach($cats as $c){ svg($c['value'],'cbranco'); } ?></span>
                        <p><?php the_sub_field('texto'); ?></p>
                        <a class="share">Compartilhar <img src="<?php bloginfo('template_url'); ?>/img/share.svg"></a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="row">
                <div class="col-12 tc"><a class="mais"><?php the_field('oque-vermais'); ?></a></div>
            </div>
        </div>
    </div>
    <div class="row anchor onde" id="onde" data-color="branco">
        <div class="container-fluid" id="dados">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2><?php the_field('onde-titulo'); ?></h2>
                        </div>
                        <div class="col-12 col-xl-6">
                            <p><?php the_field('onde-texto'); ?></p>
                        </div>
                        <div class="col-12 col-xl-6">
                            <h3><?php the_field('onde-subtitulo'); ?></h3>
                        </div>
                        <div class="col-12">
                            <div class="tabela">
                                <img class="borda" src="<?php bloginfo('template_url'); ?>/img/dados-table-border.svg">
                                <?php $tabela = get_field('onde-tabela'); ?>
                                <table>
                                    <?php foreach($tabela as $tr): ?>
                                    <tr>
                                        <td><?php echo $tr['coluna-1']; ?></td>
                                        <td><?php echo $tr['coluna-2']; ?></td>
                                        <td><?php echo $tr['coluna-3']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row cadastro align-items-center">
                                <div class="col-12 col-xl-4">
                                    <h5><?php the_field('onde-cadastro-titulo'); ?></h5>
                                    <p><?php the_field('onde-cadastro-texto'); ?></p>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="<?php the_field('onde-botao-1-url'); ?>" target="_blank" class="botao"><?php the_field('onde-botao-1-texto'); ?></a>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="<?php the_field('onde-botao-2-url'); ?>" target="_blank" class="botao"><?php the_field('onde-botao-2-texto'); ?></a>
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
                    <?php get_template_part('partes/mapa', 'mapa'); ?>
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
                    <h2><?php the_field('depo-titulo'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p0">
                    <div class="carousel">
                        <div class="flow">
                            <?php $depoCnt=0; if( have_rows('depo-lista') ): while( have_rows('depo-lista') ): the_row(); $depoCnt++; ?>
                            <div class="item">
                                <?php if(get_sub_field('tipo')=='citacao'): ?>
                                <div class="quote">
                                    <p><?php the_sub_field('texto'); ?></p>
                                    <p class="sign"><?php the_sub_field('autor'); ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(get_sub_field('tipo')=='youtube'): ?>
                                <div class="iframe">
                                    <?php the_sub_field('video'); ?>
                                    <p><?php the_sub_field('legenda'); ?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="controls">
                            <ul>
                                <?php if($depoCnt): ?>
                                <li data-num="1" class="active"></li>
                                <?php for($i=2;$i<=$depoCnt;$i++): ?>
                                <li data-num="<?php echo $i; ?>" class=""></li>
                                <?php endfor; endif; ?>
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
            <h2><?php the_field('duvida-titulo'); ?></h2>
            <p><?php the_field('duvida-texto'); ?></p>
            <div class="row">
                <div class="col-12 col-xl-6"><p><a href="<?php the_field('termos-url'); ?>" target="_blank">Termos e condições</a></p></div>
                <div class="col-12 col-xl-6"><p><a href="<?php the_field('politica-url'); ?>" target="_blank">Política de privacidade</a></p></div>
            </div>
        </div>
    </div>
    <div class="row anchor logos" id="logos2" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col lista">
                    <?php foreach($logos as $l): ?>
                    <a><img src="<?php echo $l; ?>"></a>
                    <?php endforeach; ?>
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