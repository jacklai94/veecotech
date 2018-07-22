<?php
session_start();
include "../php/connect.php";

if($_POST["updatebtn"]){
  echo $upd = "UPDATE manage_client SET client_Name = '".$_POST["edit_name"]."', client_Address = '".$_POST["edit_address"]."', client_Contact = '".$_POST["edit_contact"]."', client_Email = '".$_POST["edit_email"]."' WHERE client_ID='".$_GET["client_ID"]."'";
  if (mysqli_query($conn, $upd)) {
    $upd2 = "UPDATE login SET userName = '".$_POST["edit_userName"]."', passWord = '".$_POST["edit_passWord"]."' WHERE client_ID = '".$_GET["client_ID"]."'";
    if (mysqli_query($conn, $upd2)) {
      alert("Changed had updated");
    }
  }
}
mysqli_close($conn);
?>

<html>
  <head>
    <title>Veecotech- Edit Client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css File -->
    <link rel="stylesheet" type="text/css" href="../css/temp.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script type="text/javascript" src="../script/jscript.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  </head>
  <body>
    <header>
      <!-- Top Navigation -->
      <div>
        <ul class="nav-bar">
          <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href=""><i class="fa fa-bars"></i></a></li>
          <!-- <li><a href="admin_manage.php">Manage</a></li> -->
        </ul>
      </div>
      <!-- Side Navigation -->
      <aside id="side_nav" class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a href="admin_dashboard.php" class="brand-link">
          <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">Veecotech</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../dist/img/user1-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">jack Lai</a>
            </div>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="admin_dashboard.php"><i class="fa fa-home btn-icon btn-nav-icon" style="font-size:22px;"></i>Home</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="admin_manage.php"><i class="fa fa-users btn-icon btn-nav-icon"></i>Manage</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:19px;">
            <a href="../php/logout.php"><i class="fa fa-sign-out btn-icon btn-nav-icon"></i>Log out</a>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    </header>
    <!-- Main -->
    <div class="main">
      <!-- Edit Container -->
      <div class="edit-container">
        <div class="edit-header">
          <?php
          include "../php/connect.php";

          $slc = "SELECT client_Name FROM manage_client WHERE client_ID = '".$_GET["client_ID"]."'";
          $res = mysqli_query($conn, $slc);
          if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)){
              echo "<h3>";
              echo $row["client_Name"]."'s Details";
              echo "</h3>";
            }
          }
          mysqli_close($conn);
          ?>
        </div>
        <form action="a_edit.php" method="post">
          <div class="edit-content">
            <?php
            include "../php/connect.php";

            $slc = "SELECT * FROM manage_client WHERE client_ID = '".$_GET["client_ID"]."'";
            $result = mysqli_query($conn, $slc);
            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
            }

            $slc2 = "SELECT * FROM login WHERE client_ID = '".$_GET["client_ID"]."'";
            $result2 = mysqli_query($conn, $slc2);
            if (mysqli_num_rows($result2) > 0) {
              $lg = mysqli_fetch_assoc($result2);
            }
            ?>
            <p style="color:red;">*** Address need user to manually enter ***</p>
            <div class="edit-input">
              <label for="client_name" class="edit-label">Company Name: </label>
              <input type="text" name="edit_name" placeholder="Enter Name" class="edit-text" value="<?php echo $row["client_Name"]; ?>" required><br>
            </div
            <div class="edit-input">
              <label for="client_email" class="edit-label">Company Email: </label>
              <input type="email" name="edit_email" placeholder="Enter Email" class="edit-text" value="<?php echo $row["client_Email"]; ?>"  required><br>
            </div>
            <div class="edit-input">
              <label for="client_contact" class="edit-label">Company Contact: </label>
              <input type="text" name="edit_contact" placeholder="Enter Company Contact" class="edit-text" value="<?php echo $row["client_Contact"]; ?>"  required><br>
            </div>
            <div class="edit-input">
              <label for="client_userName" class="edit-label">Company Username: </label>
              <input type="text" name="edit_userName" placeholder="Enter Username" class="edit-text" value="<?php echo $lg["userName"]; ?>"  required>
            </div>
            <div class="edit-input">
              <label for="client_name" class="edit-label">Company Password: </label>
              <input type="text" name="edit_passWord" placeholder="Enter Password" class="edit-text" value="<?php echo $lg["passWord"]; ?>"  required>
            </div>
            <div>
              <button type="submit" class="btn btn-update" name="updatebtn"><i class="fas fa-redo btn-icon"></i>Update</button>
            </div>
          </div>
          <?php
          mysqli_close($conn);
          ?>
        </form>
      </div>
    </div>
  </body>
</html>