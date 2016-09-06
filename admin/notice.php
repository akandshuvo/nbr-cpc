<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:../index.php');
}

include_once '../dbconfig.php';
?>
<!DOCTYPE html>
<html>
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
  <body>


    <!-- Always shows a header, even in smaller screens. -->
    <!-- Simple header with fixed tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
                mdl-layout--fixed-tabs">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">NOTICE</span>
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
                <a href="#fixed-tab-1" class="mdl-layout__tab is-active">NOTICE</a>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">BexCOM</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
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
                      <div class="mdl-cell mdl-cell--4-col"></div>
                      <div class="mdl-cell mdl-cell--3-col">
                        <form action="upload/notice_post.php" method="post">
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="title" required="">
                            <label class="mdl-textfield__label" for="sample3">TITLE</label>
                          </div>
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" rows= "6" id="sample5" name="description" required></textarea>
                            <label class="mdl-textfield__label" for="sample5">POST YOUR NOTICE</label>
                          </div>
                          <button type="submit" name="notice"  class="pull-right mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">POST</button>
                        </form>
                      </div>


                  </div>
                  <div class="mdl-grid">

                      <?php
                        $sql="SELECT * FROM notice ORDER by id DESC ";
                        $result_set=mysql_query($sql);
                        while($row=mysql_fetch_array($result_set))
                        {
                          ?>
                          <div class="mdl-cell mdl-cell--4-col">
                              <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title">
                                  <h2 class="mdl-card__title-text"><?php echo $row['title']; ?></h2>
                                </div>

                                <div class="mdl-card__supporting-text">
                                  <div class="description">
                                    <?php echo $row['description']; ?>
                                  </div>
                                </div>

                                <div class="mdl-card__actions mdl-card--border">
                                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    POSTED ON:&nbsp;<?php echo $row['date']; ?>
                                  </a>
                                </div>
                                <div class="mdl-card__menu">
                                  <button  type="button" class="show-modal<?php echo $row['id']?> mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored mdl-js-ripple-effect">
                                    <i class="material-icons">&#xE92B;</i>
                                  </button>
                                  <dialog class="mdl-dialog">
                                    <div class="mdl-dialog__content">
                                      <h3>ARE YOU SURE?</h3><br>
                                      <button type="button"  onclick="deletedata('<?php echo $row['id'] ?>')" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">DELETE</button>
                                      <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored exit">close</button>
                                    </div>
                                  </dialog>
                                </div>
                              </div>
                            </div>
                          <?php
                      include 'delete_modal_notice.php';  }
                        ?>

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
