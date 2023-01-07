<?php
    session_start();

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1; 
    }
?>
<?php 
    $title = "부산대학교병원-병원소식";
    include "../common/header.php"; ?>
<div id="notice_board">
    <div class="notice_center">
        <div class="notice">
            <div class="notice_top">
                <h2 class="notice_title">공지사항</h2>
                <ul class="plus_content">
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/share_btn.png'; ?>"></a></li>
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/mail_btn.png'; ?>"></a></li>
                    <li><a href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/print_btn.png'; ?>"></a></li>
                </ul>
            </div>
            <form id="all_notice" action="board.php" method="get">
                <select name="list">
                    <option value="title">제목</option>
                    <option value="context">내용</option>
                    <option value="author">작성자</option>
                </select>
                <div class="search">
                    <input type="text" name="word" placeholder="검색어를 입력하세요">
                    <button type="submit"><i class="xi-search"></i></button>
                </div>    
            </form>
        </div>
        <table>
            <colgroup>
                <col width="130px">
                <col width="auto">
                <col width="100px">
                <col width="140px">
                <col width="100px">
            </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일자</th>
                        <th>조회수</th>
                    </tr> 
                </thead>         
            <?php 
                include "../common/db_connect.php";

                if(isset($_GET['word']) AND isset($_GET['list'])){
                    $search = $_GET['word'];
                    $category = $_GET['list'];
                    $sql = "select * from pnuh where $category like '%$search%'";
                }
                else{
                    $search ="";
                    $sql = "select * from pnuh";
                }
                
                $result = mysqli_query($conn,$sql);
                //검색단어에 해당하는 행 갯수값
                $total_row = mysqli_num_rows($result);
                //게시글 갯수
                $list = 5;
                
                $block_pageNum = 10;

                $block_num = ceil($page / $block_pageNum);
                //페이징 블록의 시작번호
                $block_start = (($block_num - 1) * $block_pageNum) + 1;
                //페이징 블록의 끝번호
                $block_end = $block_start + $block_pageNum - 1;

                //총 게시글의 페이징 번호 갯수
                $total_page = ceil($total_row / $list);
                //페이징 블록의 갯수값
                $total_block = ceil($total_page / $block_pageNum);

                $page_start = ($page - 1) * $list;

                if($block_end > $total_page){
                    $block_end = $total_page;
                }

                //검색결과 처리
                if(isset($_GET['word']) AND isset($_GET['list'])){
                    $search2 = $_GET['word']; 
                    $category2 = $_GET['list']; 
                    $sql2 = "select * from pnuh where $category like '%$search%' order by num desc limit $page_start,$list";
                }
                else{
                    $search2 = "";
                    $category2 = "title";
                    $sql2 = "select * from pnuh order by num desc limit $page_start,$list";
                }

                $result2 = mysqli_query($conn,$sql2);

                //검색결과와 같은 행 갯수 확인
                $count2 = mysqli_num_rows($result2);

                if($count2 == 0){
                    echo "<tr>";
                    echo "<td colspan='4'>검색결과가 없습니다.</td>";
                    echo "</tr>";
                }
                else{
                    for($h = 0; $row = mysqli_fetch_array($result2); $h++){
                        echo "<tr>";
                        echo "<td>{$row['num']}</td>";
                        echo "<td class='board_title'><a href='notice_view.php?num={$row['num']}'>{$row['title']}</a></td>";
                        echo "<td class='author_name'>{$row['author']}</td>";
                        echo "<td>{$row['date']}";
                        echo "<td>{$row['viewCount']}";
                        echo "</tr>";
                    }
                }    
            ?>
        </table>
        <div class="paging">
            <ul class="list">
                <?php 
                    if($page > 1){
                        echo "<li class='first'><a href='board.php?list={$category2}&word={$search2}&page=1'><i class='fa-solid fa-angles-left'></i></a></li>";
                    }

                    if($block_num > 1){
                        echo "<li class='prev'><a href='board.php?list={$category2}&word={$search2}page=".($block_start-1)."'>이전</a></li>";
                    }

                    for($j = $block_start; $j <= $block_end; $j++){
                        
                        if($page == $j){
                            echo "<li class='page-item active'><a>{$j}</a></li>";
                        }
                        else{
                            echo "<li class='page-item'><a href='board.php?list={$category2}&word={$search2}&page={$j}'>{$j}</a></li>";
                        }
                    }

                    
                    if($block_num < $total_block){
                    echo "<li class='next'><a href='board.php?list={$category2}&word={$search2}&page=".($block_end+1)."'>다음</a></li>";
                    }
                    
                    if($page < $total_page){
                    echo "<li class='last'><a href='board.php?list={$category2}&word={$search2}&page={$total_page}'><i class='fa-solid fa-angles-right'></i></a></li>";
                    }
                ?>
            </ul>
        </div> 
        <?php if($_SESSION['userId'] == 'ADMIN') {?>
            <div class="write">
                <a href="insert_view.php">글쓰기</a>
            </div>    
        <?php }?>
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
            <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/busan/img/call_box.png'; ?>">
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