<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>채용정보</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/employee.css?<?php echo date('Y h:i:s'); ?>">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>
    </div>
    <div id="container">
        <div class="sub_top"></div>
        <div class="tab_wrap">
            <div class="inner">
                <ul class="tab_menu">
                    <style>
                    .sub .tab_wrap .tab_menu li {
                        width: 200px;
                    }

                    @media all and (max-width:1140px) {
                        .sub .tab_wrap .tab_menu li {
                            width: 150px;
                        }
                    }

                    @media all and (max-width:940px) {
                        .sub .tab_wrap .tab_menu li {
                            width: 130px;
                        }
                    }
                    </style>
                    <li class="cur">
                        <a href="">채용정보</a>
                    </li>
                    <li>
                        <a href="">추천 채용</a>
                    </li>
                    <li>
                        <a href="">일반 채용</a>
                    </li>
                    <li>
                        <a href="">정부지원일자리</a>
                    </li>
                    <li>
                        <a href="">아르바이트</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div class="page_top">
                <div class="inner s_inner">
                    <div>
                        <h2 class="page_title">청년인턴정보</h2>
                        <div style="text-align:right;">
                            <a href="" class="job_search_btn"
                                style="display:inline-block;background: #0797f9;width: 140px;line-height: 40px;font-size: 18px;color: #fff;text-align:center;">채용정보</a>
                            <a href="" class="job_search_btn"
                                style="display:inline-block;background: #0797f9;width: 140px;line-height: 40px;font-size: 18px;color: #fff;text-align:center;">공채속보</a>
                        </div>
                    </div>
                    <p class="page_desc">정보출처 <img src="../img/employee/worknet.png" alt="worknet">: 본 자료는 고용노동부
                        워크넷(www.work.go.kr)에서 제공된 정보이며, 무단복제 및 배포를 금지합니다.</p>
                </div>
            </div>

        </div>
    </div>
    <footer>
        <div id="footer">
            <div class="footer_inner inner s_inner">
                <div class="footer_left">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="" target="_blank">개인정보처리방침</a></li>
                            <li><a href="" target="_blank">저작권보호정책</a></li>
                            <li><a href="" target="_blank">이메일무단수집거부</a></li>
                        </ul>
                    </div>
                    <img class="footer_logo" src="../img/employee/footer_logo.png" alt="계명대학교">
                    <div class="space"></div>
                    <div class="copyright">42601 대구광역시 달서구 달구벌대로 <br>1095 대학일자리센터</div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>