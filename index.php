<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <!--:::::::::::::STYLE SHEET::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="vendor/mdl/material.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
    <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <script defer src="vendor/mdl/material.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="scripts/dropdown.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <style>
        body{
            background-image: url("resource/login.jpg");
            background-attachment: fixed;
            width: 100%;
            height: 100%;
            position: fixed;
        }
    </style>
</head>
<body>

    <form action="scripts/checklogin.php" method="post">
        <div class="login">
            <div class="login_upper">
                <span class="mdl-layout-title login_title">LOGIN</span>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="user_id" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="agent_id">
                    <label class="mdl-textfield__label" for="agent_id">Your ID</label>
                    <span class="mdl-textfield__error">Input is not a number!</span>
                </div>
                <br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" name="password" id="password">
                    <label class="mdl-textfield__label" for="password">Password</label>
                </div>
                <br>
                <!-- Colored raised button -->
                <div class="login_btn">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        LOGIN
                    </button>
                </div>
            </div>
        </div>

    </form>

    <div class="copyright">
        &copy;&nbsp;Digicon Technologies Ltd,&nbsp;2016
    </div>
    <div class="developer">
        developed by:&nbsp;shovon rahman shuvo
    </div>>

</body>
</html>
