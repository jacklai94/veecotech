<?php
session_start();
include "../php/connection.php";
if($_POST["client_name"]){
  // echo "yes";
  $sql = "UPDATE manage_client SET client_Name='".$_POST["client_name"]."',
  client_Address='".$_POST["client_address"]."', client_Contact='".$_POST["client_contact"]."', client_Email='".$_POST["client_email"]."',
  client_Remark='".$_POST["client_remark"]."' WHERE client_ID='".$_SESSION["id"]."'";
  if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
  }
}
 ?>
<html>
  <head>
    <title>Setting - </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css File -->
    <link rel="stylesheet" type="text/css" href="../css/temp.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Font Ubuntu Latin -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <!-- Script File -->
    <script type="text/javascript" src="../script/jscript.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  </head>
  <body>
    <!-- Navigation Bar -->
    <header>
      <!-- Top Navigation Bar -->
      <ul class="nav-bar">
        <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href=""><i class="fa fa-bars"></i></a></li>
        <!-- <li><a href="client_dashboard.php">Home</a></li>
        <li><a href="client_quotation.php">Quotation</a></li>
        <li><a href="client_invoice.php">Invoices</a></li>
        <li><a href="client_maintenance.php">Maintenance</a></li>
        <li><a href="client_setting.php">Setting</a></li>
        <li style="float:right; margin-right:30px;"><a href="../php/logout.php">Logout</a></li> -->
      </ul>
      <!-- Side Navigation Bar -->
      <aside id="side_nav" class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a href="client_dashboard.php" class="brand-link">
          <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">Invoice_Sys</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="" class="d-block">Client</a>
            </div>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="client_dashboard.php"><i class="fa fa-home btn-icon btn-nav-icon" style="font-size:22px;"></i>Home</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="client_quotation.php"><i class="fas fa-file btn-icon btn-nav-icon"></i>Quotation</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="client_invoice.php"><i class="fas fa-receipt btn-icon btn-nav-icon"></i>Invoice</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="client_maintenance.php"><i class="fa fa-database btn-icon btn-nav-icon"></i>Maintenance</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
            <a href="client_setting.php"><i class="fas fa-cogs btn-icon btn-nav-icon"></i>Setting</a>
          </div>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:20px;">
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
      <!-- Details about client -->
      <div class="client-setting col-lg-12">
        <div class="client-logo col-lg-5">
          <label>Company Name</label>
          <img src="" id="client_logo" style="width:90%;height:20%;" alt="company logo">
          <br>
          <ul class="client-list">
            <hr></hr>
            <li>
              <label>Total Customer</label>
              <label class="list-no">1500</label>
              <br>
            </li>
            <hr></hr>
            <li>
              <label>Total Quotation</label>
              <label class="list-no">63</label>
              <br>
            </li>
            <hr></hr>
            <li>
              <label>Product Count</label>
              <label class="list-no">12</label>
              <br>
            </li>
            <hr></hr>
            <li>
              <button class="btn btn-upload" id="uploadbtn" style="display:none;"><i class="fas fa-upload btn-icon"></i>Upload Logo</button>
              <!-- <hr></hr> -->
              <button type="button" class="btn" onclick="openReset()" id="resetbtn"><i class="fa fa-key btn-icon"></i>Reset Password</button>
            </li>
          </ul>
        </div>
        <!-- Client Details ( HIDDEN WHEN EDIT ) -->
        <div id="client_setting_details" class="client-setting-detail col-lg-7">
          <?php
          include "../php/connection.php";
          $slc = "SELECT * FROM manage_client WHERE client_ID = '".$_SESSION["id"]."'";
          $res = mysqli_query($conn, $slc);
          if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
          }
          ?>
          <h3>Detail</h3>
          <!-- <div class="setting-detail-input" style="float:right;margin-right:100px;width:40%;height:auto;">
            <label class="setting-label" style="width:140px;"><b>Company Address</b></label><br>
              <input type="text" value="<?php //echo $row["client_Address"] ?>" class="setting-input" style="margin-top:10px;height:auto;width:100%;" readonly><br>
          </div> -->
          <!-- <div class="setting-detail-input">
            <label class="setting-label"><b>Company Name</b></label>
              <input type="text" value="<?php //echo $row["client_Name"] ?>" class="setting-input" readonly><br>
          </div> -->
          <div class="setting-detail-input">
            <label class="setting-label">Company Email</label><br>
              <input type="email" value="<?php echo $row["client_Email"] ?>" class="setting-input" readonly><br>
          </div>
          <hr></hr>
          <div class="setting-detail-input">
            <label class="Setting-label">Company Contact</label><br>
              <input type="text" value="<?php echo $row["client_Contact"] ?>" class="setting-input" readonly><br>
          </div>
          <hr></hr>
          <div class="setting-detail-input">
            <label class="setting-label">Company Address</label><br>
              <textarea rows="4" cols="20" class="setting-input" readonly><?php echo $row["client_Remark"] ?></textarea><br>
          </div>
          <hr></hr>
          <div class="setting-detail-input">
            <label class="setting-label">Company Remark</label><br>
              <textarea rows="4" cols="20" class="setting-input" readonly><?php echo $row["client_Remark"] ?></textarea>
          </div>
          <hr></hr>
          <div>
            <button type="button" class="btn btn-edit" onclick="openEdit()" id="editbtn"><i class="material-icons btn-icon" style="font-size:14px;">border_color</i>Edit</button>
          </div>
        </div>
        <!-- Edit Client Details Section hide -->
        <form action="" method="post">
          <div id="client_setting_edit" class="client-setting-edit col-lg-7">
            <div class="setting-left">
              <div class="setting-edit-input">
                <label for="client_name" class="setting-label">Company Name</label>
                  <input type="text" name="client_name" placeholder="Enter Name" value="<?php echo $row["client_Name"] ?>" class="setting-input" required><br>
              </div>
              <div class="Setting-edit-input">
                <label for="client_email" class="setting-label">Company Email</label>
                  <input type="email" name="client_email" placeholder="Enter Email" value="<?php echo $row["client_Email"] ?>" class="setting-input" required><br>
              </div>
              <div class="Setting-edit-input">
                <label for="client_contact" class="setting-label">Company Contact</label>
                  <input type="text" name="client_contact" value="<?php echo $row["client_Contact"] ?>" placeholder="Enter Company Contact" class="setting-input" required><br>
              </div>
              <div class="Setting-edit-input">
                <label class="setting-label">Company Remark</label><br>
                  <textarea name="client_remark" rows="4" cols="25" placeholder="Enter Remark"><?php echo $row["client_Remark"] ?></textarea>
              </div>
            </div>
            <div class="setting-right">
              <div class="setting-edit-input">
                <label for="client_name" class="setting-label">Company Address Line</label>
                  <input type="text" name="client_name" placeholder="Enter Name" value="<?php echo $row["client_Name"] ?>" class="setting-input" required><br>
              </div>
              <div class="setting-edit-input">
                <label for="client_name" class="setting-label">City</label>
                  <input type="text" name="client_name" placeholder="Enter Name" value="<?php echo $row["client_Name"] ?>" class="setting-input" required><br>
              </div>
              <div class="setting-edit-input">
                <label for="client_name" class="setting-label">Zip</label>
                  <input type="text" name="client_name" placeholder="Enter Name" value="<?php echo $row["client_Name"] ?>" class="setting-input" required><br>
              </div>
              <div class="setting-edit-input">
                <label for="client_name" class="setting-label">State</label>
                  <input type="text" name="client_name" placeholder="Enter Name" value="<?php echo $row["client_Name"] ?>" class="setting-input" required><br>
              </div>
              <div class="setting-edit-input">
                <label for="client_name" class="setting-label">Country</label>
                  <input type="text" name="client_name" placeholder="Enter Name" value="<?php echo $row["client_Name"] ?>" class="setting-input" required><br>
              </div>
            </div>
            <div class="setting-bottom" style="">
              <button type="submit" class="btn btn-save"><i class="fa fa-save btn-icon"></i>Save</button>
              <button type="submit" class="btn btn-back" onclick="closeEdit()"><i class="fa fa-arrow-left btn-icon"></i>Back</button>
            </div>
          </div>
        </form>
        <!-- Edit Client Password Section Hide -->
        <form action="" method="post">
          <div id="client_setting_reset" class="client-setting-reset col-lg-7">
            <div class="Setting-reset-input">
              <label for="client_userName" class="Setting-label">Company Username: </label><br>
              <input type="text" name="client_userName" placeholder="Enter Username" class="setting-input" readonly>
            </div>
            <hr></hr>
            <div class="Setting-reset-input">
              <label for="client_userName" class="Setting-label">Old Password: </label><br>
              <input type="text" name="client_userName" placeholder="Enter Old Password" class="setting-input" required>
            </div>
            <hr></hr>
            <div class="Setting-reset-input">
              <label for="client_userName" class="Setting-label">New Password: </label><br>
              <input type="text" name="client_userName" placeholder="Enter New Password" class="setting-input" required>
            </div>
            <hr></hr>
            <div class="Setting-edit-input">
              <label for="client_name" class="setting-label">Re-enter Password: </label><br>
              <input type="text" name="client_passWord" placeholder="Re-enter Password" class="setting-input" required>
            </div>
            <hr></hr>
            <div>
              <button type="submit" class="btn btn-reset" onclick="closeReset()"><i class="fa fa-refresh btn-icon"></i>Reset</button>
              <button type="submit" class="btn btn-back" onclick="closeReset()"><i class="fa fa-arrow-left btn-icon"></i>Back</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>