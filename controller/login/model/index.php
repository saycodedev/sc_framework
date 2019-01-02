<?php
if(isset($_REQUEST['case'])!=''){
  $case_model = $_REQUEST['case'];
  echo  $case_model();
}

function query_login($u_username,$u_password)
{
   include 'config/database.php';
$query = $conn->query("SELECT * FROM user_tbl  WHERE user_username='$u_username' AND user_password='$u_password'");
$result = $query->fetch_assoc();
 if ($result) {
  $_SESSION['id'] = $result['user_id'];
    $_SESSION['username'] = $result['user_username'];
  $data = 'logged';
}else{
    $data = 'unlogged';
}
return $data;
}


function query_logout()
{
 session_destroy();
}



 ?>
