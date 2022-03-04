var $grid = jQuery(".events");
jQuery(".filter-button-group").on("click", "button", function () {
    jQuery(".filter-button-group button").removeClass("active-2");
    jQuery(".paginacion a").removeClass("active");
    jQuery(this).addClass("active-2");
});

$(".filter-button-group button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.grid-item').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".grid-item").not('.'+value).hide('3000');
            $('.grid-item').filter('.'+value).show('3000');
            
        }
    });

$(".paginacion a").click(function(e){
    e.preventDefault();
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.grid-item').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".grid-item").not('.'+value).hide('3000');
            $('.grid-item').filter('.'+value).show('3000');
            
        }
    });

jQuery(".paginacion a").click(function(e){
    jQuery(".paginacion a").removeClass("active");
    jQuery(".filter-button-group button").removeClass("active-2");
    jQuery(this).addClass("active");
});

$(".close-grid").click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $("#b-"+id).addClass("d-none");
    $("#o-"+id).removeClass("d-none");

});
$(".view-more").click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $("#b-"+id).removeClass("d-none");
    $("#o-"+id).addClass("d-none");

});

$(".contacto_link").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#contacto").offset().top
    }, 2000);
});
$(".form-b").click(function(e) {
    e.preventDefault();
    $("#form").removeClass("d-none");
    $('html, body').animate({
        scrollTop: $("#form").offset().top
    }, 2000);
});
$("#f-w").click(function(e) {
    e.preventDefault();
    $(".webinar-group").removeClass("d-none");
    $(".cursos-group").addClass("d-none");
    $(".certificaciones-group").addClass("d-none");
});
$("#f-c").click(function(e) {
    e.preventDefault();
    $(".webinar-group").addClass("d-none");
    $(".cursos-group").removeClass("d-none");
    $(".certificaciones-group").addClass("d-none");
});
$("#f-cer").click(function(e) {
    e.preventDefault();
    $(".webinar-group").addClass("d-none");
    $(".cursos-group").addClass("d-none");
    $(".certificaciones-group").removeClass("d-none");
});
$(".b-f").click(function(e) {
    e.preventDefault();
    $(".webinar-group").addClass("d-none");
    $(".certificaciones-group").addClass("d-none");
    $(".cursos-group").addClass("d-none");
});