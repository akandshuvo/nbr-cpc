<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CPC</title>
  <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
  <!--:::::::::::::STYLE SHEET::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../vendor/mdl/material.css">
  <link rel='stylesheet prefetch' href='../css/dialog-polyfill.min.css'>
  <!--<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-pink.min.css">-->
  <link rel="stylesheet" href="../css/master.css">
  <link rel="stylesheet" href="../css/dropdown.css">
  <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
  <!--:::::::::::::BOOTSTRAP::::::::::::::::::::-->
  <!--::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <style>
        body{
            background-image: url("../resource/login.jpg");
            background-attachment: fixed;
            width: 100%;
            height: 100%;
            position: fixed;
        }
    </style>
</head>
<body>




    <!-- Always shows a header, even in smaller screens. -->
    <!-- Simple header with fixed tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
                mdl-layout--fixed-tabs">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">CREAT NEW USER</span>
                <div class="mdl-layout-spacer"></div>
    <!--USER NAME AFTER LOGIN-->
                <span class=""><?php echo $_SESSION['admin_name']?></span>
                <span><!-- Right aligned menu below button -->
                    <button id="demo-menu-lower-right"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="demo-menu-lower-right">
                        <li class="mdl-menu__item"><!-- Accent-colored raised button with ripple -->
                            <a href="../scripts/logout.php">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                                 LOG OUT
                                </button>
                            </a>
                        </li>

                    </ul>
                </span>
            </div>
            <!-- Tabs -->
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
                <a href="#fixed-tab-1" class="mdl-layout__tab is-active">cREATE NEW USER</a>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">CPC</span>
            <!-- Navigation -->
            <nav class="mdl-navigation">
              <?php
                include 'navigation.php';
              ?>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
              <div class="page-content">
                  <!-- Your content goes here -->
                  <div class="mdl-grid">
                      <div class="mdl-cell mdl-cell--3-col"></div>

                      <div class="mdl-cell mdl-cell--6-col">

                            <form action="newuser_create.php" method="post">
                                <div class="login1">
                                    <div class="login_upper1">
                                        <span class="mdl-layout-title login_title1">CREATE USER</span>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                          <input class="mdl-textfield__input" type="text" name="user_name" id="sample3">
                                          <label class="mdl-textfield__label" for="sample3">Name</label>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" name="user_id" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="agent_id">
                                            <label class="mdl-textfield__label" for="agent_id">ID</label>
                                            <span class="mdl-textfield__error">Input is not a number!</span>
                                        </div>

                                        <br>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="password" name="password" id="password">
                                            <label class="mdl-textfield__label" for="password">Password</label>
                                        </div>
                                        <br>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-0">
                                          <input type="radio" id="option-0" class="mdl-radio__button" name="level" value="1" checked>
                                          <span class="mdl-radio__label">Admin</span>
                                        </label>

                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                          <input type="radio" id="option-1" class="mdl-radio__button" name="level" value="2" checked>
                                          <span class="mdl-radio__label">Super Supervisor</span>
                                        </label>
                                        <br>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                          <input type="radio" id="option-2" class="mdl-radio__button" name="level" value="3">
                                          <span class="mdl-radio__label">Supervisor</span>
                                        </label>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                          <input type="radio" id="option-3" class="mdl-radio__button" name="level" value="4">
                                          <span class="mdl-radio__label">Agent</span>
                                        </label>
                                        <!-- Colored raised button -->
                                        <div class="login_btn1">
                                            <button type="submit" name="create" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                                CREATE
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
                            </div>
                      </div>
                  </div>
               </div>
            </section>
        </main>
    </div>


    <!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <script src="../scripts/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../scripts/dropdown.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src='../scripts/dialog-polyfill.min.js'></script>
    <script src="../vendor/mdl/material.js"></script>





</body>
</html>
