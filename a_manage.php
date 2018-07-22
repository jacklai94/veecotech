<?php
session_start();
include "../php/connection.php";
// echo $_SESSION["status"];
mysqli_close($conn);
?>
<html>
  <head>
    <title>Manage - Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css File -->
    <link rel="stylesheet" type="text/css" href="../css/temp.css">
    <!-- Font-Awesome -->
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
    <header>
      <!-- Top Navigation -->
      <div>
        <ul class="nav-bar">
          <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href=""><i class="fa fa-bars"></i></a></li>

        </ul>
      </div>
      <!-- Side Navigation -->
      <aside id="side_nav" class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
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
              <a href="#" class="d-block">Alexander Pierce</a>
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
    <!-- Main Body -->
    <div class="main">
      <!-- Filter -->
      <div class="filter-container">
        <h5><b>Filter</b></h5>
        <div class="filter-content">
          <label><b>Company Name</b></label>
          <input type="text" placeholder="Enter Company Name" name="cmpy_name" id="filter_input" onkeyup="filter()">
          <button type="submit" class="btn btn-filter" id="filter_tbl" style="margin-top:0px;width:100px;"><i class="fa fa-filter btn-icon"></i>Filter</button>
        </div>
      </div>
      <!-- CreateNew Pop-Up Modal-->
      <div onload="noModal()">
        <form action="../php/admin_add_client.php" method="post">
          <div id="add_modal" class="add-modal">
            <div class="add-modal-content">
              <div class="add-modal-header">
                <h4>Create New Client<i class="fa fa-times-circle header-close" onclick="closeModal()"></i>
                </h4>
              </div>
              <div style="margin-top:60px;">
                <div class="modal-box-input">
                  <label for="client_name" class="modal-box-label">Company Name: </label>
                  <input type="text" name="client_name" placeholder="Enter Name" class="modal-box-text" required><br>
                </div>
                <div class="modal-box-input">
                  <label for="client_email" class="modal-box-label">Company Email: </label>
                  <input type="email" name="client_email" placeholder="Enter Email" class="modal-box-text" required><br>
                </div>
                <div class="modal-box-input">
                  <label for="client_contact" class="modal-box-label">Company Contact: </label>
                  <input type="text" name="client_contact" placeholder="Enter Company Contact" class="modal-box-text" required><br>
                </div>
                <div class="modal-box-input">
                  <label for="client_userName" class="modal-box-label">Company Username: </label>
                  <input type="text" name="client_userName" placeholder="Enter Username" class="modal-box-text" required>
                </div>
                <div class="modal-box-input">
                  <label for="client_name" class="modal-box-label">Company Password: </label>
                  <input type="text" name="client_passWord" placeholder="Enter Password" class="modal-box-text" required>
                </div>
                <div style="margin-top:60px;">
                  <button type="submit" class="btn btn-add"><i class="fa fa-user-plus btn-icon"></i>Add</button>&nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-close" onclick="closeModal()"><i class="fa fa-close btn-icon"></i>Close</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="manage-container">
        <button id="add_btn" onclick="openModal()" class="btn btn-create"><i class="fa fa-industry btn-icon"></i>Create</button> <!-- button for modal -->
        <!-- Management table -->
        <p style="color:red;">***Note : checkbox is for delete function only !***</p>
        <div>
          <!-- Action button on the first column -->
          <table class="table table-striped" id="table_client">
            <thead>
              <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>
              </tr>
            </thead>
            <!-- PHP Select SQL with Edit and Delete-->
            <tbody>
            <?php
            include "../php/connection.php";
            $slc = "SELECT * FROM manage_client";
            $res = mysqli_query($conn, $slc);
            if (mysqli_num_rows($res) > 0) {
              while($row = mysqli_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>";
                echo "<input type='checkbox'>";
                echo "</td>";
                echo "<td>";
                echo $row["client_Name"];
                echo "</td>";
                echo "<td>";
                echo $row["client_Address"];
                echo "</td>";
                echo "<td>";
                echo $row["client_Email"];
                echo "</td>";
                echo "<td>";
                echo $row["client_Contact"];
                echo "</td>";
                echo "<td>";
               
                echo "<a href='admin_edit.php?client_ID=".$row["client_ID"]."'><i class='fa fa-edit' style='font-size: 32px;'></i></a>";
                // prompt modal box
                echo "&nbsp;";
                echo "<a href='../php/delete.php?client_ID=".$row["client_ID"]."'><i class='fa fa-trash' style='font-size: 32px;'></i></a>";
                echo "</td>";
                echo "</tr>";
              }
            }
            mysqli_close($conn);
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>a