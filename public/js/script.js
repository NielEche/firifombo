$(document).ready(function() {
    var numHoj = 0;
    if ($(window).width() < 768) {
        numHojTot = 9;
    } else {
        numHojTot = 5;
    }

    $(".-box-prev").click(function(event) {
        if(numHoj == numHojTot){
            $(".cond-book").css({padding: '0 0 0 var(--pagW-borPag)'});
            $(".cond-book").css({width: 'calc(var(--pagW-borPag)*2)'});
            $(".-sombra").css({width: 'calc(var(--pagW-borPag)*2)'});
            $(".-box-next").css('display', 'initial');
            $('.-hoj' + (numHoj)).next().css({'z-index': '99'});
            $('.-hoj' + (numHoj)).css({'transform': 'rotateY(0deg)', 'z-index': '99'});
        }

        if(numHoj < numHojTot){
            $(".-cond-hoja").css('z-index', '0');
            $('.-hoj' + (numHoj)).next().css({'z-index': '99'});
            $('.-hoj' + (numHoj)).css({'transform': 'rotateY(0deg)', 'z-index': '99'});
        }

        numHoj--;

        if(numHoj <= 0){
            $(".cond-book").css({padding: '0 0 0 0px'});
            $(".cond-book").css({width: 'var(--pagW-borPag)'});
            $(".-sombra").css({width: 'var(--pagW-borPag)'});
            $(".-box-prev").css('display', 'none');
        }
    });

    $(".-box-next").click(function(event) {
        if(numHoj == 0){
            $(".cond-book").css({padding: '0 0 0 var(--pagW-borPag)'});
            $(".cond-book").css({width: 'calc(var(--pagW-borPag)*2)'});
            $(".-sombra").css({width: 'calc(var(--pagW-borPag)*1)'});
            $(".-box-prev").css('display', 'initial');
            $('.-hoj' + (numHoj + 1)).css('transform', 'rotateY(-180deg)');
        }

        if(numHoj > 0 && numHoj < numHojTot){
            $(".-cond-hoja").css('z-index', '0');
            $('.-hoj' + (numHoj + 1)).css({'transform': 'rotateY(-180deg)', 'z-index': '99'});
        }

        numHoj++;

        if(numHoj >= numHojTot){
            $(".cond-book").css({padding: '0 0 0 calc(var(--pagW-borPag)*1)'});
            $(".cond-book").css({width: 'var(--pagW-borPag)'});
            $(".-sombra").css({width: 'var(--pagW-borPag)'});
            $(".-box-next").css('display', 'none');
        }
    });

    $(".-box-prev, .-box-next").click(function(event) {
        $(".-box-prev, .-box-next").css('pointer-events', 'none');
        setTimeout(function(){$(".-box-prev, .-box-next").css('pointer-events', 'initial');}, 800);
    });
});