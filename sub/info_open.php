<?php
    $title = "부산대학교병원-정보공개제도 안내";
    include "../common/header.php";
?>

<div class="info_open">
    <div class="info_open_center">
        <div class="info_all">
            <div class="info_main">
                <h2 class="info_title">정보공개제도 안내</h2>
                <ul class="plus_content">
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/share_btn.png'; ?>"></a></li>
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/mail_btn.png'; ?>"></a></li>
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/print_btn.png'; ?>"></a></li>
                </ul>
            </div>
            <div class="info_open_is">
                <h3>"정보공개제도"란?</h3>
                <p>
                    공공기관이 직무상 작성 또는 취득하여 관리하고 있는 정보를 수요자인 국민의 청구에 의하여 열람, 사본, 복제 등의 형태로 청구인에게 공개하거나 공공기관이
                    자발적으로 또는 법령 등의 규정에 의하여 의무적으로 보유하고 있는 정보를 배포 또는 공표 등의 형태로 제공하는 제도입니다. 
                    전자의 경우를 "청구공개", 후자는 "사전정보 공개"라 할 수 있습니다.
                </p>
            </div>
            <div class="open_about">
                <h3>공개형태</h3>
                <ul class="info_open_menu">
                    <li>청구공개 : 공공기관이 직무상 작성 또는 취득하여 관리하고 있는 정보를 청구인의 청구에 의하여 공개<br>
                        (정보공개 청구사이트에 접속 청구 <a href="https://www.open.go.kr" target="_blank">www.open.go.kr</a>)
                    </li>
                    <li>사전정보공개 : 정보를 보유한 공공기관이 청구 이전에 자발적으로 미리 정보를 제공</li>
                </ul>
            </div>
            <div class="error_check">
                <ul class="info_help">
                    <li>담당부서 : 총무팀</li>
                    <li>연락처 : 051-240-7116</li>
                </ul>
                <a class="error_report" href="#">오류신고하기<span><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/error_arrow.png'; ?>"></span></a>
            </div>
        </div>  
        <div class="sub_sideMenu">
            <h3>정보공개</h3>
            <ul class="subside_gnb">
                <li class="static"><a href="#">정보공개제도 안내</a></li>
                <li><a href="#">정보공개청구</a></li>
                <li><a href="#">사전정보공개</a></li>
                <li class="sub_slideDown">
                    <a href="#">청렴게시판</a>
                    <ul class="subbot_gnb">
                        <li><a href="#">반부패,청렴정책</a></li>
                        <li><a href="#">공익신고 안내</a></li>
                        <li class="integrity"><a href="#">청렴 정보 공개</a></li>
                    </ul>
                </li>
                <li><a href="#">경영공시</a></li>
                <li class="sub_slideDown">
                    <a href="#">사업실명제</a>
                    <ul class="subbot_gnb">
                        <li><a href="#">사업실명제 개요</a></li>
                        <li class="real_name"><a href="#">사업실명제 목록</a></li>
                    </ul>
                </li>
            </ul>
            <div class="call_box">
                <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/call_box.png'; ?>">
                <div class="call_text">
                    <h3 class="main_call">대표전화</h3>
                    <p>051-240-7000</p>
                    <span>운영시간 : 09:00 ~ 17:30</span>
                </div>
            </div>
        </div>  
    </div>
</div>

<?php
    $script = "script";
    $client = "client";
    include "../common/footer.php";
?>