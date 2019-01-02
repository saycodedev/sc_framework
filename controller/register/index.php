<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
if(isset($uri_segments[3])!=''){
$url3 =$uri_segments[3];
}else {
$url3 ='';
}
switch ($url3) {
  case 'add':

   require 'controller/register/model/index.php';
     echo query_add($_POST['username'],$_POST['pwd']);
    break;
  default:
      require 'controller/register/view/index.php';
    break;
}


 ?>
