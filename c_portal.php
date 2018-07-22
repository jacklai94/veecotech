<?php
session_start();
include "../php/connect.php";

$sql = "SELECT * FROM login WHERE status = 'client'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // issue with $_POST= "clientbtn" ,query
  if($_POST["clientbtn"]){ 
    while($row = mysqli_fetch_assoc($result)){
      if($row["userName"] == $_POST["username"]){
        if($row["passWord"] == $_POST["password"]){
          $_SESSION["name"] = $row["name"];
          $_SESSION["id"] = $row["client_ID"];
          $_SESSION["status"] = $row["status"];
          echo "successfully";
          header("location:client_dashboard.php");
        }
        else{
          echo '<script language="javascript">';
          echo 'alert("wrong password")';
          echo '</script>';
        }
      }
      else{
        echo '<script language="javascript">';
        echo 'alert("wrong username")';
        echo '</script>';
      }
    }
  }
}
mysqli_close($conn);
 ?>
<html>
  <head>
    <title>Customer Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
  </head>
  <body>
    <div class="login-main">
      <div>
        <h1 class="login-title" style="text-align:center;">Veecotech</h1>
      </div>
      <div class="login">
        
          <form action="" method="post">
            <div class="login-usernm">
              <input type="text" name="username" id="usernm_login" class="usrnm" placeholder="Enter Username">
            </div>
            <div class="login-pwd">
              <input type="password" name="password" id="pwd_login" class="pwd" placeholder="Enter Passsword">
            </div>
            <div class="login-btn">
              <i class="fa fa-unlock-alt btn-icon btn-icon-login"></i><input type="submit" value="login" class="btn btn-submit">
             
            </div>
          <form>
        
      </div>
      <footer>
        <!-- Copyright Section -->
      </footer>
    </div>
  </body>
</html>