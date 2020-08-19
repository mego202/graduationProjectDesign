$(function(){
    'use strict';
  
    // Set Slider height
    let windowH = $(window).innerHeight(),
        navH = $('nav').innerHeight();
  
    $('#slider').height(windowH - navH);
  
  
    $('.carousel').height(windowH - navH);
  
  
    $('.drop-link').on('click',function(e){
      $('.drop-link').removeClass('active');
      $(this).addClass('active');
    });

    // Animate Body To Top When Click On Scroll To Top Button
    $('.b-t-t').click(function(){
      $('html,body').animate({
        scrollTop : 0
    },1000);
    });

  });
  
  


  // Random Color For Slider Overlay
  var colorsArr = ['#FF9800' , '#00BCD4' , '#82CE37']
  setInterval(function(){
    var color = colorsArr[Math.floor(Math.random()*3)];
    document.getElementsByClassName('slider-overlay')[0].style.backgroundColor = color ;
    document.getElementsByClassName('slider-overlay')[0].style.borderRight  = '6px solid ' + color;
  },10000)

  
  window.onscroll = function(){
  
    // Show Or Hide Scroll To Top Button
    if(window.scrollY >= 600){
      $('.b-t-t').addClass('showbtn');
    }
    else{
      $('.b-t-t').removeClass('showbtn');
    }
  
    
  };
  
  // Particles
  new Particles(document.getElementById("particles"), {
        // size of the particles
    
        size: {
          min: 0,
          max: 2
        },
    
        // density of particles on the canvas
        density: 4000, 
    
        // speed of the particules
        speed: 3,
    
        // number of times per second the canvas is refreshed
        fps: 60,
    
        // color of the particles
        color: "#FFFFFF"
    });
    














