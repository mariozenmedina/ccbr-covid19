<!DOCTYPE html>
<html lang="pt" xml:lang="pt">
<title><?php bloginfo('name'); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- INÍCIO DOS METAS -->
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="url" content="<?php if( !is_singular('post') ){ bloginfo('url'); }else{ the_permalink(); }?>">
<meta name="language" content="Portugues">
<meta name="description" content="<?php if( !is_singular('post') ){ bloginfo('description'); }else{ echo wp_strip_all_tags( get_field('texto', get_the_ID()) ); } ?>">
<meta name="keywords" content="<?php if( !is_singular('post') ){ bloginfo('description'); }else{ echo wp_strip_all_tags( get_field('texto', get_the_ID()) ); } ?>">
<meta name="reply-to" content="mario@alpacaweb.com.br">
<meta name="copyright" content="">
<meta name="category" content="Internet">
<meta name="Robots" content="Index,Follow">
<meta name="author" content="Alpaca Web">
<meta property="fb:admins" content="mario.mazen"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
<meta property="og:description" content="<?php if( !is_singular('post') ){ bloginfo('description'); }else{ echo wp_strip_all_tags( get_field('texto', get_the_ID()) ); } ?>"/>
<meta property="og:url" content="<?php if( !is_singular('post') ){ bloginfo('url'); }else{ the_permalink(); }?>"/>
<meta property="og:image" content="<?php if( !is_singular('post') ){ bloginfo('template_url'); echo '/img/og-image.png'; }else{ the_field('imagem', get_the_ID()); } ?>"/>
<meta name="HandheldFriendly" content="True" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- FIM DOS METAS -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/icone.png" />
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/less.css" type="text/css" media="all">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts2.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("html, body").stop().animate({scrollTop:$('#<?php if( is_singular('post') ){ echo 'oque'; } ?>').offset().top}, 600, 'swing');
    });
</script>
<!-- FACEBOOK -->
<!-- FACEBOOK -->
<!-- GOOGLE - COLOCAR ANALYTICS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33275562-19"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-33275562-19');
</script>
<!-- GOOGLE -->
</head>
<body <?php body_class(); ?>">