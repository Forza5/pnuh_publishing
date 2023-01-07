<?php 
    $title = "로그인";
    include "../common/header.php";
?>
<div class="login">
    <form action="db_login.php" method="post">
        <div class="login_main">
            <h2 class="login_title">로그인</h2>
            <ul class="plus_content">
                <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/share_btn.png'; ?>"></a></li>
                <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/mail_btn.png'; ?>"></a></li>
                <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/print_btn.png'; ?>"></a></li>
            </ul>
        </div>
        <div class="login_top">
            <h1 class="login_logo"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/login_logo.png'; ?>"></h1>
            <span>부산대학교병원 홈페이지에 회원가입을 하시면<br>
                  첨단대학병원의 다양한 서비스를 받으실 수 있습니다.</span>
        </div>
        <div class="login_box">
            <div class="login_form">
                <div class="id_box">
                    <label for="login_id">아이디</label>
                    <input type="text" id="login_id" name="login_id">
                </div>
                <div class="pass_box">
                    <label for="login_pass">비밀번호</label>
                    <input type="password" id="login_pass" name="login_pass">
                </div>
            </div>    
            <button type="submit"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/login_btn.gif'; ?>"></button>
        </div>
        <div class="find">
            <ul class="find_menu">
                <li>
                    <a href="#">아이디/비밀번호 찾기</a>
                    <span>아이디/비밀번호를 잊으신 분은 클릭해주세요.</span>
                </li>    
                <li>
                    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/join/join.php'; ?>">회원 가입하기</a>
                    <span>아이디가 없으신 분은 회원가입을 해주세요.</span>
                </li>
            </ul>    
        </div>
    </form>
    <div class="error_check">
        <ul class="login_help">
            <li>담당부서 : 원무팀</li>
            <li>연락처 : 051-240-7000</li>
        </ul>
        <a class="error_report" href="#">오류신고하기<span><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/error_arrow.png'; ?>"></span></a>
    </div>
</div>
<?php
    $client = "client";
    $script = "script";
    include "../common/footer.php";
?>