$(document).scroll(function(){
    var y = window.scrollY;
        //$('#contact-nav').html(y);

     // scroll nav testing

     var home = $('#one').height();
     var about = $('#two').height();
     var resume = $('#three').height();
     var contact = $('#four').height();


         if (y >= 0 && y <= home - (home/2)){
             $("#home").attr('class', 'highlight');
             $("#about").removeAttr('class');
             $("#resume").removeAttr('class');
             $("#contact").removeAttr('class');

             //mobile

             $("#home-burger").attr('class', 'nav-lit');
             $("#about-burger").removeAttr('class');
             $("#resume-burger").removeAttr('class');
             $("#contact-burger").removeAttr('class');

         }
         if (y > home - (about/2) && y <= (home+about) - (about/2)){
             $("#about").attr('class', 'highlight');
             $("#home").removeAttr('class');
             $("#resume").removeAttr('class');
             $("#contact").removeAttr('class');

             //mobile

             $("#about-burger").attr('class', 'nav-lit');
             $("#home-burger").removeAttr('class');
             $("#resume-burger").removeAttr('class');
             $("#contact-burger").removeAttr('class');
         }
         if (y > (home+about) - (about/2) && y <= (home+about+resume) - (resume/2)){
             $("#resume").attr('class', 'highlight');
             $("#about").removeAttr('class');
             $("#home").removeAttr('class');
             $("#contact").removeAttr('class');

             //mobile

             $("#resume-burger").attr('class', 'nav-lit');
             $("#about-burger").removeAttr('class');
             $("#home-burger").removeAttr('class');
             $("#contact-burger").removeAttr('class');
         }
         if (y > (home+about+resume) - (resume/2) && y <= home + about + resume + contact){
             $("#contact").attr('class', 'highlight');
             $("#about").removeAttr('class');
             $("#resume").removeAttr('class');
             $("#home").removeAttr('class');

             //mobile

             $("#contact-burger").attr('class', 'nav-lit');
             $("#about-burger").removeAttr('class');
             $("#resume-burger").removeAttr('class');
             $("#home-burger").removeAttr('class');
         }





    });


$('.burger').click(function(){
    $('.burger-dropdown').css('display','grid');



});



var ScrollPos = 0;
$(window).scroll(function(){


    $.doTimeout( 'scroll', 100, function(){
       $('.burger-dropdown').hide();
    });

     var CurrentScroll = $(this).scrollTop();
     /*
    if (CurrentScroll > ScrollPos) {
        //Scrolling Down
        $('#nav-tablet').hide();
    }else {
        //Scrolling Up
        $('#nav-tablet').slideDown(250);
    } */

        if (CurrentScroll == 0){
            $('#nav-tablet').css({'background-color': 'rgba(32, 32, 32, 0)'});
        }else{
            $('#nav-tablet').css({'background-color': "rgba(32, 32, 32, .9)"});
        }
    ScrollPos = CurrentScroll;




 });

$(document).mouseup(function(e)
{
    var container = $(".burger-dropdown");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.hide();
    }
});



