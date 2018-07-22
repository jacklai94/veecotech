<?php
session_start();
include "connection.php";

$dateNow = date("Y-m-d");
echo $dateNow;

if($_POST["cust_name"] == TRUE){
  echo $ins_cus = "INSERT INTO client_customer (customer_ID, customer_Name, customer_Email, customer_Contact, customer_Register_Date, client_ID)
  VALUES (NULL, '".$_POST["cust_name"]."', '".$_POST["cust_email"]."', '".$_POST["cust_contact"]."', '".$dateNow."', '".$_SESSION["id"]."')";
  if (mysqli_query($conn, $ins_cus)) {
 
    echo '<script>';
    echo 'alert("Customer sucessfully registered.")';
    echo '</script>';
    header("location:../client Site/client_maintenance.php");
  }
  else{
    echo 'failed customer';
  }
}
else if($_POST["pdct_name"] == TRUE){
  echo $ins_prod = "INSERT INTO client_product (product_ID, product_Name, product_Price, client_ID)
  VALUES (NULL, '".$_POST["pdct_name"]."', '".$_POST["pdct_price"]."', '".$_SESSION["id"]."')";
  if (mysqli_query($conn, $ins_prod)) {
    echo '<script>';
    echo 'alert("Product registered sucessfully!")';
    echo '</script>';
    header("location:../client/client_maintenance.php");
  }
  else{
    echo 'product failed';
  }
}
else{
  echo " null";
}
mysqli_close($conn);
 ?>