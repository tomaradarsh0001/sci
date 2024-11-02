$(function(){
    $('.gfx-mega-fw').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});




$(".tab_home a").click(function(){
  $(".tab_home a").removeClass("active");
  $(this).addClass("active");
});











