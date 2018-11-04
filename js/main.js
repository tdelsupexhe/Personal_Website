// Transition de la page d'accueil vers les pages secondaires
//on cache les textes, formulaire de contact, logos réseaux sociaux, liste de badges
$('.badge-list').hide();
/*$('.form-contact').hide();*/
$('.social-logo').hide();
$('.layer-text').hide()
    //on affiche les textes
    .fadeIn(1500, function () {
    //ensuite on affiche les logos des réseaux sociaux
    $('#social-logo-webdev').toggle( 'slide');
    //puis la liste des badges
    $('.badge-list').toggle( 'slide');
    //et le formulaire de contact
   /* $('.form-contact').slideDown(1500, function () {*/
        //après le formulaire on affiche les réseaux sociaux
        $('#social-logo-contact').toggle( 'slide');
    /*});*/
});

//Bouton envoyer de la page contact (switch entre le texte 'envoyer' et l'enveloppe)
/*$('#submit')
    .on('mouseleave', function(){
        $('#submit').html('<i class="far fa-envelope fa-2x"></i>');
    })
    .on('mouseover', function(){
        $('#submit').html('Envoyer');
    });*/


//Slick slider
if($('#slick-slider').hasClass('slick-slider')){
    $('.slick-slider').slick({
        adaptiveHeight: true
       /* autoplay: true*/
    });
}

//changer les flèches pour le slider
$('.slick-prev').html('<i class="fas fa-chevron-left fa-2x"></i>');
$('.slick-next').html('<i class="fas fa-chevron-right fa-2x"></i>');

//menu sidebar
$('.menu-hover').hide(500);

$('.side-menu').hover(function(){
    $('.side-menu-fond').animate({
        width: "24rem"
    }, 450);
    $('.menu-hover').show(500);
    $('.side-menu').removeClass('align-icons');
    /*$('.side-menu-fond').css('width','24rem');*/
}, function(){
    $('.side-menu-fond').animate({
        width: "7.6rem"
    }, 500);
    $('.menu-hover').hide(500);
    $('.side-menu').addClass('align-icons');
    // $('.side-menu-fond').css('width','7.6rem');
    });
