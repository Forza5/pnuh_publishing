
<?php 
    $title = "부산대학교병원-진료안내";
    include "../common/header.php"; 
?>
    <div class="clinic">
        <div class="clinic_center">
            <div class="clinic_info">
                <div class="clinic_main">
                    <h2 class="clinic_title">진료안내</h2>
                    <ul class="plus_content">
                        <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/share_btn.png'; ?>"></a></li>
                        <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/mail_btn.png'; ?>"></a></li>
                        <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/print_btn.png'; ?>"></a></li>
                    </ul>
                </div>
                <div class="clinic_main_context">
                    <h3>진료접수 및 진료시간 안내</h3>
                    <div class="clinic_time">
                        <ul class="time_title">
                            <li>접수</li>
                            <li>진료</li>
                        </ul>
                        <ul class="time_context">
                            <li>평일 08:00 ~ 16:00</li>
                            <li>평일 09:00 ~ 17:00</li>
                        </ul>
                    </div>
                    <ul class="time_explain">
                            <li>접수시간은 각과사정에 따라 달라질수 있으므로 해당과에 전화(대표전화:240-7000)문의 후 내원바랍니다.</li>
                            <li>응급환자와 분만환자는 휴일없이 24시간 계속 진료합니다.</li>
                    </ul>
                </div>    
                <div class="clinic_main_context02">
                    <h3>진료절차</h3>
                    <div class="clinic_pro_bg">
                        <ul class="clinic_procedure">
                            <li>외래진료 접수</li>
                            <li>진료</li>
                            <li>수납</li>
                            <li>약 처방전 교부, 채혈, 주사, 각종검사, 촬영(예약)</li>
                        </ul>
                    </div>
                    <div class="clinic_pro_explain">
                        <ul class="pro_explain_title">
                            <li>외래진료접수</li>
                            <li>진료</li>
                            <li>수납</li>
                            <li>약처방전 교부, 채혈, 주사,<br>
                                각종검사, 촬영(예약)
                            </li>
                        </ul>
                        <ul class="pro_explain_context">
                            <li>처음오시는 분 : <span>원무팀 초진접수창구 이용 / 진료신청서 작성, 요양급여의뢰서, 신분증 지참</span></li>
                            <li>해당진료과 접수창구에 접수증을 제출하신 후 진료받으실 수 있습니다.</li>
                            <li></li>
                            <li>
                                <ul class="clinic_reger">
                                    <li>약처방전 교부 : 무인 수납처방발행기를 이용해 주세요.</li>
                                    <li>채혈 : B동 1층, C동 1층 채혈실 이용</li>
                                    <li>주사 : B동 1층 (주사실), C동 5층 (항암주사실)</li>
                                    <li>각종검사 : 해당검사실 검사 또는 예약</li>
                                    <li>촬영 : B동 1층, C동 4층 일반촬영실 접수 후 촬영</li>
                                    <li>통합예약실 (B동 1층 및 C동 1층) : 초음파, MRI, CT, 핵의학, 내시경 등 예약</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clinic_main_context03">
                    <h3>치과진료안내</h3>
                    <p>치과진료처는 1단계 진료가 가능하므로, 진료의뢰서가 없어도 국민건강보험으로 진료를 받으실 수 있습니다.<br>
                        (단, 의료급여환자인 경우는 2차진료기관의 의료급여의뢰서가 필요합니다.)
                    </p>
                </div>
                <div class="clinic_main_context04">
                    <h3>진료예약안내</h3>
                    <p>진료예약의 자세한 방법은 진료예약안내를 참고해주시기 바랍니다.<br>
                        전화예약번호 <span>051-240-7000</span></p>
                </div>
                <div class="error_check">
                    <ul class="clinic_help">
                        <li>담당부서 : 원무팀</li>
                        <li>연락처 : 051-240-7000</li>
                    </ul>
                    <a class="error_report" href="#">오류신고하기<span><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/error_arrow.png'; ?>"></span></a>
                </div>
            </div>
            <div class="sub_sideMenu">
                <h3>진료안내</h3>
                <ul class="subside_gnb">
                    <li class="sub_slideDown clicked static">
                        <a href="#">진료안내</a>
                        <ul class="subbot_gnb">
                            <li><a href="#">진료안내</a></li>
                            <li><a href="#">의료전달체계</a></li>
                            <li><a href="#">하이패스 서비스안내</a></li>
                            <li><a href="#">보험별 진료절차</a></li>
                            <li><a href="#">심층진찰 시범사업</a></li>
                        </ul>
                    </li>
                    <li class="sub_slideDown">
                        <a href="#">입퇴원안내</a>
                        <ul class="subbot_gnb">
                            <li><a href="#">입원생활안내</a></li>
                            <li><a href="#">입원생활안내[영상]</a></li>
                            <li class="hosp_enter"><a href="#">병문안 안내</a></li>
                        </ul>
                    </li>
                    <li><a href="#">가정간호안내</a></li>
                    <li><a href="#">응급진료안내</a></li>
                    <li><a href="#">진료과/의료진</a></li>
                    <li><a href="#">센터소개</a></li>
                    <li><a href="#">진료지원부서</a></li>
                    <li><a href="#">비급여진료수가</a></li>
                    <li><a href="#">비자신체검사안내</a></li>
                    <li><a href="#">다학제 통합진료 안내</a></li>
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