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
    var limite = $(window).width() >= 1200 ? 18 : 6;
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
        $("#oque .itens .item").removeClass('ativo').hide();
        if(filtros.length==0 || filtros.length==4){
            $("#oque .itens .item").slice(0,limite).show();
            $("#oque .itens .item").addClass('ativo');
            if($("#oque .itens .item").length <= limite){ $("#oque a.mais").hide(); }else{ $("#oque a.mais").show(); }
        }else{
            var selector = '';
            for(var i=0; i<filtros.length; i++){
                selector += '#oque .itens .item-'+filtros[i];
                selector += i==filtros.length-1 ? '' : ',';
            }
            $(selector).addClass('ativo');
            $(selector).slice(0,limite).show();
            if($(selector).length <= limite){ $("#oque a.mais").hide(); }else{ $("#oque a.mais").show(); }
        }
    }
    $("#oque a.mais").click(function(){ limite+=6; filtrar(); });
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
    $("#depos .carousel").hover(function(){ clearInterval(carI); });
//    $('#depos .carousel *').on('click', '#depos .carousel', function(){
//        clearInterval(carI);
//    });
    /******************* MAPA ********************/
    var bUF = ['Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Distrito Federal', 'Espírito Santo', 'Goiás', 'Maranhão', 'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'];
    var pA; var pIdx = 1; var pTot = $("#mapa .pin").length;
    /*$("#mapa .regiao").click(function(evt){
        var x = ( evt.pageX - $(this).offset().left ) / $(this).width() * 100;
        var y = ( evt.pageY - $(this).offset().top ) / $(this).height() * 100;
        var pD = 99999;
        $("#mapa .pin").each(function(){
            var pX = $(this).attr('data-x');
            var pY = $(this).attr('data-y');
            var dist = Math.sqrt( Math.pow((x-pX), 2) + Math.pow((y-pY), 2) );
            if(dist < pD){
                pD = dist; pA = $(this).attr('data-id');
            }
        });
        mapCard(pA);
    });*/
    $("#mapa .pin").click(function(){
        pA = $(this).attr('data-id');
        mapCard(pA);
    });
    $("#mapa .chev-uf.right").click(function(){
        var i; pIdx = 1;
        for(i=0; i<bUF.length; i++){
            if( $("#mapa .pin#pin"+pA).attr('data-uf').toLowerCase() == bUF[i].toLowerCase() ){ break; }
        }
        i = i==bUF.length-1 ? 0 : i+1;
        pA = $("#mapa .pin[data-uf='"+bUF[i].toUpperCase()+"']").eq(pIdx).attr('data-id');
        while(pA == undefined){
            i = i==bUF.length-1 ? 0 : i+1;
            pA = $("#mapa .pin[data-uf='"+bUF[i].toUpperCase()+"']").eq(pIdx).attr('data-id');
        }
        mapCard( pA );
    });
    $("#mapa .chev-uf.left").click(function(){
        var i; pIdx = 1;
        for(i=0; i<bUF.length; i++){
            if( $("#mapa .pin#pin"+pA).attr('data-uf').toLowerCase() == bUF[i].toLowerCase() ){ break; }
        }
        i = i==0 ? bUF.length-1 : i-1;
        pA = $("#mapa .pin[data-uf='"+bUF[i].toUpperCase()+"']").eq(pIdx).attr('data-id');
        while(pA == undefined){
            i = i==0 ? bUF.length-1 : i-1;
            pA = $("#mapa .pin[data-uf='"+bUF[i].toUpperCase()+"']").eq(pIdx).attr('data-id');
        }
        mapCard( pA );
    });
    $("#mapa .chev-bloco.right").click(function(){
        pA = pA >= pTot ? 1 : pA*1+1;
        mapCard(pA);
    });
    $("#mapa .chev-bloco.left").click(function(){
        pA = pA <= 1 ? pTot : pA*1-1;
        mapCard(pA);
    });
    function mapCard(pP){
        $("#mapa .bloco .topbar p span").html($("#mapa .pin#pin"+pP).attr('data-cat'));
        $("#mapa .bloco p.uf span").html($("#mapa .pin#pin"+pP).attr('data-uf'));
        $("#mapa .bloco p.cidade").html($("#mapa .pin#pin"+pP).attr('data-cidade'));
        $("#mapa .bloco .ator").html($("#mapa .pin#pin"+pP).attr('data-nome'));
        $("#mapa .bloco .texto p").html($("#mapa .pin#pin"+pP).attr('data-texto'));
        $("#mapa .bloco").show();
    }    
    $("#mapa .close-card").click(function(){ $("#mapa .bloco").hide(); });
});