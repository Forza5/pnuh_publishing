<?php
    $title = "부산대학교병원-글쓰기";
    include "../common/header.php";
 ?>
<form id="insert" action="db_insert.php" method="post">
    <div class="insert_main">
        <h2 class="insert_write">글쓰기</h2>
        <ul class="plus_content">
            <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/share_btn.png'; ?>"></a></li>
            <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/mail_btn.png'; ?>"></a></li>
            <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/portfolio3/img/print_btn.png'; ?>"></a></li>
        </ul>
    </div>
    <div class="insert_menu">
        <div>
            <label for="title">제목</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="context">내용</label>
            <textarea id="context" name="context"></textarea>
        </div>
    </div>
    <div class="insert_btn">
        <button type="submit">등록</button>
        <a href="board.php">목록으로</a>
    </div>    
    
</form>
<?php
    $script = "script";
    include "../common/footer.php";
?>