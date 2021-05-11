                    <?php $query = new WP_Query( array( 'post_type'=>'pins', 'posts_per_page' => -1 ) ); ?>
					<?php $cnt=0; if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $cnt++; ?>
                    <img
                         class="pin"
                         id="pin<?php echo $cnt; ?>"
                         data-uf="<?php $uf = get_field('field_5e90fbb4dfeaa'); echo $uf->name; ?>"
                         data-texto="<?php the_field('texto'); ?>"
                         data-cidade="<?php the_field('cidade'); ?>"
                         <?php if(get_field('logo')): ?>
                         data-nome="<img src='<?php the_field('logo'); ?>'>"
                         <?php else: ?>
                         data-nome="<h3><?php the_title(); ?></h3>"
                         <?php endif; ?>
                         data-cat="<?php the_field('tipo'); ?>"
                         data-id="<?php echo $cnt; ?>"
                         data-x="<?php the_field('posx'); ?>"
                         data-y="<?php the_field('posy'); ?>"
                         src="<?php bloginfo('template_url'); ?>/img/pin-<?php echo get_field('tipo')=='Coletivo Jovem' ? 'coletivo' : strtolower(get_field('tipo')); ?>.svg"
                         style="left: <?php echo get_field('posx')-18/12; ?>%; top: <?php echo get_field('posy')-44/12.32; ?>%;">
                    <?php endwhile; endif; wp_reset_postdata(); ?>