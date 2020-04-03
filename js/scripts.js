/*SCRIPTS HERE*/
$(document).ready(function(e) {
	/******************* MENU ********************/
    $(".open-menu, .close-menu").click(function(){
       $("#menu ul.menu").slideToggle();
    });
    $(".go").click(function(){
        /*$(".go").removeClass('active');
        $(this).addClass('active');*/
        var dataGo = $(this).attr('data-go');
        $("html, body").stop().animate({scrollTop:$('#'+dataGo).offset().top}, 600, 'swing');
        $("#menu ul.menu").slideUp();
    });
    
    $(window).scroll(function(){
        var scrl = $(this).scrollTop();
        $(".anchor").each(function(){
            var offtop = $(this).offset().top;
            var thish = $(this).height();
            //var winh = $(window).height();

            if ( ( offtop - 100 ) <= scrl && ( offtop + thish - 100 ) > scrl ){
                $(".go").removeClass('active');
                $("nav a[data-go="+$(this).attr('id')+"]").addClass('active');
            }
        });
    });
    
    /******************* FILTROS CARDS ********************/
    var limite = 12;
    var filtros = [];
    $(".filtros a").click(function(){
        var cat = $(this).attr('data-cat');
        var ind = filtros.indexOf(cat);
        if(ind>-1){
            filtros.splice(ind, 1);
        }else{
            filtros.push(cat);
        }
        $(this).toggleClass('active');
        filtrar();
    });
    function filtrar(){
        $("#oque .itens .item").hide();
        if(filtros.length==0 || filtros.length==4){
            $("#oque .itens .item").slice(0,limite).show();
            if($("#oque .itens .item").length <= limite){ $("#oque a.mais").hide(); }else{ $("#oque a.mais").show(); }
        }else{
            var selector = '';
            for(var i=0; i<filtros.length; i++){
                selector += '#oque .itens .item-'+filtros[i];
                selector += i==filtros.length-1 ? '' : ',';
            }
            $(selector).slice(0,limite).show();
            if($(selector).length <= limite){ $("#oque a.mais").hide(); }else{ $("#oque a.mais").show(); }
        }
    }
});