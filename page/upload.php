<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="../images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/upload.css">
    <title>Upload</title>
</head>

<body>
    <?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location:home.php");
        }
    ?>
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
        <div id="large-menu" class="ui borderless inverted large top fixed menu">
            <div class="title header noselect">
                <div class="ui red horizontal label">T</div>
                Template
            </div>
            <a class="item" href="../page/home.php"> Home </a>
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

        <div class="container">
            <form class="ui form" method="POST" enctype="multipart/form-data" id="upload-form">
                <h2 class="ui center aligned header"> Template information </h2>
                <br>
                <div class="field">
                    <label>Template name</label>
                    <input type="text" name="name" placeholder="Template name">
                </div>
                <div class="field">
                    <label>Description</label>
                    <input type="text" name="description" placeholder="Description">
                </div>
                <div class="inline fields">
                    <label for="type">Type</label>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="type" checked="" value="0">
                            <label>Web</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="type" value="1">
                            <label>Power point</label>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>File</label>
                    <input id="file" type="file" />
                </div>
                <div class="field">
                    <label>Image</label>
                    <input id="image" type="file" />
                    <img class="ui image" alt="">
                </div>
                <button class="ui primary ok inverted button" type="submit" name="upload">Upload</button>
            </form>
        </div>

        <div class="ui mini successful modal">
            <div class="ui icon header">Congratulations</div>
            <div class="content">
                <p>Your template has uploaded successfully</p>
            </div>
            <div class="actions">
                <a class="ui green cancel inverted button" href="../page/upload.php">Okay</a>
            </div>
        </div>
        
        <div class="ui mini failed modal">
            <div class="ui icon header">Error</div>
            <div class="content"></div>
            <div class="actions">
                <div class="ui red cancel inverted button">Okay</div>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="../js/semantic.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/upload.js"></script>
    <!-- <script src="../js/jquery.uploadfile.js"></script> -->
</body>

</html>