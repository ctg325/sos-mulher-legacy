$(document).ready(function(){

$(".equipe").on("mouseover",function(){
	var img = $(this).find("img").attr("src").replace("1","2");
	$(this).find("img").attr("src",img);
}).on("mouseout",function(){
	var img = $(this).find("img").attr("src").replace("2","1");
	$(this).find("img").attr("src",img);
}).on("click",function(){
	var foto = $(this).find("img").clone();
	var nome = $(this).find("h4").clone();
	var cargo = $(this).find("p.cargo").clone();
	var info = $(this).find("p.info").clone();

	$("#popup_equipe .foto").empty();
	$("#popup_equipe .texto").empty();
	$(foto).appendTo($("#popup_equipe .foto"));
	$(nome).appendTo($("#popup_equipe .texto"));
	$(cargo).appendTo($("#popup_equipe .texto"));
	$(info).appendTo($("#popup_equipe .texto"));

	var img = $("#popup_equipe img").attr("src").replace("2","1");
	$("#popup_equipe img").attr("src",img);

	$("#overlay").addClass("show");
	$("#popup_equipe").addClass("show");

});

function fecharPopUp(){
	$("#popup_equipe").removeClass("show");
	$("#overlay").removeClass("show");
}


$("#overlay").on("click", function(){fecharPopUp();});
$("#popup_equipe .btn_fechar").on("click", function(){fecharPopUp();});
$(document).keyup(function(e) {
  if (e.keyCode === 27)
  	fecharPopUp();
});






function navigation(destination)
{
	$('html, body').animate({ scrollTop: destination}, 400);
}

$(".btn_menu").on("click",function(event){
  event.preventDefault();
	$(".btn_menu").removeClass("active");
	$(this).addClass("active");
	path = $(this).data("url");
	destination = $("#"+path).offset().top -103;
  $("#menu_mobile").removeClass("show");
	navigation(destination);
});

function getSections(scroll_y){

  $(".btn_menu").each(function(){
    element = $(this).data("url");
    position = $("#"+element).offset().top - 103;
    if(scroll_y >= position)
      $("#menu").find("[data-url='"+element+"']").addClass("active").siblings().removeClass("active");

  });
}

$(window).scroll(function(){


  scroll_y = $(this).scrollTop();
  if(scroll_y > 35 )
  {
    $("#topo").addClass("bg_color");
  }
  else
    $("#topo").removeClass("bg_color");

  getSections(scroll_y);

});


$("#btn_menu").on("click", function(){

  $("#menu_mobile").toggleClass("show");

});




$("#home").vide({
  mp4: "assets/video/video_home.mp4",/*
  webm: "assets/video/video_home.webm",
  ogv: "assets/video/video_home.ogv",*/
  poster: "assets/video/video_home.jpg"
});



function resizeBanner()
{

  winh = $(window).height();

  $("#home").css("height",winh);
  $("#home .over").css("height",winh);
  $("#home h1").css("marginTop",winh/2 - 128);
  $("#home .line").css("marginTop",winh/2 - 128);
  $("#home form").css("marginTop",winh/2 - 128);
}



$(window).resize(function(){resizeBanner();});
resizeBanner();

$(".mask_phone").mask('(99) 99999-9999');
$(".form_contato").validate();
$("a[rel^='prettyPhoto']").prettyPhoto();
});