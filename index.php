<?php get_header(); $homeID = 7; ?>
<?php if(!$_POST): ?>
<nav id="menu" data-color="branco">
    <div>
        <h1><a data-go="capa" class="go"><?php logo(); ?></a></h1>
        <ul class="menu">
            <a class="close-menu"><img width="30" src="<?php bloginfo('template_url'); ?>/img/close.svg"></a>
            <li><a data-go="capa" class="go active"><?php //the_field('capa-titulo', $homeID); ?>Apresentação</a></li>
            <li><a data-go="como" class="go"><?php the_field('pilares-titulo', $homeID); ?></a></li>
            <li><a data-go="oque" class="go"><?php the_field('oque-titulo', $homeID); ?></a></li>
            <li><a data-go="onde" class="go"><?php the_field('onde-titulo', $homeID); ?></a></li>
            <li><a data-go="depos" class="go"><?php the_field('depo-titulo', $homeID); ?></a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row anchor capa" id="capa" data-color="branco">
        <div class="container">
            <a class="open-menu"><img width="40" src="<?php bloginfo('template_url'); ?>/img/bars.svg"></a>
            <h1><?php the_field('capa-titulo', $homeID); ?></h1>
            <div class="subtitulo"><?php the_field('capa-subtitulo', $homeID); ?></div>
            <?php the_field('capa-texto', $homeID); ?>
        </div>
    </div>
    <div class="row anchor logos" id="logos" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col lista">
                    <?php $logos = get_field('logos-lista', $homeID); foreach($logos as $l): ?>
                    <a><img src="<?php echo $l; ?>"></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col banners">
                    <?php $banners = get_field('banners-lista', $homeID); $cnt=0; foreach($banners as $b): $cnt++; ?>
                    <input type="radio" name="banners" <?php echo $cnt==1 ? 'checked' : ''; ?> id="ban-inp-<?php echo $cnt; ?>" />

                    <a class="ban-img go" <?php if( substr( $b['url'], 0, 3 ) === 'go-' ){ $bUrl = explode('go-', $b['url']); echo 'data-go="'.$bUrl[1].'"'; } else{ echo 'href="'.$b['url'].'"'; } ?> target="<?php echo $b['target']; ?>">
                        <img class="mobile" src="<?php echo $b['imagem-mobile']; ?>">
                        <img class="desktop" src="<?php echo $b['imagem']; ?>">
                    </a>
                    
                    <?php endforeach; ?>
                    <div class="controle">
                        <?php $cnt=0; foreach($banners as $b): $cnt++; ?>
                        <label class="<?php echo $cnt==1 ? 'active' : ''; ?>" for="ban-inp-<?php echo $cnt; ?>"></label>
                        <?php endforeach; ?>
                    </div>
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
                    <h2><?php the_field('pilares-titulo', $homeID); ?></h2>
                </div>
            </div>
            <?php $pilares = get_field('pilares-lista', $homeID); ?>
            <div class="row item item-1 align-items-center">
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
            <div class="row item left item-2 align-items-center">
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
            <div class="row item item-3 align-items-center">
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
            <div class="row item left item-4 align-items-center">
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
            <div class="row item item-5 align-items-center">
                <div class="col-8 col-xl-5 order-xl-1">
                    <div class="ball" style="background-image: url('<?php echo $pilares[4]['imagem']; ?>')">
                        <h4><?php echo $pilares[4]['titulo']; ?></h4>
                    </div>
                </div>
                <div class="col-4 col-xl-2 order-xl-3">
                    <img class="symbol" src="<?php echo $pilares[4]['icone']; ?>">
                </div>
                <div class="col-12 col-xl-5 order-xl-2">
                    <p><?php echo $pilares[4]['texto']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row anchor oque" id="oque" data-color="preto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="balls-line"></div>
                    <h2><?php the_field('oque-titulo', $homeID); ?></h2>
                </div>
            </div>
            <div class="row filtros">
                <div class="col p5">
                    <a data-cat="prevencao" class=""><?php svg('prevencao','cvermelho'); ?><br><?php the_field('filtro-prevencao', $homeID); ?></a>
                </div>
                <div class="col p5">
                    <a data-cat="saude" class=""><?php svg('saude','cvermelho'); ?><br><?php the_field('filtro-saude', $homeID); ?></a>
                </div>
                <div class="col p5">
                    <a data-cat="alimentar" class=""><?php svg('alimentar','cvermelho'); ?><br><?php the_field('filtro-alimentar', $homeID); ?></a>
                </div>
                <div class="col p5">
                    <a data-cat="vacinacao" class=""><?php svg('vacinacao','cvermelho'); ?><br><?php the_field('filtro-vacinacao', $homeID); ?></a>
                </div>
                <div class="col p5">
                    <a data-cat="comerciante" class=""><?php svg('comerciante','cvermelho'); ?><br><?php the_field('filtro-comerciante', $homeID); ?></a>
                </div>
            </div>
            <div class="row itens">
                <?php
                    $pstID;
                    if(is_singular('post')): if( have_posts() ): while( have_posts() ): the_post();
                    $slug = get_post_field( 'post_name', get_post() );
                    $cats = get_field('categorias');
                    $pstID = get_the_ID();
                ?>
                <div class="col-12 col-xl-4 shared item <?php foreach($cats as $c){ echo 'item-'.$c['value'].' '; } ?>" id="<?php echo $slug; ?>">
                    <div class="box">
                        <span><?php foreach($cats as $c){ svg($c['value'],'cbranco'); } ?></span>
                        <?php if( get_field('amazonas') ): ?>
                        <img class="amazonas" src="<?php bloginfo('template_url'); ?>/img/amazonas.svg" alt="Selo Amazonas">
                        <?php endif; ?>
                        <p><?php the_field('texto'); ?></p>
                        <input id="pst-inp-<?php echo $slug; ?>" type="checkbox">
                        <div class="share">
                            <span>
                                <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank"><?php svg('whatsapp','ms'); ?></a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><?php svg('linkedin','ms'); ?></a>
                                <a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank"><?php svg('twitter','ms'); ?></a>
                                <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><?php svg('facebook','ms'); ?></a>
                            </span>
                            <label for="pst-inp-<?php echo $slug; ?>"><?php svg('share','cshare'); ?></label>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; endif; wp_reset_postdata(); ?>
                <?php
                    $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1, 'post__not_in' => array( $pstID ) ) );
                    if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
                    $slug = get_post_field( 'post_name', get_post() );
                    $cats = get_field('categorias');
                ?>
                <div class="col-12 col-xl-4 item <?php foreach($cats as $c){ echo 'item-'.$c['value'].' '; } ?>" id="<?php echo $slug; ?>">
                    <div class="box">
                        <span><?php foreach($cats as $c){ svg($c['value'],'cbranco'); } ?></span>
                        <?php if( get_field('amazonas') ): ?>
                        <img class="amazonas" src="<?php bloginfo('template_url'); ?>/img/amazonas.svg" alt="Selo Amazonas">
                        <?php endif; ?>
                        <p><?php the_field('texto'); ?></p>
                        <input id="pst-inp-<?php echo $slug; ?>" type="checkbox">
                        <div class="share">
                            <span>
                                <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank"><?php svg('whatsapp','ms'); ?></a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><?php svg('linkedin','ms'); ?></a>
                                <a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank"><?php svg('twitter','ms'); ?></a>
                                <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><?php svg('facebook','ms'); ?></a>
                            </span>
                            <label for="pst-inp-<?php echo $slug; ?>"><?php svg('share','cshare'); ?></label>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
            <div class="row">
                <div class="col-12 tc"><a class="mais"><?php the_field('oque-vermais', $homeID); ?></a></div>
            </div>
        </div>
    </div>
    <div class="row anchor onde" id="onde" data-color="branco">
        <div class="container-fluid" id="dados">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2><?php the_field('onde-titulo', $homeID); ?></h2>
                        </div>
                        <div class="col-12 col-xl-6">
                            <p><?php the_field('onde-texto', $homeID); ?></p>
                        </div>
                        <div class="col-12 col-xl-6">
                            <h3><?php the_field('onde-subtitulo', $homeID); ?></h3>
                        </div>
                        <div class="col-12">
                            <div class="tabela">
                                <img class="borda" src="<?php bloginfo('template_url'); ?>/img/dados-table-border.svg">
                                <?php $tabela = get_field('onde-tabela', $homeID); ?>
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
<!--
                        <div class="col-12">
                            <div class="row cadastro align-items-center">
                                <div class="col-12 col-xl-4">
                                    <h5><?php the_field('onde-cadastro-titulo', $homeID); ?></h5>
                                    <p><?php the_field('onde-cadastro-texto', $homeID); ?></p>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="<?php the_field('onde-botao-1-url', $homeID); ?>" target="_blank" class="botao"><?php the_field('onde-botao-1-texto', $homeID); ?></a>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="<?php the_field('onde-botao-2-url', $homeID); ?>" target="_blank" class="botao"><?php the_field('onde-botao-2-texto', $homeID); ?></a>
                                </div>
                            </div>
                        </div>
-->
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
                    <h2><?php the_field('depo-titulo', $homeID); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p0">
                    <div class="carousel">
                        <div class="flow">
                            <?php $depoCnt=0; if( have_rows('depo-lista', $homeID) ): while( have_rows('depo-lista', $homeID) ): the_row(); $depoCnt++; ?>
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
                                <?php if(get_sub_field('tipo')=='imagem'): ?>
                                <div class="imagem">
                                    <img src="<?php the_sub_field('imagem'); ?>">
                                </div>
                                <?php endif; ?>
                                <?php if( get_sub_field('saibamais') ): ?>
                                <div class="clear tc link">
                                    <a class="alterfont t14 uc ib bvermelho cbranco saibamais" style="padding: 10px 25px; margin-top: 10px;" target="_blank" href="<?php the_sub_field('saibamais'); ?>">Saiba Mais +</a>
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
            <h2><?php the_field('duvida-titulo', $homeID); ?></h2>
            <p><?php the_field('duvida-texto', $homeID); ?></p>
            <div class="row">
                <div class="col-12 col-xl-6"><p><a href="<?php the_field('termos-url', $homeID); ?>" target="_blank">Termos e condições</a></p></div>
                <div class="col-12 col-xl-6"><p><a href="<?php the_field('politica-url', $homeID); ?>" target="_blank">Política de privacidade</a></p></div>
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
<script></script>
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