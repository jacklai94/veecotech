<?php
session_start();
 ?>
<html>
  <head>
    <title>Invoice New - </title>
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
      <!-- Create New Invoice -->
      <div class="i-container">
        <div class="i-create">
          <div class="i-header">
            <h3>Invoice #</h3>
            <button type="button" onclick="location.href='client_invoice_view.php'" class="btn btn-save"><i class="fa fa-save btn-icon"></i>Save and View</button>
          </div>
          <div class="i-content">
            <div class="i-input-container"> <!-- EITHER EDIT OR REMOVE EXTRA CONTAINER JUST IN CASE -->
              <div class="i-input" style="float:right;width:40%;">
                <label>Address
                  <textarea rows="5" cols="20" name="cmpy_address" placeholder="Company Address"></textarea>
                </label>
              </div>
              <div class="i-input">
                <label>Invoice No</label>
                <input type="text" name="invoice_no" placeholder="Invoice No">
              </div>
              <div class="i-input">
                <label>Company Name</label>
                <input type="text" name="cmpy_name" placeholder="Company Name">
              </div>
              <div class="i-input">
                <label>Email</label>
                <input type="email" name="cmpy_email" placeholder="Company Email">
              </div>
              <div class="i-input">
                <label>Purchase Order</label>
                <input type="text" name="purchase_order" placeholder="Purchase Order No">
              </div>
              <div class="i-input">
                <label>Invoice Date</label>
                <input type="date" name="invoice_date" placeholder="Invoice Date">
              </div>
              <div class="i-input">
                <label>Payment Due</label>
                <input type="date" name="payment_due" placeholder="Payment Due">
              </div>
            </div>
            <div style="margin-top: 20px;"> <!-- EDIT OR REMOVE SEPERATE FROM INPUTS -->
              <div>
                <button class="btn btn-edit-item">Edit Items</button>
              </div>
              <div class="i-create-table">
                <table class="table table-striped i-table">
                  <!-- Product inside Quotation -->
                  <thead style="text-align:center;">
                    <!-- <th class="col-sm-1"></th> -->
                    <th class="col-sm-6" style="text-align:left;">Items</th>
                    <th class="col-sm-2">Quantity</th>
                    <th class="col-sm-2">Price</th>
                    <th class="col-sm-2">Amount</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <!-- Product Input -->
                        <input type="text" value="Asus i7 Laptop" readonly>
                      </td>
                      <td>
                        <input type="text" value="2" readonly>
                      </td>
                      <td>
                        <input type="text" value="10000" readonly>
                      </td>
                      <td style="float:right;">
                        <input type="text" value="20000" readonly>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <!-- Product Input -->
                        <input type="text" value="Asus i5 Laptop" readonly>
                      </td>
                      <td>
                        <input type="text" value="4" readonly>
                      </td>
                      <td>
                        <input type="text" value="5000" readonly>
                      </td>
                      <td style="float:right;">
                        <input type="text" value="20000" readonly>
                      </td>
                    </tr>
                    <tr>
                      <!-- Total -->
                      <td>
                      </td>
                      <td>
                      </td>
                      <td>
                      </td>
                      <td>
                        <label>Total :
                        <input type="text" value="40000" style="width:57%;float:right;text-align:left;" readonly>
                        </label>
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
      </div>
    </div>
  </body>
</html>