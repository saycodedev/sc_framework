<?php
if(isset($_REQUEST['case'])!=''){
  $case_model = $_REQUEST['case'];
  echo  $case_model();
}

function query_add($u_username,$u_password)
{
   include 'config/database.php';
$query = $conn->query("INSERT INTO user_tbl  SET user_username='$u_username' , user_password='$u_password'");
 if ($query) {
  $_SESSION['id'] = $conn->insert_id;
    $_SESSION['username'] = $u_username;
  $data = 'logged';
}else{
    $data = 'unlogged';
}
return $data;
}



 ?>
