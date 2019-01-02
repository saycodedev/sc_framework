<?php
if(isset($_REQUEST['case'])!=''){
  $case_model = $_REQUEST['case'];
  echo  $case_model();
}

function query_profile($id)
{
   include 'config/database.php';
$query = $conn->query("SELECT * FROM user_tbl  WHERE user_id='$id'");
return $query;
}
function query_edit_1($id,$username)
{
   include 'config/database.php';
$query = $conn->query("UPDATE  user_tbl SET  user_username='$username' WHERE user_id='$id'");
return $query;
}
function query_edit_2($id,$username,$pwd)
{
   include 'config/database.php';
$query = $conn->query("UPDATE  user_tbl SET  user_username='$username',user_password='$pwd' WHERE user_id='$id'");
return $query;
}




 ?>
