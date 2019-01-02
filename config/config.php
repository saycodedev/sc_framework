<?php
// locale_get
function config_data($data)
{
  include 'database.php';
  $Query_web_config_data = $conn->query("SELECT * FROM config_tbl ");
  $f_w_c_d = $Query_web_config_data->fetch_assoc();
$project_keyword  = $f_w_c_d["$data"];
return $project_keyword;
}



//กำหนด URL พื้นฐาน///
function base_url()
{
$base_url = "//" . $_SERVER['SERVER_NAME'].'/sc/';
return $base_url;
}


//กำหนด URL พื้นฐาน///
//กำหนด time zone  //
date_default_timezone_set("Asia/Bangkok");

 ?>
