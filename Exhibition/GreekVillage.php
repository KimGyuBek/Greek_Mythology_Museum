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
            style="background:url(../img/exhibition/sub_visual_bg.jpeg) no-repeat 50% top; background-size:auto 100%;">
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
                <h3>그리스마을<span>HOME>전시안내>그리스마을</span></h3>
                <!-- location end -->

                <!-- page content start -->
                <div id="contents">
                    <div id="txt_box_color">
                        <div id="txt_box_color_wrap">
                            <p>
                                <span class="title">
                                    <h2>그리스마을</h2>
                                    <p>그리스 신화가 살아 숨쉬는 곳 GREEK MYTHOLOGY IS ALIVE</p>

                                    <!-- <img src="/img/exhibition/exhibition_title01.gif" alt="창조관"> -->
                                </span>
                                <strong class="blue">타임머신을 타고 옛 그리스마을로 들어가 직접 체험해보세요!</strong>
                                <br>
                                아테네학당 : 고대 그리스의 건축, 의학, 철학, 수학, 과학, 정치, 문학, 연극, 도기&화폐, 의복, 올림픽을 한눈에~
                                <br>

                                선물 가게：그리스의 역사와 아름다운 정취를 느낄 수 있는 아트상품이 가득!
                                <br>

                                체험관 : 아테네 시민권 발급, 가면 만들기 등 다양한 체험과 함께 재미있는 그리스 신화 도서도 읽어보세요~

                            </p>

                        </div>

                    </div>
                    <div class="exhibition_img">
                        <img src="/img/exhibition/exhibition_img07.jpeg" alt="창조관 전경">
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