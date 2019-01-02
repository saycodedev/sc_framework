<?php
$url_first =$uri_segments[2];
$url =$uri_segments[2];
if(isset($uri_segments[3])!=''){
$url =$url.'/'.$uri_segments[3];
}
$data['base_url']=base_url();
$data['url']= $url;
$data['session_id']=$session_id;
function set_url($data,$inf)
{
 require 'controller/'.$inf.'.php';
}
if ($url_first=='' or $url_first=='index' or $url_first=='home') {
  set_url($data,'index/index');
}else if($url_first=='about'){
 set_url($data,'about/index');
}else if($url_first=='tutorial'){
 set_url($data,'tutorial/index');
}else if($url_first=='login'){
 set_url($data,'login/index');
}else if($url_first=='register'){
 set_url($data,'register/index');
}else if($url_first=='profile'){
 set_url($data,'profile/index');
}else {
  set_url($data,'error/index');
}


 ?>
