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
  
  // Toggle Criteria Button
  let togCrBtn = document.getElementById('toggle-cri');
  let searchMenu = document.getElementsByClassName('search')[0];
  let menuOpen = true;

  togCrBtn.onclick = () =>{
    menuOpen = !menuOpen

    if(!menuOpen){
      searchMenu.classList.add('hideCrMenu')
    }else{
      searchMenu.classList.remove('hideCrMenu')
    }
  }

  
  window.onscroll = function(){
  
    // Show Or Hide Scroll To Top Button
    if(window.scrollY >= 600){
      $('.b-t-t').addClass('showbtn');
    }
    else{
      $('.b-t-t').removeClass('showbtn');
    }
  
  
  };
  
