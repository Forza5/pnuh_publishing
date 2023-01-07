 //스크롤 헤더 이벤트
 $(window).on('scroll',function(){
    let offsetTop =  $('#container').offset().top;
    let winScroll = $(window).scrollTop();
    // console.log(winScroll);
    if(winScroll >= offsetTop){
        $('#header').addClass('fix');
    }
    else{
        $('#header').removeClass('fix');
    }
});

//스크롤 올리기 이벤트 및 헤더 드롭다운 및 풋터 영역
$(function(){

    $('.h_gnb > li').on('mouseenter',function(){
        $(this).children('.all_depth').show();
        $('.cont_bg').show();
    });

    $('.h_gnb > li').on('mouseleave',function(){
        $(this).children('.all_depth').hide();
        $('.cont_bg').hide();
    });
    
    $(window).on('scroll',function(){
        let scrollMove = $(window).scrollTop();
        if(scrollMove > 0){
            $('.sc_move').show();
        }
        else{
            $('.sc_move').hide();
        }
    });

    $('.sc_move').on('click',function(e){
        e.preventDefault();
        $('html,body').animate({'scrollTop':0},1000);
    });

    $('.network_title').on('click',function(e){
        e.preventDefault();
        $('.network').show();
        $('.wrap_bg').show();
        $(this).children().attr('class','xi-angle-down');
   });
   $('.closebtn').on('click',function(e){
       e.preventDefault();
       $('.network').hide();
       $('.wrap_bg').hide();
       $('.network_title').children().attr('class','xi-angle-up');
   });
});


