<?php

    session_start();

    $connect = mysqli_connect('127.0.0.1', 'project', 'bitnami', 'project');
    $userid = $_SESSION['userid'];
    $query = "SELECT * FROM Images WHERE userid = '$userid' ORDER BY image_id DESC LIMIT 1";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);

    $query2 = "SELECT * FROM UserInfo WHERE userid = '$userid'";
    $result2 = $connect->query($query2);
    $rows2 = mysqli_fetch_assoc($result2);

    if(isset($_SESSION['userid'])) {
        echo 
        '<html>
            <header id="header">
                <div class="wrap_inner">
                    <div class="f_l">
                            <a href class="btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        <h1 id="logo" class="logo f_l">
                            <a href="../html/index.html">미니사진관</a>
                            </h1>
                    </div>
                    <div class="f_r">
                        <a href="../php/logout.php" class="start">로그아웃</a>
                        <!-- <div class="wrap_btn_search">
                            <button id="btnSearchMenu" class = "btn_search" type="button">검색</button>
                        </div> --!>
                    </div>
                </div>
                <div id="wrapSideMenu">
                    <div class="side_profile">
                        <a href="../html/m_studio.html?address='?><?php echo $rows2['address'];?><?php echo'" class="homeLink">
                            <div class="wrap_profile_img profile_img">
                                <img class="img_profile" src="'?><?php echo $rows['imgurl'];?><?php echo'" alt="">
                            </div>
                            <div class="wrap_profile_info">
                                <strong class="profile_name">'
?>
<?php 
                                echo $rows2['nickname'];
?>
<?php

                                echo '
                                </strong>
                                <p class="profile_id">m_studio.co.kr/@'
?>
<?php
                                echo $rows2['address'];
?>
<?php
                                echo '
                                </p>
                            </div>
                        </a>
                        <a href="../html/write.html" class="side_photo">
                            <button class="btn_request">사진전시</button>
                        </a>
                    </div>
                    <div class="side_menu">
                        <ul>
                            <li>
                                <a href="../html/m_studio.html?address='?><?php echo $rows2['address'];?><?php echo'" class="menu_li">
                                    <span class="bar_left"></span>
                                        미니사진관
                                    <span class="bar_right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/mypic.html" class="menu_li">
                                    <span class="bar_left"></span>
                                        저장된 사진들
                                    <span class="bar_right"></span>
                                </a>
                            </li>
                            <li class="hr">
                                <div class="border"></div>
                            </li>
                            <li class>
                                <a href="../html/index.html" class="menu_li">
                                    <span class="bar_left"></span>
                                        사진관 홈
                                    <span class="bar_right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/now.html" class="menu_li">
                                    <span class="bar_left"></span>
                                        사진관 나우
                                    <span class="bar_right"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="side_setting">
                            <a href="../html/setting.html">
                                <button>설정</button>
                            </a>
                            <a href="../php/logout.php">
                                <button class="logoutReq">로그아웃</button>
                            </a>
                        </div>
                    </div>   
                </div>
            </header>
        </html>';  
    }      
    else {
        echo 
        '<html>
            <header id="header">
                <div class="wrap_inner">
                    <div class="f_l">
                            <a href class="btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        <h1 id="logo" class="logo f_l">
                            <a href="../html/index.html">미니사진관</a>
                            </h1>
                    </div>
                    <div class="f_r">
                        <a href="../html/login.html" class="start">시작하기</a>
                        <!-- <div class="wrap_btn_search">
                            <button id="btnSearchMenu" class = "btn_search" type="button">검색</button>
                        </div> --!>
                    </div>
                </div>
                <div id="wrapSideMenu">
                    <div class="side_profile logout">
                        <div class="logo_service"></div>
                        <p class="slogan">
                            There are always two people in every picture <br>
                            the photographer and the viewer
                        </p>
                        <p class="slogan_writer">- Ansel Adams -</p>
                        <a href="login.html" id="side_login">
                            <button class="btn_request">사진관 이용하기</button>
                        </a>
                    </div>
                    <div class="side_menu">
                        <ul>
                            <li class="now_page">
                                <a href="../html/index.html" class="menu_li">
                                    <span class="bar_left"></span>
                                        사진관 홈
                                    <span class="bar_right"></span>
                                </a>
                            </li>
                            <li>
                                <a href="../html/now.html" class="menu_li">
                                    <span class="bar_left"></span>
                                        사진관 나우
                                    <span class="bar_right"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="find_user_setting side_finduser">
                            <a href="" class="find_user">계정을 잊어버리셨나요?</a>
                        </div>
                    </div>
                </div>
            </header>
        </html>';
    }
?>

