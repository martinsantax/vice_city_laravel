


$(document).ready(function(){
  //---FAQs---//
	$('.acc h3').click(function(){
		$(this).next('.content').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content').slideUp();
		$(this).parent().siblings().removeClass('active');
	});


  //---Mobile NavBar---//
  $(".mobileIcon").on('click',function(e){
  	e.preventDefault();
  	$('.menuListMobile').slideToggle();
  });



//---Buttons---//
	$(".cartBuy").click(function(){
	  alert("Gracias por tu compra!");
	});


});
