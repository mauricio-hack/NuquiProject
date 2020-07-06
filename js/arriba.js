$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('#bot').fadeIn('slow');
    } else {
        $('#bot').fadeOut('slow');
    }
});

$('#bot').click(function(event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 600);
});


$("#bot").click(function() {

    window.scrollTo({
        left: 0,
        top: 0,
        behavior: 'smooth'
    })
});



$('.menu-bar').on('click', function() {
    $('.contenido').toggleClass('abrir');

})