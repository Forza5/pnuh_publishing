<?php 
    session_start();

    $loginId = $_POST['login_id'];
    $loginPass = $_POST['login_pass'];

    include "../common/db_connect.php";

    $sql = "select * from users where userid='$loginId' and userpass='$loginPass'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    if(isset($row)){
        $_SESSION['userId'] = $row['userid'];
        $_SESSION['userName'] = $row['username'];

        echo "<script>
                alert('로그인 되었습니다');
                location.href='../index.php';
            </script>";
    }
    else{
        echo "<script>
                alert('아이디와 패스워드를 확인해주세요');
                location.href = 'login.php';
            </script>";
    }
?>