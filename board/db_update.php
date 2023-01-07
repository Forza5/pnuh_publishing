<?php
    $number = $_GET['num'];

    $title = $_POST['title'];
    $context = $_POST['context'];

    $context = str_replace("\r\n","<br/>",$context);

    $author = $_POST['author'];
    date_default_timezone_set('Asia/Seoul');
    $date = date('Y-m-d');

    include "../common/db_connect.php";
    $sql = "update pnuh set title='$title',context='$context',date='$date' where num=$number";
    mysqli_query($conn,$sql);

    echo "<script>
            alert('수정 완료되었습니다.');
            location.href='notice_view.php?num={$number}';
        </script>";
?>