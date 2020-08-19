$(function(){
  // When Click On About The Event Button
  $('nav li a').on('click',function(e){

    // If I Click On Search Link For Hos Or School Will Direct Me To There Pages
      if($(this).data('s') == undefined){
        e.preventDefault()
        if($(this).data('scroll') !== undefined){
            $('html,body').animate({
                scrollTop : $($(this).data('scroll')).offset().top - 80
            },1000);
        }
      }
  });

  // Animate Body To Top When Click On Scroll To Top Button
  $('.b-t-t').click(function(){
    $('html,body').animate({
      scrollTop : 0
  },1000);
  });
})

  

  var nav = document.getElementsByTagName('nav')[0]
  
  window.onscroll = function(){
    // Show Or Hide Scroll To Top Button
    if(document.documentElement.scrollTop >= 300){
      $('.b-t-t').addClass('showbtn');
    }
    else{
      $('.b-t-t').removeClass('showbtn');
    }


    // Fixed The Nav To The Top
    if(document.documentElement.scrollTop > 50){
        nav.classList.add('fixed-nav-to-top')
    }
    else{
        nav.classList.remove('fixed-nav-to-top')
    }

  };
  
  
