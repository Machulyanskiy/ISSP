$('.col-1').parents('thead').next().find('.column-1 input').prop( "checked", true );

// Closes the sidebar menu
$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

$(".sign a").click(function(){
    console.log($(this).parent().find("form").slideToggle("slow"));
});

$("#sign-up").submit(function(event){
    //console.log($(this).find("input[name='role']").val());
   event.preventDefault();
    $(this).find("input[name='role']").val($(this).find('select').val())
    $.ajax({
        url: '/main/sign_up',
        type: 'POST',
        data: $('#sign-up').serializeArray(),
        success: function(){
            console.log('Lets save');
        }
    });
});

$("#sign-in").submit(function(event){
    //console.log($(this).find("input[name='role']").val());
    event.preventDefault();
    $.ajax({
        url: '/main/sign_in',
        type: 'POST',
        data: $('#sign-in').serializeArray(),
        dataType: 'json',
        success: function(data){
            if(data !== null){
                //window.location.replace(data);
                console.log(data);
                //console.log(data[0].name);
                $('.user-name').text(data[0].name)
                $('.user').slideDown('slow');
                $('.sign').slideUp('slow');
                $('.sign_out').slideDown('slow');
                if(data[0].role == '3') $('.employer').slideDown('slow');
                else if(data[0].role == '2') $('.moder').slideDown('slow');
            }
        }
    });
});

$('.col-1').click(function(){
    $(this).parents('thead').next().find('.column-1 input').prop( "checked", true );
});
$('.col-2').click(function(){
    $(this).parents('thead').next().find('.column-2 input').prop( "checked", true );
});
$('.col-3').click(function(){
    $(this).parents('thead').next().find('.column-3 input').prop( "checked", true );
});
$('.col-4').click(function(){
    $(this).parents('thead').next().find('.column-4 input').prop( "checked", true );
});

/*$("#table-test").submit(function(event) {
    event.preventDefault();
    console.log($(this).find("input:checked").val());
});
*/

// Scrolls to the selected menu item on the page
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

$('.submit').click(function(){
    var count = 9;
    var results = [];
    var max = 27;
    var sum = 0;
   $('.block-1').find("input:checked").each(function() {
       sum += Number($(this).val());
   });
    results.push(Math.floor((sum/max)*5));

    count = 5;
    max = 15;
    sum = 0;

    $('.block-2').find("input:checked").each(function() {
        sum += Number($(this).val());
    });
    results.push(Math.floor((sum/max)*5));


    count = 4;
    max = 12;
    sum = 0;

    $('.block-3').find("input:checked").each(function() {
        sum += Number($(this).val());
    });
    results.push(Math.floor((sum/max)*5));

    count = 12;
    max = 36;
    sum = 0;

    $('.block-4').find("input:checked").each(function() {
        sum += Number($(this).val());
    });
    results.push(Math.round((sum/max)*5));

    count = 9;
    max = 27;
    sum = 0;

    $('.block-5').find("input:checked").each(function() {
        sum += Number($(this).val());
    });
    results.push(Math.floor((sum/max)*5));
    console.log(results);

    $.ajax({
        url: '/main/save_result',
        type: 'POST',
        data: results,
        success: function(){
            $('.submit').slideUp('slow');
            $('.results').slideDown('slow');
            /*if(data !== null){
                //window.location.replace(data);
                console.log(data);
                //console.log(data[0].name);
                $('.user-name').text(data[0].name)
                $('.user').slideDown('slow');
                $('.sign').slideUp('slow');
                $('.sign_out').slideDown('slow');
            }*/
        }
    });
});

$('.close').click(function(){
   $(this).parent().slideUp('slow');
});


$('.vac-sub').click(function(){
    $('.add-vac').slideDown('slow');
    $(this).slideUp('fast');
    $('.save-new-vac').slideDown('fast');
});

$('.save-new-vac').click(function() {
    $('#start-warning').slideUp('slow');
    $('.add-vac').slideUp('slow');
    $('.vac-list').slideDown('slow');
    $(this).slideUp('fast');
    $('.vac-sub').slideDown('fast');
});

$('#own-req-add').click(function(){
    $('.own-req-list').prepend('<div class="own-req"><input type="text" class="name-req form-control" placeholder="Вимога"><input type="text" class="lvl-req form-control" placeholder="рівень вимоги"></div>');
});

$('.vac-el').click(function() {
    $('.vac-req').slideToggle('slow');
});

$('.vac-find').click(function() {
    $('.vac-req').slideUp('slow');
    $('.vac-res').slideDown('slow');
});

$('#close-res').click(function() {
    $('.vac-res').slideUp('slow');
});

$('#fir-vac').click(function(){
    $('.graphic').hide();
    $('.graphic-f').show('slow');
});

$('#sec-vac').click(function(){
    $('.graphic').hide();
    $('.graphic-s').show('slow');
});

$('#thir-vac').click(function(){
    $('.graphic').hide();
    $('.graphic-t').show('slow');
});

$('.first-sphere').click(function(){
    $('.sphere-f').toggle('slow');
});