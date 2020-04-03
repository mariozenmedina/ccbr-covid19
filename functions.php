<?php
/*update_option( 'siteurl', 'http://blankthemaster.com.br' );
update_option( 'home', 'http://blankthemaster.com.br' );*/

//if(!is_admin() && $pagenow != 'wp-login.php' && !isset($_GET['ver'])){ die; }

//FILESIZES
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//CHANGE ACF CAPABILITY
function my_acf_capability( $string ) {
    return 'manage_options_acf';
}
add_filter('acf/settings/capability', 'my_acf_capability');

//MENUS
register_nav_menu( 'principal', 'Menu Principal' );
register_nav_menu( 'ms', 'Mídias Sociais' );

//THUMBNAILS
add_theme_support('post-thumbnails');
add_image_size('capa', 1600, 700, true);
add_image_size('capa-mobile', 900, 1200, true);

//REGISTRANDO POST TYPE
//include_once(get_stylesheet_directory() . '/functions/custom-post-type.php');

//REGISTRANDO TAXONOMY
//include_once(get_stylesheet_directory() . '/functions/custom-taxonomy.php');

//REMOVE MENUS
include_once(get_stylesheet_directory() . '/functions/remove-menus.php');

//PAGINATION
function pagination($prev='&laquo;',$next='&raquo;'){
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'base' => @add_query_arg('paged','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'prev_text' => __($prev),
		'next_text' => __($next),
		'type' => 'plain'
	);
	if($wp_rewrite->using_permalinks()){
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	}
	if(!empty($wp_query->query_vars['s'])){
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	}
	echo paginate_links( $pagination );
};

//ELEMENTOS
function svg($item, $class){
    switch ($item){
        case 'circ':
            echo '<svg class="'.$class.'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><g id="Camada_2" data-name="Camada 2"><g id="desktop"><circle cx="9" cy="9" r="9" style="fill:#000"/></g></g></svg>';
            break;
        case 'tria':
            echo '<svg class="'.$class.'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.07 17.03"><g id="Camada_2" data-name="Camada 2"><g id="desktop"><path d="M7.84,1,.26,14.1A2,2,0,0,0,2,17H17.11A2,2,0,0,0,18.8,14.1L11.23,1A2,2,0,0,0,7.84,1Z" style="fill:#000"/></g></g></svg>';
            break;
        case 'star':
            echo '<svg class="'.$class.'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.99 20"><g id="Camada_2" data-name="Camada 2"><g id="desktop"><path d="M10.84.22l2.94,6a.41.41,0,0,0,.3.21l6.58,1a.39.39,0,0,1,.21.66l-4.76,4.64A.4.4,0,0,0,16,13l1.12,6.56a.38.38,0,0,1-.56.4l-5.88-3.09a.4.4,0,0,0-.37,0L4.43,20a.38.38,0,0,1-.56-.4L5,13a.4.4,0,0,0-.11-.34L.12,8a.38.38,0,0,1,.21-.66l6.58-1a.38.38,0,0,0,.29-.21l3-6A.38.38,0,0,1,10.84.22Z" style="fill:#000"/></g></g></svg>';
            break;
        case 'remo':
            echo '<svg class="'.$class.'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.01 18.01"><g id="Camada_2" data-name="Camada 2"><g id="desktop"><rect x="5.55" y="-1.45" width="6.91" height="20.91" rx="2.08" transform="translate(-3.73 9) rotate(-45)" style="fill:#000"/><rect x="5.55" y="-1.45" width="6.91" height="20.91" rx="2.01" transform="translate(9 -3.73) rotate(45)" style="fill:#000"/></g></g></svg>';
            break;
    }
}