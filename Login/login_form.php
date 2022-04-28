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
    <link rel="stylesheet" href="../css/login.css?<?php echo date('Y h:i:s'); ?>">
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
            <!-- <aside id="left_menu">
                <?php include("left_menu.html"); ?>
            </aside> -->
            <!-- left menu end -->

            <!-- contents -->
            <section id="sub_contents">
                <!-- location -->
                <h3>로그인</h3>
                <!-- location end -->

                <!-- page content start -->
                <div id="contents">
                    <div class="flex-div">
                    </div>
                    <!-- <div id="txt_box_color"> -->
                    <!-- <div id="txt_box_color_wrap"> -->
                    <p>
                        <span class="title">
                            <span id="login_input" style="border: 3px;">
                                <form action="login.php" method="post" style="">
                                    <ul id="login_box">
                                        <li id="login_li">
                                            <label><input type="text" name="id" id="" placeholder="아이디">
                                            </label>
                                            <label><input type="password" name="passwd" id=""
                                                    placeholder="비밀번호"></label>
                                            </label>

                                            <label><input id="login_button" type="submit" value="로그인"></label>
                                        </li>

                                    </ul>
                                </form>

                            </span>

                        </span>
                    </p>

                </div>

        </div>

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