<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <?php if(isset($index)){ ?>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <?php } ?>    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/js/jquery-3.6.0.min.js'; ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/css/style.css'; ?>"></link>
</head>
<body>
    <div id="wrap">
        <div class="wrap_bg"></div>
        <?php if(isset($topMain)){ ?>
        <div id="top_main">
            <div class="top_bg">
                <div class="top_center clear-fix">
                    <div class="left_text">
                        <div class="lt_text">
                            <h2>첫 진료 간편예약</h2>
                            <p>연락처를 남겨주시면 전문상담원이 빠른 진료 예약을<br>
                                도와드립니다.(평일 09:00 ~ 17:30)
                            </p>
                            <div class="lt_submit">
                                <input type="text" id="phoneNum" placeholder="전화번호 입력(예: 010-0000-0000)">
                                <button class="submit">예약신청</button>
                            </div>    
                            <ul class="info_menu">
                                <li>
                                    <a href="#">
                                    <i class="far fa-file-alt"></i>
                                    <span>진료안내</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="far fa-user"></i>
                                    <span>나의 진료차트</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="lb_text">
                            <h2>인터넷 진료 예약</h2>
                            <p>홈페이지에서 개인의 일정에 맞춰 빠르고<br>
                                쉽게 진료 예약을 할 수 있습니다.
                            </p>
                            <ul class="res_menu">
                                <li>
                                    <a href="#">
                                        <h3>첫 진료예약</h3>
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/arrow.png'; ?>">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>재진예약</h3>
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/arrow.png'; ?>">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right_text">
                        <div class="rt_text">
                            <h2>의료진 찾기</h2>
                            <p class="rt_explain">부산대학교병원 의료진은 환자를 위해 항상 노력하고 있습니다.</p>
                            <input type="text" id="rt_search" placeholder="진료과/진료분야/의료진 입력">
                            <i class="xi-search search"></i>
                            <p class="phoneNumber">
                                <i class="fas fa-phone-volume"></i>
                                <span>대표전화 <strong>051-240-7000</strong></span>
                            </p>
                        </div>
                        <div class="rb_text">
                            <ul class="rb_menu">
                                <li>
                                    <a href="#">
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot01.png'; ?>">
                                        <p>오시는 길</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot02.png'; ?>">
                                        <p>층별 안내</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot03.png'; ?>">
                                        <p>증명서 발급</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot04.png'; ?>">
                                        <p>병문안 안내</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot05.png'; ?>">
                                        <p>주차 안내</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="rb_slide">
                                <ul class="slide_menu">
                                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot_slide01.png'; ?>"></a></li>
                                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot_slide02.png'; ?>"></a></li>
                                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot_slide03.png'; ?>"></a></li>
                                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/rb_bot_slide04.png'; ?>"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>        
        <?php } ?>
        <div id="header">
            <div class="head_center">
                <h1 class="logo"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/index.php'; ?>"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/logo.png'; ?>"></a></h1>
                <ul class="h_gnb">
                    <li>
                        <a href="#">예약/조회/발급</a>
                        <div class="all_depth">
                            <div class="all_depth_center">
                                <div class="depth_title">
                                    <h2>예약/조회/발급</h2>
                                    <p>예약부터 조회 및 검사결과 등을<br>
                                        한번에 확인하실 수 있습니다.
                                    </p>
                                </div>
                                <ul class="depth2">
                                    <li><a href="#">진료예약</a></li>
                                    <li><a href="#">건강검진예약</a></li>
                                    <li><a href="#">비자신체검사예약</a></li>
                                </ul>    
                                <ul class="depth2">
                                    <li><a href="#">예약일정조회</a></li>
                                    <li><a href="#">이력조회</a></li>
                                </ul> 
                                <ul class="depth2">   
                                    <li>
                                        <a href="#">의무기록사본발급신청</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">인터넷신청</a></li>
                                            <li><a href="#">인터넷신청조회</a></li>
                                        </ul>
                                    </li>
                                </ul>   
                            </div>     
                        </div>    
                    </li>
                    <li>
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/sub/clinic_info.php'; ?>">진료안내</a>
                        <div class="all_depth">
                            <div class="all_depth_center">
                                <div class="depth_title">
                                    <h2>진료안내</h2>
                                    <p>진료 및 입퇴원 진료과 소개 등을<br>
                                        상세히 안내해 드립니다.
                                    </p>
                                </div>
                                <ul class="depth2">
                                    <li>
                                        <a href="#">진료안내</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">진료안내</a></li>
                                            <li><a href="#">의료전달체계</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">입퇴원안내</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">입원생활안내</a></li>
                                            <li><a href="#">병문안 안내</a></li>
                                        </ul>
                                    </li>
                                </ul>    
                                <ul class="depth2">
                                    <li><a href="#">가정간호안내</a></li>
                                    <li><a href="#">응급진료안내</a></li>
                                    <li><a href="#">진료과/의료진</a></li>
                                    <li><a href="#">센터소개</a></li>
                                    <li><a href="#">진료지원부서</a></li>
                                    <li><a href="#">비급여진료수가</a></li>
                                </ul>  
                                <ul class="depth2">  
                                    <li><a href="#">비자신체검사안내</a></li>
                                    <li><a href="#">다학제 통합진료 안내</a></li>
                                </ul>    
                            </div>    
                        </div>
                    </li>
                    <li>
                        <a href="#">건강정보</a>
                        <div class="all_depth">
                            <div class="all_depth_center">
                                <div class="depth_title">
                                    <h2>건강정보</h2>
                                    <p>각종 질병 및 투약정보 등 다양한<br>
                                        건강정보들을 만나보세요.
                                    </p>
                                </div>
                                <ul class="depth2">
                                    <li><a href="#">건강강좌안내</a></li>
                                    <li><a href="#">소식지 바로보기</a></li>
                                </ul>    
                                <ul class="depth2">
                                    <li><a href="#">질환정보</a></li>
                                    <li><a href="#">건강칼럼</a></li>
                                </ul>  
                                <ul class="depth2">  
                                    <li>
                                        <a href="#">검사정보</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">검사정보</a></li>
                                            <li><a href="#">첨단장비소개</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">영양정보</a></li>
                                </ul>    
                                <ul class="depth2">
                                    <li><a href="#">투약정보</a></li>
                                </ul>
                            </div>    
                        </div>        
                    </li>   
                    <li>
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'],'/busan/sub/client_info.php'; ?>">고객참여/안내</a>
                        <div class="all_depth">
                            <div class="all_depth_center">
                                <div class="depth_title">
                                    <h2>고객참여/안내</h2>
                                    <p>병원에 대한 세부안내 및 발급안내<br>
                                        등을 확인 하실 수 있습니다.
                                    </p>
                                </div>
                                <ul class="depth2">
                                    <li>
                                        <a href="#">친절직원추천</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">이달의 친절직원</a></li>
                                            <li><a href="#">친절직원 추천</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">고객의 소리</a></li>
                                </ul> 
                                <ul class="depth2">   
                                    <li>
                                        <a href="#">의무기록사본발급안내</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">방문발급안내</a></li>
                                            <li><a href="#">인터넷신청안내</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">증명서 발급안내</a></li>
                                    <li><a href="#">의료영상사본발급안내</a></li>
                                </ul> 
                                <ul class="depth2">   
                                    <li><a href="#">자원봉사</a></li>
                                    <li>
                                        <a href="#">이용안내</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">오시는 길</a></li>
                                            <li><a href="#">층별안내도</a></li>
                                        </ul> 
                                    </li>       
                                </ul>
                                <ul class="depth2">
                                    <li><a href="#">전화번호 안내</a></li>
                                </ul>    
                            </div>   
                        </div>    
                    </li>
                    <li>
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/board/board.php'; ?>">병원소식</a>
                        <div class="all_depth">
                            <div class="all_depth_center">
                                <div class="depth_title">
                                    <h2>병원소개</h2>
                                    <p>부산대학교병원의 각종 소식들을<br>
                                        자세히 소개합니다.
                                    </p>
                                </div>
                                <ul class="depth2">
                                    <li><a href="#">병원장인사말</a></li>
                                    <li><a href="#">병원장이력</a></li>
                                    <li><a href="#">역대병원장</a></li>
                                    <li><a href="#">연혁</a></li>
                                    <li>
                                        <a href="#">주요정보</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">미션&비전</a></li>
                                            <li><a href="#">조직도</a></li>
                                            <li><a href="#">통계</a></li>
                                        </ul>
                                    </li>
                                </ul>   
                                <ul class="depth2"> 
                                    <li>
                                        <a href="#">소셜미디어</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">홍보영상</a></li>
                                            <li><a href="#">브로슈어</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">병원소식</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">병원소식</a></li>
                                            <li><a href="#">언론보도</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>    
                        </div>        
                    </li>
                    <li>
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/sub/info_open.php'; ?>">정보공개</a>
                        <div class="all_depth">
                            <div class="all_depth_center">
                                <div class="depth_title">
                                    <h2>정보공개</h2>
                                    <p>정부의 방침에 따라 병원의 정보를<br> 개방하여
                                        소통과 협력에 앞장서겠습니다.
                                    </p>
                                </div>
                                <ul class="depth2">
                                    <li><a href="#">정보공개제도 안내</a></li>
                                    <li><a href="#">정보공개청구</a></li>
                                    <li><a href="#">사전정보공개</a></li>
                                </ul>   
                                <ul class="depth2"> 
                                    <li>
                                        <a href="#">청렴게시판</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">공익신고안내</a></li>
                                            <li><a href="#">청렴 정보 공개</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">경영공시</a></li>
                                </ul>    
                                <ul class="depth2">
                                    <li>
                                        <a href="#">사업실명제</a>
                                        <ul class="plus_menu">
                                            <li><a href="#">사업실명제 개요</a></li>
                                            <li><a href="#">사업실명제 목록</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> 
                        </div>           
                    </li>
                </ul>
                <ul class="info_gnb">
                    <?php if(isset($_SESSION['userId'])) { ?>
                        <li class="admin_user"><i class="xi-user-o"></i><span><?php echo $_SESSION['userId']; ?>님</span></li>
                        <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/login/logout.php'; ?>">로그아웃</a></li>
                    <?php } else{ ?>
                        <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/login/login.php'; ?>">로그인</a></li>
                        <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/join/join.php'; ?>">회원가입</a></li>
                    <?php } ?>
                    <li><a href="#"><i class="xi-search"></i></a></li>
                </ul>
            </div>        
        </div>
        <div class="cont_bg"></div>
        <div id="container">