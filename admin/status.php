<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:../index.php');
}
?>
<?php
  include_once '../dbconfig.php';
?>
<!doctype html>
<html lang=''>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="30" >
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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs" id="refresh">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">FILE STATUS</span>
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
            <a href="#fixed-tab-1" class="mdl-layout__tab">STATUS</a>
              <a href="#fixed-tab-2" class="mdl-layout__tab ">NEW</a>
                <a href="#fixed-tab-3" class="mdl-layout__tab is-active">Processing</a>
                  <a href="#fixed-tab-4" class="mdl-layout__tab ">COMPLETE</a>
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
      <!--Floating button-->
        <div class="floating_btn">
          <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" name="btn-delete" id="btn-delete">
            <i class="material-icons">delete</i>
          </button>
        </div>
      <!--Floating button-->
<!--UPLOAD-->
<section class="mdl-layout__tab-panel " id="fixed-tab-1">
  <div class="page-content">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col"></div>
      <div class="mdl-cell mdl-cell--4-col"></div>
      <div class="mdl-cell mdl-cell--4-col"></div>
    </div>
  </div>
</section>
<!--NEW-->
      <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--11-col">
                  <div class="" id="refresh">
                    <table class="table table-bordered text-center">
                      <tr>
                        <td  class="table_header" style="width:50px; background-color:#fff;">
                          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                          <input type="checkbox" name="select-all" id="select-all"  class="mdl-checkbox__input"/>
                          </label>
                        </td>
                        <td  class="table_header">File Name</td>
                        <td  class="table_header">Status</td>
                        <td  class="table_header">Action</td>
                      </tr>
                    <?php
                      include_once "../config.php";
                      if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $name=$_GET['name'];
                        if(unlink('../docs/'.$_GET['name'])){
                          $stmt=$db->prepare("delete from test where id='$id'");
                          $stmt->execute();
                        }
                      }
                      $sql="SELECT * FROM test WHERE status='0'";
                      $result_set=mysql_query($sql);
                      while($row=mysql_fetch_array($result_set))
                      {
                        ?>
                            <tr id="<?php echo $row["id"]; ?>">
                            <td>
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                <input type="checkbox" name="id[]"  value="<?php echo $row["id"]; ?>" class="mdl-checkbox__input" />
                              </label>
                            </td>
                            <td>
                              <?php echo $row['name'] ?>
                            </td>
                            <td>
                                <?php
                                  if($row['status']==0){
                                 ?>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                                      NEW
                                    </button>
                                <?php
                                  }
                                ?>
                            </td>
                            <td>
                              <a href="?name=<?php echo $row['name'] ?>&id=<?php echo $row['id'] ?>">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                  DELETE
                                </button>
                              </a>
                            </td>
                            </tr>
                            <?php
                      }
                    ?>
                  </table>
                  </div>
                </div>
            </div>
          </div>
      </section>
<!--PROCESSING-->
      <section class="mdl-layout__tab-panel is-active" id="fixed-tab-3">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--11-col">
                  <div class="" id="refresh">
                    <table class="table table-bordered text-center">
                      <tr>
                        <td  class="table_header" style="width:50px; background-color:#fff;">
                          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                          <input type="checkbox" name="select-all" id="select-all"  class="mdl-checkbox__input"/>
                          </label>
                        </td>
                        <td  class="table_header">File Name</td>
                        <td  class="table_header">Status</td>
                        <td  class="table_header">Action</td>
                      </tr>
                    <?php
                      include_once "../config.php";
                      if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $name=$_GET['name'];
                        if(unlink('../docs/'.$_GET['name'])){
                          $stmt=$db->prepare("delete from test where id='$id'");
                          $stmt->execute();
                        }
                      }
                      $sql="SELECT * FROM test WHERE status='1'";
                      $result_set=mysql_query($sql);
                      while($row=mysql_fetch_array($result_set))
                      {
                        ?>
                            <tr id="<?php echo $row["id"]; ?>">
                            <td>
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                <input type="checkbox" name="id[]"  value="<?php echo $row["id"]; ?>" class="mdl-checkbox__input" />
                              </label>
                            </td>
                            <td>
                              <?php echo $row['name'] ?>
                            </td>
                            <td>
                                <?php
                                  if($row['status']==1){
                                ?>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                                      Processing
                                    </button>
                                <?php
                                  }
                                ?>
                            </td>
                            <td>
                              <a href="?name=<?php echo $row['name'] ?>&id=<?php echo $row['id'] ?>">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                  DELETE
                                </button>
                              </a>
                            </td>
                            </tr>
                            <?php
                      }
                    ?>
                  </table>
                  </div>
                </div>
            </div>
          </div>
      </section>
<!--COMPLETE-->
      <section class="mdl-layout__tab-panel" id="fixed-tab-4">
          <div class="page-content">
              <!-- Your content goes here -->
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--11-col">
                  <div class="" id="refresh">
                    <table class="table table-bordered text-center">
                      <tr>
                        <td  class="table_header" style="width:50px; background-color:#fff;">
                          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                          <input type="checkbox" name="select-all" id="select-all"  class="mdl-checkbox__input"/>
                          </label>
                        </td>
                        <td  class="table_header">File Name</td>
                        <td  class="table_header">Status</td>
                        <td  class="table_header">Action</td>
                      </tr>
                    <?php
                      include_once "../config.php";
                      if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $name=$_GET['name'];
                        if(unlink('../docs/'.$_GET['name'])){
                          $stmt=$db->prepare("delete from test where id='$id'");
                          $stmt->execute();
                        }
                      }
                      $sql="SELECT * FROM test WHERE status='2'";
                      $result_set=mysql_query($sql);
                      while($row=mysql_fetch_array($result_set))
                      {
                        ?>
                            <tr id="<?php echo $row["id"]; ?>">
                            <td>
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                <input type="checkbox" name="id[]"  value="<?php echo $row["id"]; ?>" class="mdl-checkbox__input" />
                              </label>
                            </td>
                            <td>
                              <?php echo $row['name'] ?>
                            </td>
                            <td>
                                <?php
                                  if($row['status']==2){
                                ?>
                                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                                    Complete
                                  </button>
                                <?php
                                  }
                                ?>
                            </td>
                            <td>
                              <a href="?name=<?php echo $row['name'] ?>&id=<?php echo $row['id'] ?>">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                  DELETE
                                </button>
                              </a>
                            </td>
                            </tr>
                            <?php
                      }
                    ?>
                  </table>
                  </div>
                </div>
            </div>
          </div>
      </section>
    </main>
</div>


<!--:::::::::::::SCRIPTS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../scripts/dropdown.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.js"></script>
<script src='../scripts/dialog-polyfill.min.js'></script>
<script src="../vendor/mdl/material.js"></script>
<script>
 $(document).ready(function(){
      $('#btn-delete').click(function(){
           if(confirm("Are you sure you want to delete this?"))
           {
                var id = [];
                $(':checkbox:checked').each(function(i){
                     id[i] = $(this).val();
                });
                if(id.length === 0) //tell you if the array is empty
                {
                     alert("Please Select atleast one checkbox");
                }
                else
                {
                     $.ajax({
                          url:'delete.php',
                          method:'POST',
                          data:{id:id},
                          success:function()
                          {
                               for(var i=0; i<id.length; i++)
                               {
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');
                               }
                          }
                     });
                }
           }
           else
           {
                return false;
           }
      });
 });
</script>
<script type="text/javascript">
  // Listen for click on toggle checkbox
  $('#select-all').click(function(event) {
      if(this.checked) {
          // Iterate each checkbox
          $(':checkbox').each(function() {
              this.checked = true;
          });
      }
  });
</script>


</body>
<html>
