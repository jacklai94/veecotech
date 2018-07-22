<?php
session_start();
 ?>
<html>
  <head>
    <title>Invoice - </title>
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
      <div class="i-container">
        <!-- Filter  -->
        <div class="filter-container">
          <h5><b>Filter</b></h5>
          <div class="filter-input">
            <label>Customer Name</label>
            <input type="text" placeholder="Enter Customer Name" name="cust_name" id="cust_name">
          </div>
          <div class="filter-input">
            <label>Date</label>
            <input type="date"> To <input type="date">
          </div>
          <div class="filter-input">
            <label>Invoice No</label>
            <input type="text" placeholder="Enter Invoice Number" name="invoice_no" id="invoice_no">
          </div>
          <div class="filter-btn">
            <button type="submit" class="btn btn-filter"><i class="fa fa-filter btn-icon"></i>Filter</button>
            <button type="button" class="btn btn-add" onclick="location.href='client_invoice_create.php'"><i class="fa fa-file btn-icon"></i>Create</button>
          </div>
        </div>
        <!-- Invoice Content -->
        <div style="padding: 15px;">
          <!-- Tabs for Tables -->
          <div class="i-tabs-content">
            <button class="btn i-tab" onclick="table_all()">All</button>
            <button class="btn i-tab" onclick="table_draft()">Draft</button>
            <button class="btn i-tab" onclick="table_paid()">Paid</button>
            <button class="btn i-tab" onclick="table_overdue()">Overdue</button>
            <button class="btn i-tab" onclick="table_partial()">Partial</button>
          </div>
            <!-- Table -->
          <div id="all_table" class="i-table-container" style="display:block;">
            <!-- Show All Table -->
            <table class="table table-striped i-table">
              <thead>
                <th>Status</th> <!-- Draft / Paid / Partial / Overdue -->
                <th>Date</th>
                <th>Invoice No</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Balance</th>
                <th>Action</th> <!-- Edit / Duplicate / Export PDS / Delete / Print -->
              </thead>
              <tbody>
                <!-- Details -->
                <tr>
                  <td>
                    <label class="i-paid"><b>Paid</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-30" readonly>
                  </td>
                  <td>
                    <input type="text" value="11123" readonly>
                  </td>
                  <td>
                    <input type="text" value="chong" readonly>
                  </td>
                  <td>
                    <input type="text" value="10000" readonly>
                  </td>
                  <td>
                    <input type="text" value="0" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="client_invoice_view.php">View</a>
                        <a href="client_invoice_edit.php">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="../php/delete.php?invoice_ID='".."'">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="i-overdue"><b>OverDue</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-20" readonly>
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
                    <input type="text" value="2000" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="i-partial"><b>Partial</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-30" readonly>
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
                    <input type="text" value="2000" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="i-draft"><b>Draft</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-30" readonly>
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
                    <input type="text" value="2000" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <div id="draft_table" class="i-table-container">
            <!-- Show Draft Table -->
            <table class="table table-striped i-table" >
              <thead>
                <th>Status</th> <!-- Draft / Paid / Partial / Overdue -->
                <th>Date</th>
                <th>Invoice No</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Balance</th>
                <th>Action</th> <!-- Edit / Duplicate / Export PDS / Delete / Print -->
              </thead>
              <tbody>
                <!-- Details -->
                <tr>
                  <td>
                    <label class="i-draft"><b>Draft</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-30" readonly>
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
                    <input type="text" value="2000" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <div id="paid_table" class="i-table-container">
            <!-- Show Paid Table -->
            <table class="table table-striped i-table" >
              <thead>
                <th>Status</th> <!-- Draft / Paid / Partial / Overdue -->
                <th>Date</th>
                <th>Invoice No</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Balance</th>
                <th>Action</th> <!-- Edit / Duplicate / Export PDS / Delete / Print -->
              </thead>
              <tbody>
                <!-- Details -->
                <tr>
                  <td>
                    <label class="i-paid"><b>Paid</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-30" readonly>
                  </td>
                  <td>
                    <input type="text" value="11123" readonly>
                  </td>
                  <td>
                    <input type="text" value="chong" readonly>
                  </td>
                  <td>
                    <input type="text" value="10000" readonly>
                  </td>
                  <td>
                    <input type="text" value="0" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <div id="overdue_table" class="i-table-container">
            <!-- Show Overdue Table -->
            <table class="table table-striped i-table" >
              <thead>
                <th>Status</th> <!-- Draft / Paid / Partial / Overdue -->
                <th>Date</th>
                <th>Invoice No</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Balance</th>
                <th>Action</th> <!-- Edit / Duplicate / Export PDS / Delete / Print -->
              </thead>
              <tbody>
                <!-- Details -->
                <tr>
                  <td>
                    <label class="i-overdue"><b>OverDue</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-20" readonly>
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
                    <input type="text" value="2000" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <div id="partial_table" class="i-table-container">
            <!-- Show Partials Table -->
            <table class="table table-striped i-table" >
              <thead>
                <th>Status</th> <!-- Draft / Paid / Partial / Overdue -->
                <th>Date</th>
                <th>Invoice No</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Balance</th>
                <th>Action</th> <!-- Edit / Duplicate / Export PDS / Delete / Print -->
              </thead>
              <tbody>
                <!-- Details -->
                <tr>
                  <td>
                    <label class="i-partial"><b>Partial</b></label>
                  </td>
                  <td>
                    <input type="date" value="2018-05-30" readonly>
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
                    <input type="text" value="2000" readonly>
                  </td>
                  <td>
                    <div class="i-drop">
                      <button class="btn btn-info btn-drop">Action</button>
                      <div class="i-drop-content">
                        <a href="">View</a>
                        <a href="">Edit</a>
                        <a href="">Print</a>
                        <a href="">Duplicate</a>
                        <a href="">Export To PDF</a>
                        <a href="">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>