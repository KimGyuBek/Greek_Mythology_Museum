<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="../css/subpage_common.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="../css/about.css?<?php echo date('Y h:i:s'); ?>">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div id="wrap">
        <!-- header -->
        <header>
            <?php include("../header.php"); ?>
        </header>
        <!-- header end -->

        <!-- sub_visual -->
        <div id="sub_visual"
            style="background:url(../img/tour/sub_visual_bg.jpg) no-repeat 50% top; background-size:auto 100%;">
            <div class="text">
                <img src="../img/exhibition/sub_visual_txt.png" alt="그리스 신화가 살아 숨쉬는 곳  Greek mythology is alive">
            </div>
        </div>
        <!-- sub_visual end -->

        <!-- sub -->
        <div id="sub_main">
            <!-- left menu -->
            <aside id="left_menu">
                <?php include("left_menu.html"); ?>
            </aside>
            <!-- left menu end -->

            <!-- contents -->
            <section id="sub_contents">
                <!-- location -->
                <h3>오시는길<span>HOME>전시안내>오시는길</span></h3>
                <!-- location end -->

                <!-- page content start -->
                <div id="contents">
                    <p>
                        <span class="title">
                        </span>
                    <h4>오시는길</h4>

                    <li>
                        <ul>
                            <strong class="blue">주소 : 제주특별자치도 제주시 한림읍 광산로 942</strong>
                        </ul>
                        <ul>
                            <b>제주시, 공항에서 오시는 길</b> : 평화로 금악, 봉성 출구 금악 방면
                        </ul>
                        <ul>
                            <b>서귀포, 중문에서 오시는 길</b> : 평화로 금악, 휴게소 출구 금악 방면
                        </ul>
                        <ul>
                            <b>네비번호 </b>: 7735800 / 7735600
                        </ul>
                    </li>

                    </p>

                </div>

        </div>
        <div class="exhibition_img">
            <img src="/img/tour/info_img.jpeg" alt="창조관 전경">
        </div>
        <!-- page content end -->

    </div>
    <h1></h1>
    <!-- contact -->
    <article id="sub_contact">
        <div>
            <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
        </div>
    </article>
    <!-- contact end -->
    </section>
    </div>

    <!-- footer -->
    <footer>
        <?php include("../footer.html"); ?>
    </footer>
    <!-- footer end -->
    </div>

</body>

</html>