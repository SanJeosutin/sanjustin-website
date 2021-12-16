$(document).ready(function(){
    $('.animate').t();
    $('.animate').find('.t-caret').css({opacity:0});

    $('#gallery').fluidbox();

    $('#github').click(function(){
        window.open("https://github.com/SanJeosutin");
    });

    $('#linkedIn').click(function(){
        window.open("https://www.linkedin.com/in/justinsan/");
    });

    $('#email').click(function(){
        window.open("mailto:contact.sanjustin@gmail.com");
    });

    $('#instagram').click(function(){
        window.open("https://www.instagram.com/sanjeosutin/");
    });
});