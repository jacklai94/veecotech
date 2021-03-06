<?php
session_start();
 ?>
<html>
  <head>
    <title>Quotation - </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css File -->
    <link rel="stylesheet" type="text/css" href="../css/temp.css">
    <!-- Font-Awesome -->
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
        <a href="index3.html" class="brand-link">
          <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: 5"> <!--opacity* need to change for all to 5-->
          <span class="brand-text font-weight-light">Veecotech</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="" class="d-block">Admin</a>
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
      <div class="q-container">
        <!-- Filter part -->
        <div class="filter-container">
          <h5><b>Filter</b></h5>
          <div class="filter-input">
            <label>Customer Name</label>
            <input type="text" placeholder="Enter Customer Name" id="cust_name">
          </div>
          <div class="filter-input">
            <label>Date</label>
            <input type="date"> To <input type="date">
          </div>
          <div class="filter-input">
            <label>Quotation No</label>
            <input type="text" placeholder="Enter Quotation Number" name="quotation_no" id="quotation_no">
          </div>
          <!-- Status: <input type="radio" value="draft" id="draft"><input type="radio" value=""> -->
          <div class="filter-input">
            <label>Amount</label>
            <input type="number" placeholder="Enter Amount" id="cust_amount">
          </div>
          <div class="filter-btn">
            <button type="button" class="btn btn-filter"><i class="fa fa-filter btn-icon"></i>Filter</button>
            <button type="submit" class="btn btn-create" onclick="location.href='client_quotation_create.php'"><i class="fa fa-file btn-icon"></i>Create</button>
          </div>
        </div>
        <!-- Table part, go to detail when pressed -->
        <div style="padding: 15px;">
          <table class="table table-striped q-table">
            <thead>
              <tr>
                <th>Status</th>
                <th>Date</th>
                <th>Quotation No</th>
                <th>Customer Name</th>
                <th>Amount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Details of customer from database -->
              <?php
              include "../php/connection.php";
              $qslc = "SELECT * FROM client_quotation WHERE client_ID = '".$_SESSION["id"]."'";
              $qres = mysqli_query($conn, $qslc);
              if (mysqli_num_rows($qres) > 0) {
                while($qrow = mysqli_fetch_assoc($qres)){
                  $cslc = "SELECT * FROM client_customer WHERE customer_ID = '".$qrow["customer_ID"]."'";
                  $cres = mysqli_query($conn, $cslc);
                  if (mysqli_num_rows($cres) > 0) {
                    while($crow = mysqli_fetch_assoc($cres)){
                      echo "<tr>";
                      echo "<td>";
                      echo "<label><i class='fa fa-file-text btn-icon'></i><b>Draft</b></label>";
                      echo "</td>";
                      echo "<td>";
                      echo "<input type='text' value='".$qrow["quotation_Date"]."' readonly>";
                      echo "</td>";
                      echo "<td>";
                      echo "<input input type='text' value='".$qrow["quotation_No"]."' readonly>";
                      echo "</td>";
                      echo "<td>";
                      echo "<input type='text' value='".$crow["customer_Name"]."' readonly>";
                      echo "</td>";
                      echo "<td>";
                      echo "<input type='text' value='".$qrow["quotation_Amount"]."' readonly>";
                      echo "</td>";
                      echo "<td>";
                      echo "<div class='q-drop'>";
                      echo "<button class='btn btn-info btn-drop'>Action</button>";
                      echo "<div class='q-drop-content'>";
                      echo "<a href='client_quotation_view.php'>View</a>";
                      echo "<a href='client_quotation_edit.php'>Edit</a>";
                      echo "<a href=''>Print</a>";
                      echo "<a href='client_invoice_view.php'>Convert to Invoices</a>";
                      echo "<a href=''>Export To PDF</a>";
                      echo "<a href='../php/delete.php?quotation_ID=".$qrow["quotation_ID"]."'>Delete</a>";
                      echo "</div>";
                      echo "</div>";
                      echo "</td>";
                      echo "</tr>";
                    }
                  }
                }
              }
              mysqli_close($conn);
              ?>
              <!-- <tr>
                <td>
                  <label><i class="fa fa-file-text btn-icon"></i><b>Draft</b></label>
                </td>
                <td>
                  <input type="text" value="2018/02/03" readonly>
                </td>
                <td>
                  <input type="text" value="123123" readonly>
                </td>
                <td>
                  <input type="text" value="ching chong" readonly>
                </td>
                <td>
                  <input type="text" value="10000" readonly>
                </td>
                <td>
                  <div class="q-drop">
                    <button class="btn btn-info btn-drop">Action</button>
                    <div class="q-drop-content">
                      <a href="">View</a>
                      <a href="">Edit</a>
                      <a href="">Print</a>
                      <a href="">Convert to Invoices</a>
                      <a href="">Export To PDF</a>
                      <a href="">Delete</a>
                    </div>
                  </div>
                </td>
              </tr> -->
              <!-- <tr>
                <td>
                  <label><i class="fa fa-file-text btn-icon"></i><b>Draft</b></label>
                </td>
                <td>
                  <input type="text" value="2018/02/03" readonly>
                </td>
                <td>
                  <input type="text" value="123123" readonly>
                </td>
                <td>
                  <input type="text" value="ching chong" readonly>
                </td>
                <td>
                  <input type="text" value="10000" readonly>
                </td>
                <td>
                  <div class="q-drop">
                    <button class="btn btn-info btn-drop">Action</button>
                    <div class="q-drop-content">
                      <a href="">View</a>
                      <a href="">Edit</a>
                      <a href="">Print</a>
                      <a href="">Convert to Invoices</a>
                      <a href="">Export To PDF</a>
                      <a href="">Delete</a>
                    </div>
                  </div>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>