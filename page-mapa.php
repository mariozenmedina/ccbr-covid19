<?php get_header(); ?>
<div class="container-fluid">
        <div class="container" id="mapa">
            <div class="scroll">
                <div class="regiao">
                    <img class="brasil" src="<?php bloginfo('template_url'); ?>/img/mapa.svg">
                </div>
            </div>
            <p class="cpreto point t22"></p>
            <script>
                $("#mapa .regiao").click(function(evt){
                    var x = ( evt.pageX - $(this).offset().left ) / $(this).width() * 100;
                    var y = ( evt.pageY - $(this).offset().top ) / $(this).height() * 100;
                    $("p.point").html('Pos. X: '+x.toFixed(3)+'<br>Pos. Y: '+y.toFixed(3));
                });
            </script>
        </div>
    </div>
</div>
<?php get_footer(); ?>