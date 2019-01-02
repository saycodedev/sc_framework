<?php
if(isset($_REQUEST['case'])!=''){
  $case_model = $_REQUEST['case'];
  echo  $case_model();
}
function query_setting()
{
  include 'config/database.php';
$query = $conn->query('SELECT * FROM config_tbl ');
//$result = $query->fetch_assoc();
return $query;
}
 ?>
