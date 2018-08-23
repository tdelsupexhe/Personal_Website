// Transition de la page d'accueil vers les pages secondaires
$('.layer-text').hide();
$('.badge-list').hide();
$('.form-contact').hide();
$('.social-logo').hide();

$('.layer-text').slideDown(1000, function () {
    $('#social-logo-webdev').slideDown(500);
    $('.badge-list').toggle( 'slide');
    $('.form-contact').slideDown(1500, function () {
        $('#social-logo-contact').slideDown(500);
    });
});

//Bouton envoyer de la page contact
$('#submit')
    .on('mouseover', function(){
        $('#submit').html('<i class="far fa-envelope"></i>');
    })
    .on('mouseleave', function(){
        $('#submit').html('Envoyer');
    });


//Slick slider
$('.slick-slider').slick({
    'setting-name': 'setting-value'
});

$('.slick-prev').html('<i class="fas fa-chevron-left fa-2x"></i>');
$('.slick-next').html('<i class="fas fa-chevron-right fa-2x"></i>');