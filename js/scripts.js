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
            var thisc = $(this).attr('data-color');
            //var winh = $(window).height();

            if ( ( offtop - 300 ) <= scrl && ( offtop + thish - 300 ) > scrl ){
                $(".go").removeClass('active');
                $("nav").attr('data-color', thisc);
                $("nav a[data-go="+$(this).attr('id')+"]").addClass('active');
            }
        });
    });
    
    /******************* FILTROS CARDS ********************/
    var limite = 3;
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
    /******************* CAROUSEL ********************/
    var carT = $("#depos .carousel .item").length;
    var carA = 1;
    var carI = setInterval(function(){
        carA = carA >= carT ? 1 : carA+1;
        carM(carA);
    }, 4000);
    function carM(num){
        var itW = $("#depos .carousel .item").outerWidth();
        $("#depos .carousel .flow").css('left', '-'+(num-1)*itW+'px');
        $("#depos .controls ul li").removeClass('active');
        $("#depos .controls ul li:nth-child("+num+")").addClass('active');
    }
    $("#depos .carousel").click(function(){ clearInterval(carI); });
    $("#depos .carousel .controls ul li").click(function(){
        carA = $(this).attr('data-num');
        carM(carA); clearInterval(carI);
    })
    $("#depos .carousel .controls .right").click(function(){
        carA = carA >= carT ? 1 : carA+1;
        carM(carA); clearInterval(carI);
    });
    $("#depos .carousel .controls .left").click(function(){
        carA = carA <= 1 ? carT : carA-1;
        carM(carA); clearInterval(carI);
    });
    
    
    
    
});