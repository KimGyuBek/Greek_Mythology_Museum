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
            <?php include("../header.html"); ?>
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
                        <?php for ($i = 8; $i > 0; $i--) { ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>그리스 신화 박물관</td>
                            <td>김규백</td>
                            <td>파일</td>
                            <td>1999.04.11</td>
                            <td>199</td>
                        </tr>
                        <?php } ?>
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