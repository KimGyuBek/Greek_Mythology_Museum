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
            style="background:url(../img/experience/sub_visual_bg.jpg) no-repeat 50% top; background-size:auto 100%;">
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
                <h3>스탬프북<span>HOME>전시안내>스탬프북</span></h3>
                <!-- location end -->

                <!-- page content start -->
                <div id="contents">
                    <div id="txt_box_color">
                        <div id="txt_box_color_wrap">
                            <p>
                                <span class="title">
                                    <h2>스탬프북</h2>
                                    <p>그리스 신화가 살아 숨쉬는 곳 GREEK MYTHOLOGY IS ALIVE</p>

                                    <!-- <img src="/img/exhibition/exhibition_title01.gif" alt="창조관"> -->
                                </span>
                                <br>
                                전시관 곳곳에 숨어 있는 스탬프 존을 찾아 스탬프를 쾅! 쾅! 재미있게 그리스 신화를 익혀요!


                            </p>

                        </div>

                    </div>
                    <div class="exhibition_img">
                        <img src="/img/experience/experience_img03.jpeg" alt="창조관 전경">
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