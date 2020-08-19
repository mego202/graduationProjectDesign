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
  });
  
  
  // Search Overlay
  var searchBtn = document.getElementsByClassName('search-btn')[0],
      searchOverlay = document.getElementsByClassName('search-overlay')[0],
      closeSearchOverlay = document.getElementsByClassName('close-search-overlay')[0];
  
  searchBtn.onclick = () =>{
    searchOverlay.classList.add('show-search-overlay');
};
  
  closeSearchOverlay.onclick = () =>{
    searchOverlay.classList.remove('show-search-overlay');
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