	$(".dropdown-trigger").dropdown();
	
  	$( document ).ready(function(){
  		 $(".button-collapse").sideNav();
  	});

  	$(document).ready(function(){
    $('.parallax').parallax();
    });

  	 $(document).ready(function(){
      $('.slider').slider();
    });

       $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
    
    $('#link1').on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({scrollTop: $('#section1').offset().top }, 1000);
});
  
      $('#link2').on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({scrollTop: $('#section1').offset().top }, 1000);
});