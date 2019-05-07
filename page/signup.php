<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" type="text/css" href="../css/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <title>Sign Up</title>
</head>

<body>
    <?php
        if (isset($_SESSION['username'])) {
            header("Location:home.php");
        }
        if (isset($_POST['signup'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $Connection = mysqli_connect('localhost', 'root', '123456', 'assignment2_1');
            mysqli_set_charset($Connection, 'utf8');
            $Query = "INSERT INTO user(userUsername, userPassword) VALUES('$username', '$password')";
            $Execute = mysqli_query($Connection, $Query);

            if ($Execute) {
                ?>
                <div class="ui mini successful modal">
                    <div class="ui icon header">Congratulations</div>
                    <div class="content">
                        <p>Your account has been created successfully</p>
                    </div>
                    <div class="actions">
                        <a class="ui green cancel inverted button" href="../page/home.php">Okay</a>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="ui mini failed modal">
                    <div class="ui icon header">Error</div>
                    <div class="content">
                        <p>Username is already existed</p>
                    </div>
                    <div class="actions">
                        <a class="ui red cancel inverted button" href="../page/signup.php">Okay</a>
                    </div>
                </div>
                <?php
            }
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
            <a class="ui inverted button" href="../page/login.php"> Log In </a>
            <a class="ui inverted button" href="../page/signup.php"> Sign Up </a>
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

            <div id="header-button" class="right item">
                <a class="ui inverted button" href="../page/login.php"> Log In </a>
                <a class="ui inverted button" href="../page/signup.php"> Sign Up </a>
            </div>
        </div>

        <div id="small-menu" class="ui borderless inverted large top fixed menu">
            <a class="item">
                <i class="sidebar icon"></i>
            </a>
        </div>

        <div class="container">
            <form class="ui form" method="POST">
                <i class="massive user circle icon"></i>
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="field">
                    <label>Repeat Password</label>
                    <input type="password" name="repassword" placeholder="Repeat Password">
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" class="hidden">
                        <label>I agree to the terms and conditions</label>
                    </div>
                </div>
                <button class="ui primary ok inverted button" type="submit" name="signup">Sign Up</button>
                <div class="text-center">
                    Already have an account?
                    <a href="../page/login.php">Log In</a>
                </div>
            </form>
        </div>

        <div class="ui mini modal">
            <div class="ui icon header">Error</div>
            <div class="content">
                <p>Username or Password is invalid</p>
            </div>
            <div class="actions">
                <div class="ui red cancel inverted button">Okay</div>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="../js/semantic.js"></script>
    <script src="../js/common.js"></script>
    <script src="../js/signup.js"></script>
</body>

</html>