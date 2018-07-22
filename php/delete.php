<?php
session_start();
include "connection.php";

// Admin Manage Client DELETE
if($_GET["client_ID"]){
  echo $del = "DELETE FROM manage_client WHERE client_ID='".$_GET["client_ID"]."'";
  if (mysqli_query($conn, $del)) {
      echo $del_con = "DELETE FROM login WHERE client_ID='".$_GET["client_ID"]."'";
      if(mysqli_query($conn, $del_con)){
        echo "sucess";
      }
      else{
        echo "fail";
      }
  }
}
// Client invoice, quotation, maintenance
else if($_GET["customer_ID"]){
  echo $del_cust = "DELETE FROM client_customer WHERE customer_ID='".$_GET["customer_ID"]."'";
  if (mysqli_query($conn, $del_cust)) {
    echo "connection true";
  }
  else{
    echo "failed";
  }
}
else if($_GET["product_ID"]){
   echo $del_prod = "DELETE FROM client_product WHERE product_ID='".$_GET["product_ID"]."'";
   if (mysqli_query($conn, $del_prod)) {
     echo "connection true";
   }
   else{
     echo "failed";
   }
}
else{
  echo "fail all";
}
?>s