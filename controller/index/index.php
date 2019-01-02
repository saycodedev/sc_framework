<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
if(isset($uri_segments[3])!=''){
$url3 =$uri_segments[3];
}else {
$url3 ='';
}
switch ($url3) {
    case 'download':
    header('location:'.base_url().'storage/file/sc.zip');
    break;
    default:
      require  'controller/index/view/index.php';
    break;

}
 ?>
