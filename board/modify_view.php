<?php
    $number = $_GET['num'];

    include "../common/db_connect.php";

    $sql = "select * from pnuh where num=$number";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $chg_str = $row['context'];
    $chg_str = str_replace("<br/>","\r\n",$chg_str);
?>
    <?php 
        $title = "부산대학교병원-글 수정";
        include "../common/header.php"; ?>
    <form id="update" action="db_update.php?num=<?php echo $number; ?>" method="post">
        <div class="modify_main">
            <h2 class="modify_write">글 수정</h2>
            <ul class="plus_content">
                <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/share_btn.png'; ?>"></a></li>
                <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/mail_btn.png'; ?>"></a></li>
                <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/print_btn.png'; ?>"></a></li>
            </ul>
        </div>
        <div>
            <label for="title">제목</label>
            <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>">
        </div>
        <div>
            <label for="context">내용</label>
            <textarea id="context" name="context"><?php echo $chg_str; ?></textarea>
        </div>
        <div class="modify_btn">
            <button type="submit">등록</button>
        <a href="board.php">목록으로</a>
        </div>
    </form>
    <?php 
        $script = "script";
        include "../common/footer.php";
    ?>
