$(function () {    

    // Выделение цветом нужного пункта меню
    var colorClicked = '#FFC107';
    var color = 'yellow';    

    var changeColor = function (event) {
        for (var i = 0; i < $('.header ul li a').length; i++) {
            if ( $('.header ul li a').eq(i).text() !== $(event.target).text() ) {
                $('.header ul li a').css('color', '#FFFF99');
            } else $('.header ul li a').css('color', '#colorClicked');
        }
    }

    $(".header ul li a").click(changeColor);   


    // Прокручивание до нужного раздела 
    $('#header-mob li a, .header ul li a').click(function(event) {
           
        $(this).css('color', colorClicked);
        var fixed_offset = 55;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset}, 1,
            function(){
                $('.collapse').collapse('hide');
        });
        event.preventDefault();
    });

    // Маска ввода номера телефона
    $("#phone-field").mask("(380) 99-999-99-99");



});