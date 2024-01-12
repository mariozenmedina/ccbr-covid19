<?php get_header(); ?>
<input type="checkbox" id="menu-ipt">
<nav>
    <div style="max-width: 210px;">
        <label for="menu-ipt" id="close-menu"><img src="<?php tu(); ?>/img/close-menu.svg"></label>
        <img src="<?php tu(); ?>/img/logo.png" id="logo">
        <ul>
            <?php for($i=0;$i<15;$i++): ?>
            <li><a href="<?php url(); ?>">botão <?php echo $i+1; ?> lorem ipsun</a></li>
            <?php endfor; ?>
        </ul>
        <img src="<?php tu(); ?>/img/example.gif">
        <img src="<?php tu(); ?>/img/example.gif">
        <img src="<?php tu(); ?>/img/example.gif">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsa fugiat, autem repellat maiores deserunt provident necessitatibus, minima incidunt quia ipsam quod deleniti harum! Labore veritatis nam, recusandae id maxime.</p>
        <figure>
            <img src="<?php tu(); ?>/img/example.gif">
            <figcaption><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis esse voluptatem soluta enim architecto et veniam vero.</p></figcaption>
        </figure>
        <ul>
            <?php for($i=0;$i<5;$i++): ?>
            <li><a href="<?php url(); ?>">Outro botão <?php echo $i+1; ?> lorem</a></li>
            <?php endfor; ?>
        </ul>
    </div>
</nav>
<div class="wrap">
    <label for="menu-ipt" id="open-menu"><img src="<?php tu(); ?>/img/open-menu.svg"></label>
    <div class="topo">
        <h1>repletodepedro</h1>
        <p>portifa completão 2.0 turbo tsi titan blindado</p>
    </div>
    <div class="posts">
        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
        <div class="post">
            <p><?php the_title(); ?></p>
            <?php $gal = get_field('galeria'); if( is_array( $gal ) && !empty( $gal ) ): ?>
                <?php if( count( $gal ) > 1 ): ?>
                    <div class="slicker">
                        <?php foreach( $gal as $g ): ?>
                        <div class="item">
                            <?php if( preg_match('/\.(mp4)$/', $g) ): ?>
                                <video width="100%" controls>
                                    <source src="<?php echo $g; ?>" type="video/mp4">
                                </video>
                            <?php else: ?>  
                                <img src="<?php echo $g; ?>">
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?> 
                    <img src="<?php echo $gal[0]; ?>">
                <?php endif; ?> 
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <nav class="pagination">
        <?php pagination('&laquo; Anterior', 'Próxima &raquo;'); ?>
    </nav>
</div>
<?php get_footer(); ?>