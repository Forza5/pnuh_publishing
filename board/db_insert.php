<?php
    session_start();
    $title = $_POST['title'];
    $context = $_POST['context'];
    $context = str_replace("\r\n","<br/>",$context);
    $author = $_SESSION['userId'];
    
    date_default_timezone_set('Asia/Seoul');
    $date = date('Y-m-d');

    include "../common/db_connect.php";

    $sql = "insert into pnuh(title,context,author,date,viewCount) values('$title','$context','$author','$date',0)";
    mysqli_query($conn,$sql);

    echo "<script>
            alert('게시글 등록 완료');
            location.href='board.php';
        </script>";
?>