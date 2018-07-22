<?php
session_start();
 ?>
<html>
  <head>
    <title>Maintenance - </title>
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
  <body onload="openTab_default()">
    <!-- Navigation Bar -->
    <header>
      <!-- Top Navigation Bar -->
      <ul class="nav-bar">
        <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href=""><i class="fa fa-bars"></i></a></li>
        <!-- <li><button onclick="" class="btn btn-nav">Add Customer</button></li>
        <li><button onclick="" class="btn btn-nav">Add Product</button></li> -->
        <li class="nav-item"><p onclick="openCreate_c()" class="nav-p">Add Customer</p></li>
        <li class="nav-item"><p onclick="openCreate_p()" class="nav-p">Add Product</p></li>
        <!-- <li><a href="client_invoice.php">Invoices</a></li>
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
      <div class="maintenance-container">
      <!-- Table with two tabs -->
        <div class="tab-container">
          <!-- Tab button -->
          <div class="tab-btn-container">
            <button class="btn btn-tab" onclick="openTab_c()" style="font-size:1.3em"><i class="far fa-address-book btn-icon"></i>Customer</button>
            <button class="btn btn-tab" onclick="openTab_p()" style="font-size:1.3em"><i class="fas fa-cubes btn-icon"></i>Product</button>
          </div>
          <!-- Tab Content -->
          <div class="tab-content" id="tabcompany" style="display:block;">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- PHP -->
                  <?php
                  include "../php/connection.php";
                  $cslc = "SELECT * FROM client_customer WHERE client_ID='".$_SESSION["id"]."'";
                  $cres = mysqli_query($conn, $cslc);
                  if (mysqli_num_rows($cres) > 0) {
                    while($crow = mysqli_fetch_assoc($cres)){
                      echo "<tr>";
                      echo "<td>";
                      echo "<input type='checkbox'>";
                      // echo $crow["customer_ID"];
                      echo "</td>";
                      echo "<td>";
                      echo $crow["customer_Name"];
                      echo "</td>";
                      echo "<td>";
                      echo $crow["customer_Email"];
                      echo "</td>";
                      echo "<td>";
                      echo $crow["customer_Contact"];
                      echo "</td>";
                      echo "<td>";
                      echo $crow["customer_Address_Line"] + ", " + $crow["customer_Address_City"];
                      echo "</td>";
                      echo "<td>";
                      // echo "<button onclick='location.href='admin_edit.php?client_ID='".$row["client_ID"]."'''>Edit</button>";
                      // echo "<a onclick='openEdit_c()' href='customer_maintenance.php?client_ID=".$row["client_ID"]."'><i class='fa fa-edit' style='font-size: 32px;'></i></a>";
                      echo "<a href='client_maintenance_edit.php?customer_ID=$crow[customer_ID]'><i id='edit_c' onclick='openEdit_c()' class='fa fa-edit btn-action' style='font-size: 32px; cursor: pointer;'></i></a>";
                      // prompt modal box
                      echo "&nbsp;";
                      echo "<a href='../php/delete.php?customer_ID=$crow[customer_ID]' name='delete'><i class='fa fa-trash btn-action' style='font-size: 32px;'></i></a>";
                      echo "</td>";
                      echo "</tr>";
                    }
                  }
                  mysqli_close($conn);
                  ?>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
          <div class="tab-content" id="tabproduct">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!-- PHP Goes Here -->
                  <?php
                  include "../php/connection.php";
                  $pslc = "SELECT * FROM client_product WHERE client_ID='".$_SESSION["id"]."'";
                  $pres = mysqli_query($conn, $pslc);
                  if (mysqli_num_rows($pres) > 0) {
                    while($prow = mysqli_fetch_assoc($pres)){
                      echo "<tr>";
                      echo "<td>";
                      echo "<input type='checkbox'>";
                      echo "</td>";
                      echo "<td>";
                      echo $prow["product_Name"];
                      echo "</td>";
                      echo "<td>";
                      echo $prow["product_Description"];
                      echo "</td>";
                      echo "<td>";
                      echo $prow["product_Price"];
                      echo "</td>";
                      echo "<td>";
                      // echo "<button onclick='location.href='admin_edit.php?client_ID='".$row["client_ID"]."'''>Edit</button>";
                      // echo "<a onclick='openEdit_p()' href='customer_maintenance.php?client_ID=".$row["client_ID"]."'><i class='fa fa-edit' style='font-size: 32px;'></i></a>";
                      echo "<a href='client_maintenance_edit.php?product_ID=$prow[product_ID]'><i id='edit_p' onclick='openEdit_p()' class='fa fa-edit actionbtn' style='font-size: 32px; cursor: pointer;'></i></a>";
                      // prompt modal box
                      echo "&nbsp;";
                      echo "<a href='../php/delete.php?product_ID=$prow[product_ID]'><i class='fa fa-trash actionbtn' style='font-size: 32px;'></i></a>";
                      echo "</td>";
                      echo "</tr>";
                    }
                  }
                  mysqli_close($conn);
                  ?>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
        </div>
        <!-- Customer Container -->
        <div class="customer-container" id="customer_container">
          <!-- Add Customer Container -->
          <div class="customer-create-container" id="customer_create">
            <div>
              <h3>Customer - Create New
                <i class="fa fa-close header-close" onclick="closeCreate_c()"></i>
              </h3>
              <form action="../php/client_add_maintenance.php" method="post">
                <div>
                  <label for="cust_name" class="customer-label">Name: </label>
                  <input type="text" name="cust_name" class="customer-input" placeholder="Enter Customer Name" required>
                </div>
                <div>
                  <label for="cust_email" class="customer-label">Email: </label>
                  <input type="email" name="cust_email" class="customer-input" placeholder="Enter Customer Email" required>
                </div>
                <div>
                  <label for="cust_contact" class="customer-label">Contact: </label>
                  <input type="text" name="cust_contact" class="customer-input" placeholder="Enter Customer Contact" required>
                </div>
                <div>
                  <label for="cust_address_line" class="customer-label">Address Line: </label>
                  <input type="text" name="cust_address_line" class="customer-input" placeholder="Enter Addre" required>
                </div>
                <div>
                  <label for="cust_address_city" class="customer-label">City: </label>
                  <input type="text" name="cust_address_city" class="customer-input" placeholder="Enter City" required>
                </div>
                <div>
                  <label for="cust_zip" class="customer-label">Zip / Postal Code: </label>
                  <input type="text" name="cust_zip" class="customer-input" placeholder="Enter Zip/Postal Code" required>
                </div>
                <div>
                  <label for="cust_state" class="customer-label">State: </label>
                  <input type="text" name="cust_state" class="customer-input" placeholder="Enter State" required>
                </div>
                <div>
                  <label for="cust_country" class="customer-label">Country: </label>
                  <input type="text" name="cust_country" class="customer-input" placeholder="Enter Country" required>
                </div>
                <div>
                  <button type="submit" name="add_customer_btn" class="btn btn-add">Add</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Edit Customer Container -->
          <?php
          // include "../php/connection.php";
          // $cslc = "SELECT * FROM client_customer WHERE customer_ID='".$_GET["customer_ID"]."'";
          // $cres = mysqli_query($conn, $cslc);
          // if (mysqli_num_rows($cres) > 0) {
          //   $crow = mysqli_fetch_assoc($cres);
          // }
          ?>
          <!-- <div class="customer-edit-container" id="customer_edit">
            <div>
              <div class="customer-header">
                <h3 class="header-title">Product - Edit
                  <i class="fa fa-close header-close" onclick="closeEdit_c()"></i>
                </h3>
              </div>
              <div>
                <label for="cust_name" class="customer-label">Company Name: </label>
                <input type="text" name="cust_name" class="customer-input" value="<?php echo $crow["customer_Name"]; ?>" placeholder="Enter Company Name" required>
              </div>
              <div>
                <label for="cust_email" class="customer-label">Company Email: </label>
                <input type="email" name="cust_email" class="customer-input" value="<?php echo $crow["customer_Email"]; ?>" placeholder="Enter Company Email" required>
              </div>
              <div>
                <label for="cust_contact" class="customer-label">Company Contact: </label>
                <input type="text" name="cust_contact" class="customer-input" value="<?php echo $crow["customer_Contact"]; ?>" placeholder="Enter Company Contact" required>
              </div>
              <div>
                <button type="submit" onclick="location.href=''" class="btn btn-edit">Edit</button>
              </div>
            </div>
          </div> -->
          <?php
          // mysqli_close($conn);
           ?>
        </div>
        <!-- Product Container -->
        <div class="product-container" id="product_container">
          <!-- Create Product Container -->
          <div class="product-create-container" id="product_create">
            <div>
              <h3>Product - Create New
                <i class="fa fa-close header-close" onclick="closeCreate_p()"></i>
              </h3>

              <form action="../php/client_add_maintenance.php" method="post">
                <div>
                  <label for="pdct_name" class="product-label">Product Name: </label>
                  <input type="text" name="pdct_name" class="product-input" placeholder="Enter Product Name" required>
                </div>
                <div>
                  <label for="pdct_price" class="product-label">Product Price: </label>
                  <input type="text" name="pdct_price" class="product-input" placeholder="Enter Price" required>
                </div>
                <div>
                  <label for="pdct_descp" class="product-label">Product Description: </label>
                  <textarea rows="3" cols="10" name="pdct_descp" class="product-input" placeholder="Enter Description" required></textarea>
                </div>
                <div>
                  <button type="submit" name="add_product_btn" class="btn btn-add">Add</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Edit Product Container -->
          <?php
          // include "../php/connection.php";
          // $pslc = "SELECT * FROM client_customer WHERE customer_ID='".$_GET["customer_ID"]."'";
          // $pres = mysqli_query($conn, $pslc);
          // if (mysqli_num_rows($pres) > 0) {
          //   $prow = mysqli_fetch_assoc($pres);
          // }
          ?>
          <!-- <div class="product-edit-container" id="product_edit">
            <div>
              <div class="product-header">
                <h3 class="header-title">Product - Edit
                  <i class="fa fa-close header-close" onclick="closeEdit_p()"></i>
                </h3>
              </div>
              <div>
                <label for="pdct_name" class="product-label">Product Name: </label>
                <input type="text" name="pdct_name" class="product-input" value="<?php echo $prow["product_Name"]; ?>" placeholder="Enter Product Name" required>
              </div>
              <div>
                <label for="pdct_price" class="product-label">Product Price: </label>
                <input type="text" name="pdct_price" class="product-input" value="<?php echo $prow["product_Price"]; ?>" placeholder="Enter Price" required>
              </div>
              <div>
                <button type="submit" onclick="location.href=''" class="btn btn-edit">Edit</button>
              </div>
            </div>
          </div> -->
          <?php
          // mysqli_close($conn);
           ?>
        </div>
      </div>
    </div>
  </body>
</html>