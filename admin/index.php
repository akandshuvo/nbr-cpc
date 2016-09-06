<?php
    session_start();
    if(!isset($_SESSION['admin_id'])){
        header('location:../index.php');
    }
?>

<!doctype html>
<html lang=''>
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
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">BexCOM</span>
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
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active"></a>
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
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="text-center">
                            <div class="welcome">WELCOME TO BEXIMCO COMMUNICATION</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../scripts/dropdown.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.2/dialog-polyfill.min.js'></script>
<script src="../vendor/mdl/material.js"></script>
</body>
<html>
