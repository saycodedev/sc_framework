<?php function thai_date($temp){

  list($yyyy, $mm, $dd) = explode("-", $temp);
   if($dd<'10'){
    $date_all=substr($dd,1);
  }else{
    $date_all=$dd;
  }
//  $thaimonth=array("ม.ค","ก.พ","มี.ค","ม.ย","พ.ค","มิ.ย","ก.ค","ส.ค","ก.ย","ต.ค", "พ.ย","ธ.ค");
  $thaimonth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม", "พฤศจิกายน","ธันวาคม");
  $month =  $thaimonth[$mm-1];
  $yyyy = $yyyy+543;
  $temp = $date_all.' '.$month.' ' .$yyyy;
  $tts = $yyyy.$month.$date_all;
  return($temp);
}


?>
