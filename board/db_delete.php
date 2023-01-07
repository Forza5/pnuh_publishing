<?php
    $number = $_GET['num'];

    include "../common/db_connect.php";

    $sql = "delete from pnuh where num=$number";
    mysqli_query($conn,$sql);

    echo "<script>
            alert('삭제 완료되었습니다.');
            location.href='board.php';
        </script>";
?>