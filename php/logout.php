<?php
session_start();

if($_SESSION["status"] == 'admin'){

  session_destroy();
  header("location:../admin/admin_portal.php");
}
else if($_SESSION["status"] == 'client'){
  session_destroy();
  header("location:../client/client_portal.php");
}
?>