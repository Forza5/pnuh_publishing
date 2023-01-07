//rb_slide 영역
$(document).ready(function(){
    $('.slide_menu').bxSlider({
        auto: true,
        autoControls: true,
        stopAutoOnClick: true,
        pager: true,
        slideWidth: 690
    });
});

$(function(){

    $('.main_move_slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        arrows: true,
        dots: true,
        loop: true,
    });

    let btnValue;

    $('.btn').on('click',function(){
        btnValue = $(this).attr("data-name");
        console.log(btnValue);
        if(btnValue == "play"){

            $(this).children().attr('class','xi-pause');
            $(this).attr("data-name","stop");
            $(".main_move_slider").slick("slickPause");
        }
        else if(btnValue == "stop"){

            $(this).children().attr('class','xi-play');
            $(this).attr("data-name","play");
            $(".main_move_slider").slick("slickPlay");
        }
    });
});

//객체 설정
let healthList = [
    {
        imgClass: "img/c4_thumbnail01.png",
        snsName: "Youtube",
        hmain_text: "자도 자도 피곤할 때?😴 수면무호흡증 - 이비인후과..."
    },
    {
        imgClass: "img/c4_thumbnail02.png",
        snsName: "Youtube",
        hmain_text: "부산대학교병원 CT 검사 안내"
    },
    {
        imgClass: "img/c4_thumbnail03.png",
        snsName: "Youtube",
        hmain_text: "불금엔 치맥?멈춰! 🖐 바람만 스쳐도 아픈 통풍!?..."
    },
    {
        imgClass: "img/c4_thumbnail04.png",
        snsName: "Youtube",
        hmain_text: "[편안한 호흡교실] 호흡이 힘든 환자, 어떻게 먹어야 ..."
    },
    {
        imgClass: "img/c4_thumbnail05.png",
        snsName: "Shorts",
        hmain_text: "✨멋진 성과✨ NEJM 국내 유일 공동저자"
    },
    {
        imgClass: "img/c4_thumbnail06.png",
        snsName: "Youtube",
        hmain_text: "[편안한 호흡교실] 기흉 - 흉부외과 안효영 교수"
    },
    {
        imgClass: "img/c4_thumbnail07.png",
        snsName: "instagram",
        hmain_text: "음식물 삼키기가 고통스럽다면?<br>식도암 Q&A"
    },
    {
        imgClass: "img/c4_thumbnail08.png",
        snsName: "블로그-의료정보",
        hmain_text: "평생 관리만이 답이다! 림프부종 예방법"
    },
    {
        imgClass: "img/c4_thumbnail09.png",
        snsName: "Youtube",
        hmain_text: "러시아에서도? 외국인환자 맞춤형 비대면진료!"
    },
    {
        imgClass: "img/c4_thumbnail10.png",
        snsName: "Shorts",
        hmain_text: "💕흉터 최소화, 간 기증자 복강경"
    },
    {
        imgClass: "img/c4_thumbnail11.png",
        snsName: "Youtube",
        hmain_text: "#유퀴즈 그 선생님! 재미있는 금융 교육 💲 👨‍💼"
    },
    {
        imgClass: "img/c4_thumbnail12.png",
        snsName: "Youtube",
        hmain_text: "볼 빨간 술친구의 모든 것"
    },
    {
        imgClass: "img/c4_thumbnail13.png",
        snsName: "병원보",
        hmain_text: "2022년 생명사랑 겨울호"
    },
    {
        imgClass: "img/c4_thumbnail14.png",
        snsName: "블로그-의료정보",
        hmain_text: "혹시 나도 우울증 일까? 우울증 극복하기"
    },
    {
        imgClass: "img/c4_thumbnail15.png",
        snsName: "Youtube",
        hmain_text: "🚌이동형 병원 진료 시스템?<br>그게 뭐에요?!"
    },
    {
        imgClass: "img/c4_thumbnail16.png",
        snsName: "Youtube",
        hmain_text: "제 7회 하모니카 콘서트"
    }
];

let createTag = "";

    healthList.forEach(function(item,index){
        createTag +=
        `<div class="health_box">
                <a class="health_menu" href="#">
                    <div class="health_img"><img src="${item.imgClass}"></div>
                    <div class="health_text">
                        <p>${item.snsName}</p>
                        <h3>${item.hmain_text}</h3>
                    </div>
                </a>    
        </div>`
    });
    document.querySelector(".health_info").innerHTML = createTag;

//더보기 버튼
let mClick = 8;
$(function(){
    $('.more_click').on('click',function(e){
        e.preventDefault();
        $('.health_box').stop().slideDown(200);
        
        mClick = mClick + 8;
        if(mClick >= $('.health_box').length){
            $('.more_click').hide();
        }
    });
});

//cont6 슬라이드
$(function(){
    $('.c6_slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        arrows: true,
        dots: true,
        loop: true,
    });
});