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
                <h3>사랑관<span>HOME>전시안내>사랑관</span></h3>
                <!-- location end -->

                <!-- page content start -->
                <div id="contents">
                    <div id="txt_box_color">
                        <div id="txt_box_color_wrap">
                            <p>
                                <span class="title">
                                    <h2>사랑관</h2>
                                    <p>그리스 신화가 살아 숨쉬는 곳 GREEK MYTHOLOGY IS ALIVE</p>

                                    <!-- <img src="/img/exhibition/exhibition_title01.gif" alt="창조관"> -->
                                </span>
                                <strong class="blue">신들이 살아 숨 쉴 것만 같은 환상의 정원. 그 안에서 펼쳐지는 사랑의 향연!</strong>
                                <br>
                                아폴론과 다프네의 슬픈 사랑이야기를 지나 메아리만 남은 에코와 샘물에 빠져 죽은 나르키소스 이야기.
                                <br>

                                명화로 살펴보는 피그말리온과 갈라테이아까지..
                                <br>

                                신화 속에 등장하는 아름다운 사랑을 느껴보세요. 그리고 위시트리에 간절한 소원을 적어주세요~

                            </p>

                        </div>

                    </div>
                    <div class="exhibition_img">
                        <img src="/img/exhibition/exhibition_img06.jpeg" alt="창조관 전경">
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