$(function(){
    $('.sub_slideDown > a').on("click",function(e){
        e.preventDefault();
        $(this).parent().toggleClass("clicked");
        $(this).siblings().stop().slideToggle(200);
        $(this).parent().toggleClass("minus");
    });
});