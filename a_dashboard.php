<?php
session_start();
include "../php/connect.php";
 ?>
<html>
  <head>
    <title>Dashboard - Admin Page</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
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
          <a href="a_dashboard.php" class="brand-link">
            <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Veecotech</span>
          </a>
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">Admin</a>
              </div>
            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:16px;">
              <a href="a_dashboard.php"><i class="fa fa-home btn-icon btn-nav-icon" style="font-size:25px;"></i>Home</a>
            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:16px;">
              <a href="a.php"><i class="fa fa-users btn-icon btn-nav-icon"></i>Manage</a>
            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size:16px;">
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
      <div>
        <h3>Insert Stuffs</h3>
        <div>
          <canvas id="myChart" style="width:200px;height:200px;"></canvas>
          <script>
          var charx = document.getElementById('myChart').getContext('2d');
          var chart = new Chart(charx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Data Number one",
                    backgroundColor: 'rgb(39, 174, 96  )',
                    borderColor: 'rgb(39, 174, 96  )',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
            },
            // Configuration options go here
            options: {}
          });
          </script>
          <canvas id="barChart" style="width:200px;height:200px;"></canvas>
          <script>
          var ctx = document.getElementById('barChart').getContext('2d');
          var myBarChart = new Chart(ctx, {
              type: 'bar',

              data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Data Number 1",
                    backgroundColor: 'rgb(39, 174, 96  )',
                    borderColor: 'rgb(39, 174, 96  )',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
              },
              options: {}
          });
          </script>
        </div>
      </div>
    </div>
  </body>
</html>