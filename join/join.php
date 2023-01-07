<?php 
    $title = "부산대학교병원-회원가입";
    include "../common/header.php";
?>
<div class="join_main">
    <form id="join" action="join_insert.php" method="post">
        <div class="join_center">
            <div class="join_top">
                <h2 class="join_title">회원가입</h2>
                <ul class="plus_content">
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/share_btn.png'; ?>"></a></li>
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/mail_btn.png'; ?>"></a></li>
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/print_btn.png'; ?>"></a></li>
                </ul>
            </div>
            <div class="check_box">
                <div class="form_action">
                    <div class="able_box">
                        <p>
                            제1조 (목적)<br><br>

                            이 약관은 부산대학교병원“www.pnuh.or.kr"에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 합니다)를 이용함에 있어 부산대학교병원과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.<br><br>

                            제2조 (정의)

                            ①“www.pnuh.or.kr”이란 부산대학교병원이 컴퓨터 등 정보통신설비와 정보통신망을 이용하여 정보 및 서비스를 이용자에게 제공하고 재화 또는 용역을 거래할 수 있도록 설정한 가상의 의료서비스장을 말합니다.<br><br>

                            ② "이용자"란 “www.pnuh.or.kr”에 접속하여 이 약관에 따라 부산대학교병원이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.<br><br>

                            ③ "회원"이라 함은 “www.pnuh.or.kr”에 개인정보를 제공하여 회원등록을 한 자로서, 부산대학교병원 “www.pnuh.or.kr”을 통하여 지속적으로 제공하는 정보 및 서비스를 계속적으로 이용할 수 있는 자를 말합니다..<br><br>

                            ④ "비회원"이라 함은 회원으로 가입하지 않고 부산대학교병원이 제공하는 정보 및 서비스를 이용하는 자를 말합니다.
                        </p>
                    </div>
                    <div class="check_type">
                        <input type="checkbox" id="check1" name="check1" class="check">
                        <label for="check1">이용약관 동의</label>
                    </div>    
                </div>
                <div class="form_action">
                    <div class="able_box">
                        <p>
                            1. 개인 정보의 수집 목적 및 이용<br><br>

                            '홈페이지'의 각종 서비스를 이용하는 데 있어 인터넷진료예약, 상담 등 각종 서비스의 원활한 제공과 예약확인, 상담답변 등 각종 정보제공을 위한 온라인ㆍ오프라인에서의 공지 및 통계분석자료로의 활용을 위해 최소한의 정보를 필수사항으로 수집합니다. 회원님이 제공하신 모든 정보는 상기 목적에 필요한 용도 이외로는 사용되지 않으며 수집정보의 범위나 사용목적, 용도가 변경될 시에는 반드시 회원님께 사전동의를 구할 것입니다.<br><br><br>
                            2. 개인정보수집<br><br>

                            홈페이지의 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다. 회원님의 개인정보보호를 위해 주민등록번호는 복호화가 불가능한 형태로 암호화되어 저장되며, 개인인증 및 의료서비스 연동 등의 불가피한 사항을 제외하고는 절대 사용되지 않습니다.<br><br>

                            ○ 수집항목 : 이름, 생년월일, 로그인ID, 비밀번호, 자택전화번호, 자택주소, 휴대전화번호, 이메일, 법정대리인정보, 주민등록번호, 서비스이용기록, 쿠키, 결제기록<br><br>

                            ○ 개인정보 수집방법 : 홈페이지(회원가입, 상담 등 각종 서비스)
                        </p>
                    </div>
                    <div class="check_type">
                        <input type="checkbox" id="check2" name="check2" class="check">
                        <label for="check2">개인정보 수집 및 이용 동의</label>
                    </div>    
                </div>
                <div class="form_action">
                    <input type="checkbox" id="checkAll">
                    <label for="checkAll">필수 이용약관 전체동의</label>
                </div>
            </div>
            <!-- 회원가입 기입부분 -->
            <div class="member_check">
                <div class="form_action">
                    <label for="userId">아이디</label>
                    <input type="text" id="userId" name="userId" placeholder="아이디를 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_action">
                    <label for="userPass">비밀번호</label>
                    <input type="password" id="userPass" name="userPass" placeholder="비밀번호를 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_action">
                    <label for="userPassCheck">비밀번호확인</label>
                    <input type="password" id="userPassCheck" name="userPassCheck" placeholder="비밀번호를 다시한번 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_action">
                    <label for="userEmail">이메일주소</label>
                    <input type="text" id="userEmail" name="userEmail" placeholder="이메일을 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_action">
                    <label for="userPhone">연락처</label>
                    <input type="text" id="userPhone" name="userPhone" placeholder="연락처를 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_action">
                    <label for="userName">이름</label>
                    <input type="text" id="userName" name="userName" placeholder="이름을 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_action">
                    <label for="userBirth">생년월일</label>
                    <input type="date" id="userBirth" name="userBirth" placeholder="생년월일을 입력해주세요">
                    <i class="xi-user-o"></i>
                    <i class="xi-error-o"></i>
                    <span class="error_msg"></span>
                </div>
            </div>
            <div class="join_btn">
                <button type="submit">회원가입</button>
            </div>
        </div>    
    </form>
</div>
<?php 
    $join = "join";
    $script = "script";
    include "../common/footer.php";
?>