<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css?ver='1'">
    <link rel="stylesheet" href="../css/community.css?<?php echo date('Y h:i:s'); ?>">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="slider">
            <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
                <?php include("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>커뮤니티<span>HOME>커뮤니티>공지사항</span></h3>
                <form id="search_form" action="" method="get">
                    <select name="search_word" id="">
                        <option value="">제목+내용</option>
                        <option value="">제목</option>
                        <option value="">내용</option>
                        <option value="">이름</option>
                    </select>
                    <input type="text" name="word" id="">
                    <input type="submit" value="검색">
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>파일</th>
                            <th>날짜</th>
                            <th>조회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8</td>
                            <td>그리스 신화 박물관 포스트 시작...</td>
                            <td>운영자</td>
                            <td></td>
                            <td>2018-08-05</td>
                            <td>2813</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>2018 새해 복 많이 받으세요~~
                            <td>운영자</td>
                            <td></td>
                            <td>2018-02-15</td>
                            <td>3004</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2017년도 문화가 있는날은 계속...</td>
                            <td>운영자</td>
                            <td></td>
                            <td>2017-06-23</td>
                            <td>3199</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2017년도 정유년 새해복 많이 받...
                            <td>
                            <td>운영자</td>
                            <td></td>
                            <td>2017-01-26</td>
                            <td>3970</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>7월 제주도민을 위한 SNS EVENT!
                            <td>
                            <td>운영자</td>
                            <td></td>
                            <td>2015-07-06</td>
                            <td>7236</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>가정의 달 Happy Event</td>
                            <td>운영자</td>
                            <td></td>
                            <td>2015-04-15</td>
                            <td>7139</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>매월 마지막 수요일은 문화가...</td>
                            <td>운영자</td>
                            <td></td>
                            <td>2015-02-27</td>
                            <td>7684</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>그리스신화박물관 홈페이지 OPEN</td>
                            <td>운영자</td>
                            <td></td>
                            <td>2015-02-09</td>
                            <td>7019</td>
                        </tr>
                    </tbody>
                </table>

                <article id="sub_contact">
                    <div>
                        <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                    </div>
                </article>
            </section>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
    </div>

</body>

</html>