<?php
    session_start();

    $number = $_GET['num'];

    include "../common/db_connect.php";

    $sql = "select * from pnuh where num=$number";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    $viewCount = $row['viewCount'];


    //해당 게시글 들어오면 조회수 증가(쿠키가 유지가 될 동안에는 중복증가 금지)
    if(isset($_COOKIE["board_{$number}"])){

        //하루가 지나지 않았으면 조회수 증가 X
        $viewsql = "update pnuh set viewCount=$viewCount where num=$number";
        mysqli_query($conn,$viewsql);
    }
    else{

        //한번 접속할때 조회수 1씩 증가(하루 24시간 세팅)
       $viewCount++;
       $viewsql = "update pnuh set viewCount=$viewCount where num=$number";
       mysqli_query($conn,$viewsql);
       setcookie("board_{$number}",$number,time()+60*60*24,"/");
    }
?>

    <?php 
        $title = "부산대학교병원-공지사항";
        include "../common/header.php";
    ?>
    <div class="not_wrap">
        <div class="not_view">
            <div class="not_top">
                <div class="not_main">
                    <h2 class="not_title">공지사항</h2>
                    <ul class="plus_content">
                        <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/share_btn.png'; ?>"></a></li>
                        <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/mail_btn.png'; ?>"></a></li>
                        <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/print_btn.png'; ?>"></a></li>
                    </ul>
                </div>
                <div class="not_subtitle">
                    <h3><?php echo $row['title']; ?></h3>
                    <span>작성자<span class="subtitle_name"><?php echo $row['author']; ?></span></span>
                    <span>작성일<span class="subtitle_name"><?php echo $row['date']; ?></span></span>
                    <span>조회수<span class="subtitle_name delete"><?php echo $row['viewCount']; ?></span></span>
                    <div class="btns">
                        <?php if($_SESSION['userId'] == 'ADMIN'){ ?>
                            <a href="modify_view.php?num=<?php echo $number; ?>">수정</a>
                            <a href="db_delete.php?num=<?php echo $number; ?>">삭제</a>
                        <?php } ?>    
                    </div>  
                </div>    
            </div>  
            <div class="not_context"><?php echo $row['context']; ?></div>
            <div class="goto_board">
                <a href="board.php">목록으로</a>
            </div>
        </div>
        <div class="sub_sideMenu">
            <h3>정보공개</h3>
            <ul class="subside_gnb">
                <li><a href="#">병원장인사말</a></li>
                <li><a href="#">병원장이력</a></li>
                <li><a href="#">역대병원장</a></li>
                <li><a href="#">연혁</a></li>
                <li class="sub_slideDown">
                    <a href="#">주요정보</a>
                    <ul class="subbot_gnb">
                        <li><a href="#">미션&비전</a></li>
                        <li><a href="#">조직도</a></li>
                        <li class="statistic"><a href="#">통계</a></li>
                    </ul>
                </li>
                <li class="sub_slideDown">
                    <a href="#">소셜미디어</a>
                    <ul class="subbot_gnb">
                        <li><a href="#">홍보영상</a></li>
                        <li class="brochure"><a href="#">브로슈어</a></li>
                    </ul>
                </li>
                <li class="sub_slideDown clicked static">
                    <a href="#">병원소식</a>
                    <ul class="subbot_gnb">
                        <li><a href="#">병원소식</a></li>
                        <li class="media"><a href="#">언론보도</a></li>
                    </ul>
                </li>
            </ul>
            <div class="call_box">
                <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/call_box.png'; ?>">
                <div class="call_text">
                    <h3 class="main_call">대표전화</h3>
                    <p>051-240-7000</p>
                    <span>운영시간 : 09:00 ~ 17:30</span>
                </div>
            </div>
        </div> 
    </div>    

    <?php 
        $script = "script";
        $client = "client";
        include "../common/footer.php"; 
    ?>