

$(document).ready(main);

var contador = 1 ;

function main(){
    $('.boton-menu').click(function(){
        if(contador == 1){
            $(".menu").animate({
                left: "0"
            });
            contador == 0;
        } else {
            $(".menu").animate({
                left: "-100%"
            });
        }
    });
}