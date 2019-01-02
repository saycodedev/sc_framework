<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
if(isset($uri_segments[3])!=''){
$url3 =$uri_segments[3];
}else {
$url3 ='';
}
switch ($url3) {
   case 'edit_1':
    require 'controller/profile/model/index.php';
          query_edit_1($_POST['id'],$_POST['username']);
    break;

   case 'edit_2':
          require 'controller/profile/model/index.php';
        query_edit_2($_POST['id'],$_POST['username'],$_POST['newpwd']);
    break;

  default:
    require 'controller/profile/model/index.php';
  $query =  query_profile($_SESSION['id']);
  $result = $query->fetch_assoc();
      require 'controller/profile/view/index.php';
    break;
}


 ?>
