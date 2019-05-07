<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="../images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <title>Home</title>
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
        <a class="item active" href="../page/home.php"> Home </a>
        <a class="item" href="../page/category.html"> Categories </a>
        <a class="item" href="../page/product.html"> Products </a>
        <a class="item" href="../page/about.php"> About </a>
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
        <div id="particles-js"></div>
        <canvas id="c"></canvas>

        <div id="large-menu" class="ui borderless inverted large top fixed menu">
            <div class="title header noselect">
                <div class="ui red horizontal label">T</div>
                Template
            </div>
            <a class="item active" href="../page/home.php"> Home </a>
            <a class="item" href="../page/category.html"> Categories </a>
            <a class="item" href="../page/product.html"> Products </a>
            <a class="item" href="../page/about.php"> About </a>

            <?php
            if (!isset($_SESSION['username'])) {
                ?>
                <div id="header-button" class="right item">
                    <a class="ui inverted button" href="../page/login.php"> Log In </a>
                    <a class="ui inverted button" href="../page/signup.php"> Sign Up </a>
                </div>
                <?php
            } else {
                ?>
                <div id="header-button" class="right item">
                    <div class="ui icon top right pointing dropdown inverted button">
                        <i class="user icon"></i>
                        <?php echo '&nbsp;' . $_SESSION['username'] ?>
                        <div class="menu">
                            <a class="item" href="../page/upload.php"> Upload </a>
                            <a class="item" href="../page/logout.php"> Log Out </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <div id="small-menu" class="ui borderless inverted large top fixed menu">
            <a class="item">
                <i class="sidebar icon"></i>
            </a>
        </div>

        <div class="text">
            <h1 class="home-title noselect">Template</h1>
            <p class="home-sub-title noselect">The place to upload and find your favorite templates</p>
            <div class="ui primary button">
                Get Started
            </div>
        </div>

        <div class="step-background-left"></div>
        <div class="step-background-right"></div>

        <div class="step-content one">
            <div>
                <h1>Create an account</h1>
                <p>It is more convenient to save or upload your own templates! Signing up just requires with a few
                    information.</p>
                <div class="ui animated black button">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="step-content two">
            <div>
                <h1>Search templates</h1>
                <p>You can find your favorite templates by keywords or categories, or using both filters.</p>
                <div class="ui animated black button">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="step-content three">
            <div>
                <h1>Upload templates</h1>
                <p>This is one way to share your templates with others. </p>
                <div class="ui animated fade black button" onclick="window.location.reload()">
                    <div class="visible content">Home</div>
                    <div class="hidden content">
                        <i class="home icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="../js/particles.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="../js/semantic.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/home.js"></script>
</body>

</html>