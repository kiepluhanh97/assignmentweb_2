<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" type="text/css" href="../css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <title>About us</title>
</head>

<body>
    <div class="ui sidebar inverted vertical menu">
        <div class="title header">
            <div class="ui red horizontal label">T</div>
            Template
        </div>
        <div class="ui right item search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search...">
                <i class="search icon"></i>
            </div>
        </div>
        <a class="item" href="../page/home.php"> Home </a>
        <a class="item" href="../page/category.html"> Categories </a>
        <a class="item" href="../page/product.html"> Products </a>
        <a class="item active" href="../page/about.php"> About </a>
        <div class="align-center">
            <?php
            session_start();
            if (!isset($_SESSION['username'])) {
                ?>
                <a class="ui inverted button" href="../page/login.php"> Log In </a>
                <a class="ui inverted button" href="../page/signup.php"> Sign Up </a>
                <?php
            } else {
                ?>
                <a class="ui inverted button" href="../page/upload.php"> Upload </a>
                <a class="ui inverted button" href="../page/logout.php"> Log Out </a>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="pusher">
        <!-- <div id="large-menu" class="ui borderless inverted large top fixed menu">
            <div class="title header noselect">
                <div class="ui red horizontal label">T</div>
                Template
            </div>
            <a class="item" href="../page/home.php"> Home </a>
            <a class="item"> Categories </a>
            <a class="item" href="../page/about.php"> About </a>

            <div id="header-button" class="right item">
                <div class="ui inverted button"> Log In </div>
                <div class="ui inverted button"> Sign Up </div>
            </div>
        </div> -->

        <div id="small-menu" class="ui borderless inverted large top fixed menu">
            <a class="item">
                <i class="sidebar icon"></i>
            </a>
        </div>

        <div id="segment-one">
            <div class="container">
                <div class="column left"></div>
                <div class="column right">
                    <h1 class="segment-header noselect">
                        <span class="text-wrapper">
                            <span class="line line1"></span>
                            <span class="letters"> Website </span>
                        </span>
                    </h1>
                    <div class="content">
                        <div class="column small">
                            <h3> What is this? </h3>
                        </div>
                        <div class="column big">
                            The website where http & powerpoint templates are shared, all are free.!
                        </div>
                    </div>
                    <div class="content">
                        <div class="column small">
                            <h3> The purpose </h3>
                        </div>
                        <div class="column big">
                            Helping people choose the right temaplate and a tool for some people to share their template ideas, all templates will receive public comments from the community.
                            <br><br>
                            Help designers easily get more ideas from available templates.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="segment-two">
            <div class="container">
                <div class="column left">
                    <h1 class="segment-header noselect">
                        <span class="text-wrapper">
                            <span class="line line1"></span>
                            <span class="letters"> Us </span>
                        </span>
                    </h1>
                    <div class="content">
                        <div class="column small">
                            <h3> Members </h3>
                        </div>
                        <div class="column big">
                            Including Mai Duc Tu, Duc Linh, Le Duy Hien, and Tran Quoc Phap.
                        </div>
                    </div>
                    <div class="content">
                        <div class="column small">
                            <h3> History </h3>
                        </div>
                        <div class="column big">
                            From web programming class of Dr. Hieu
                            <br><br>
                            <!-- Meet The Greek was born from a long-held dream. The Mougios family have created a warm and
                            friendly restaurant restaurant. that provides good quality, simple, village-style food. It
                            honours Greek tradition but also introduces tasty innovations to this classic cuisine. -->
                        </div>
                    </div>
                </div>
                <div class="column right">
                </div>
            </div>
        </div>

        <button class="circular large ui icon button back-to-top" data-content="Back to top"
            data-position="right center" data-variation="inverted">
            <i class="icon angle double up"></i>
        </button>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="../js/semantic.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/about.js"></script>
</body>

</html>