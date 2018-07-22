
// Admin Management Page ADD Modal Box Section
function openModal(){
  document.getElementById('add_modal').style.display = "block";
}
function closeModal(){
  document.getElementById('add_modal').style.display = "none";
}
function noModal(){
  document.getElementById('add_modal').style.display = "none";
}

// Admin Management Page FILTER Section
function filter(){
  var input = document.getElementById("filter_input");
  var filter = input.value.toUpperCase();
  var table = document.getElementById("table_client");
  var tr = document.getElementsByTagName("tr");

  for(i = 0; i < tr.length; i++){
    var td = tr[i].getElementsByTagName("td")[0];
    if(td){
      if(td.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else{
        tr[i].style.display = "none";
      }
    }
  }
}


// Client Quotation ADD Modal Box Section
function openAdd_c(){
  document.getElementById('q_add_cust').style.display = "block";
  document.getElementById('q_add_product').style.display = "none";
}
function closeAdd_c(){
  document.getElementById('q_add_cust').style.display = "none";
  document.getElementById('q_add_product').style.display = "none";
}
function openAdd_p(){
  document.getElementById('q_add_cust').style.display = "none";
  document.getElementById('q_add_product').style.display = "block";
}
function closeAdd_p(){
  document.getElementById('q_add_cust').style.display = "none";
  document.getElementById('q_add_product').style.display = "none";
}

// Client Invoice Table ALL / DRAFT / PAID / OVERDUE / PARTIAL
function table_all(){
  document.getElementById("all_table").style.display = "block";
  document.getElementById("draft_table").style.display = "none";
  document.getElementById("paid_table").style.display = "none";
  document.getElementById("overdue_table").style.display = "none";
  document.getElementById("partial_table").style.display = "none";
}
function table_draft(){
  document.getElementById("all_table").style.display = "none";
  document.getElementById("draft_table").style.display = "table";
  document.getElementById("paid_table").style.display = "none";
  document.getElementById("overdue_table").style.display = "none";
  document.getElementById("partial_table").style.display = "none";
}
function table_paid(){
  document.getElementById("all_table").style.display = "none";
  document.getElementById("draft_table").style.display = "none";
  document.getElementById("paid_table").style.display = "block";
  document.getElementById("overdue_table").style.display = "none";
  document.getElementById("partial_table").style.display = "none";
}
function table_overdue(){
  document.getElementById("all_table").style.display = "none";
  document.getElementById("draft_table").style.display = "none";
  document.getElementById("paid_table").style.display = "none";
  document.getElementById("overdue_table").style.display = "block";
  document.getElementById("partial_table").style.display = "none";
}
function table_partial(){
  document.getElementById("all_table").style.display = "none";
  document.getElementById("draft_table").style.display = "none";
  document.getElementById("paid_table").style.display = "none";
  document.getElementById("overdue_table").style.display = "none";
  document.getElementById("partial_table").style.display = "block";
}

// Client Maintenance Tab for Table
function openTab_default(){
  // var tab_C = document.getElementById("tabcompany");
  // var tab_P = document.getElementById("tabproduct");
  // var con_C = document.getElementById("customer_container");
  // var con_P = document.getElementById("product_container");
  // var edit_C = document.getElementById("edit_c");
  // var edit_P = document.getElementById("edit_P");
  tab_C.style.display = "block";
  tab_P.style.display = "none";
  con_C.style.display = "block";
  con_P.style.display = "none";
}
function openTab_p(){
  document.getElementById("tabcompany").style.display = "none";
  document.getElementById("tabproduct").style.display = "block";
}
function openTab_c(){
  document.getElementById("tabcompany").style.display = "block";
  document.getElementById("tabproduct").style.display = "none";
}
function openCreate_c(){
  document.getElementById("customer_container").style.display = "block";
  document.getElementById("product_container").style.display = "none";
}
function openCreate_p(){
  document.getElementById("customer_container").style.display = "none";
  document.getElementById("product_container").style.display = "block";
}
function closeCreate_c(){
  document.getElementById("customer_container").style.display = "none";
  document.getElementById("product_container").style.display = "none";
}
function closeCreate_p(){
  document.getElementById("customer_container").style.display = "none";
  document.getElementById("product_container").style.display = "none";
}
function openEdit_c(){
  document.getElementById("customer_edit").style.display = "block";
  document.getElementById("customer_create").style.display = "none";
}
function closeEdit_c(){
  document.getElementById("customer_edit").style.display = "none";
  document.getElementById("customer_create").style.display = "block";
}
function openEdit_p(){
  document.getElementById("product_edit").style.display = "block";
  document.getElementById("product_create").style.display = "none";
}
function closeEdit_p(){
  document.getElementById("product_edit").style.display = "none";
  document.getElementById("product_create").style.display = "block";
}

// Client Setting EDIT Section
function openEdit(){
  document.getElementById("client_setting_edit").style.display = "block";
  document.getElementById("client_setting_details").style.display = "none";
  document.getElementById("editbtn").style.display = "none";
  document.getElementById("resetbtn").style.display = "none";
  document.getElementById("uploadbtn").style.display= "block";
}
function closeEdit(){
  document.getElementById("client_setting_edit").style.display = "none";
  document.getElementById("client_setting_details").style.display = "block";
  document.getElementById("editbtn").style.display = "block";
  document.getElementById("resetbtn").style.display = "block";
  document.getElementById("uploadbtn").style.display= "none";
}
function openReset(){
  document.getElementById("client_setting_reset").style.display = "block";
  document.getElementById("client_setting_details").style.display = "none";
  document.getElementById("editbtn").style.display = "none";
  document.getElementById("resetbtn").style.display = "none";
  document.getElementById("uploadbtn").style.display= "none";
}
function closeReset(){
  document.getElementById("client_setting_reset").style.display = "none";
  document.getElementById("client_setting_details").style.display = "block";
  document.getElementById("editbtn").style.display = "block";
  document.getElementById("resetbtn").style.display = "block";
  document.getElementById("uploadbtn").style.display= "none";
}