<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
if(isset($uri_segments[3])!=''){
$url3 =$uri_segments[3];
}else {
$url3 ='';
}
switch ($url3) {

    case 'query_login':
     require 'controller/login/model/index.php';
  $check  =    query_login($_POST['user'],$_POST['pwd']);
  if ($check=='logged') {
    echo '<script> alert("Login Success");
    window.location.href="../index";
    </script>';
  } else if ($check=='unlogged'){
    echo '<script> alert("Login Unsuccess");
      window.history.back();
     </script>';
  }
    break;

    case 'logout':
    require 'controller/login/model/index.php';
          query_logout();
          echo '<script> alert("Logout Success");
          window.location.href="../index";
          </script>';
    break;

    default:
      require 'controller/login/view/index.php';
    break;
}


 ?>
