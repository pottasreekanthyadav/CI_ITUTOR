<?php
function otp_send($code,$mobile,$msg){

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?template=492&authkey=245946A0o0yei9c5bdc42c4&message=$msg $code is your OTP&sender=ITSMYTUTOR&mobile=$mobile&otp=$code",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "cURL Error #:" . $err;
  return false;
} else {
  return true; 
  // echo $response;
}
}
function sms_send($code,$mobile,$msg){

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?template=492&authkey=245946A0o0yei9c5bdc42c4&message=$msg  please call on $code if You have any query &sender=ITSMYTUTOR&mobile=$mobile&otp=$code",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "cURL Error #:" . $err;
  return false;
} else {
  return true; 
  // echo $response;
}
}
function order_sms_send($code,$mobile,$msg){

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?template=492&authkey=245946A0o0yei9c5bdc42c4&message=$msg  Your order with $code has been placed successfully,thanks for shopping with us &sender=ITSMYTUTOR&mobile=$mobile&otp=$code",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "cURL Error #:" . $err;
  return false;
} else {
  return true; 
  // echo $response;
}
}
function sms_send12($time,$mobile,$msg){

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?template=492&authkey=245946A0o0yei9c5bdc42c4&message=$msg  $time &sender=ITSMYTUTOR&mobile=$mobile&otp=$time",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
  return false;
} else {
  return true; 
  echo $response;
}
}
function parent_push($registrationIDs_arr,$title,$msg,$type,$req_id=null,$tutor_id=null){
  define('API_ACCESS_KEY','AAAANyVa4ys:APA91bHjYuhNNjAP2UfEeZo-Ov2wPZrpu9FLxQsF24_Q7GK6fX8L-qq66vFuWxogttXRUa-Ne0K5HAXdjTQV1srk0LL_YraYrw-cGjSLYsK4SN2zNpcfLtmt-q6VjIvdqH-Xtwcf1kJy');
$registrationIDs = $registrationIDs_arr;
$fcmMsg = array(
  'title' =>$title,
  'body' =>$msg,
  'type' => $type,
  'sound' => "default",
);
if(!empty($req_id))
{
  $fcmMsg['req_id']=$req_id;
}
if(!empty($tutor_id))
{
   $fcmMsg['tutor_id']=$tutor_id;
}
$fcmFields = array(
  //'to' => $singleID,
   'registration_ids' => $registrationIDs,
         'priority' => 'high',
   'data' => $fcmMsg
);
$headers = array(
  'Authorization: key=' . API_ACCESS_KEY,
  'Content-Type: application/json'
);
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
$result = curl_exec($ch );
$err = curl_error($ch);
curl_close( $ch );
if($err)
{
  return false;
}
else
{
  return true;
}
}
function tutor_push($registrationIDs_arr,$title,$msg,$type,$req_id=null,$parent_id=null){
  define('API_ACCESS_KEY','AAAAXvZPZYk:APA91bEkTpr8C2EdJNL2JE73Vu-d-efTSjljLzHHHMsfaFkDVz5LJyaZgA65S3l_rmDVP-wNKZohHe7sQ2f_Sym1AoJ275EkuqMbo2PA9xkAEa4F9_GBMxHIbWJQVgPyH-c9G49g8Ymx');
$registrationIDs = $registrationIDs_arr;
$fcmMsg = array(
  'title' =>$title,
  'body' =>$msg,
  'type' => $type,
  'sound' => "default",
);
if(!empty($req_id))
{
  $fcmMsg['req_id']=$req_id;
}
if(!empty($parent_id))
{
  $fcmMsg['parent_id']=$parent_id;
}
$fcmFields = array(
  //'to' => $singleID,
   'registration_ids' => $registrationIDs,
     'priority' => 'high',
   'data' => $fcmMsg
);

$headers = array(
  'Authorization: key=' . API_ACCESS_KEY,
  'Content-Type: application/json'
);
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
$result = curl_exec($ch);
//print_r($result);exit;
$err = curl_error($ch);
curl_close( $ch );
if($err)
{
  return false;
}
else
{
  return true;
}
}
function institute_push($registrationIDs_arr,$title,$msg,$type,$req_id=null,$parent_id=null){
  define('API_ACCESS_KEY','AAAAQ_aLB38:APA91bE-Fi2ac3J-9-1sk1vCb1YktqRu9lOpLn_iCF95JAeIUOSKwxDRSZXdKCqDz0dzb-uGSaO3oTVLTVOftsZvqKoCEczJZnrkQnhsAqJ3KTp_IwY8II0FxhjCGPaxi_L39BYm5j7g');
$registrationIDs = $registrationIDs_arr;
$fcmMsg = array(
  'title' =>$title,
  'body' =>$msg,
  'type' => $type,
  'sound' => "default",
);
if(!empty($req_id))
{
  $fcmMsg['req_id']=$req_id;
}
if(!empty($parent_id))
{
  $fcmMsg['parent_id']=$parent_id;
}
$fcmFields = array(
  //'to' => $singleID,
   'registration_ids' => $registrationIDs,
     'priority' => 'high',
   'data' => $fcmMsg
);

$headers = array(
  'Authorization: key=' . API_ACCESS_KEY,
  'Content-Type: application/json'
);
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
$result = curl_exec($ch);
//print_r($result);exit;
$err = curl_error($ch);
curl_close( $ch );
if($err)
{
  return false;
}
else
{
  return true;
}
}
function send_user_email($to,$from,$subject,$message,$bcc=null)
{ 
   $CI =& get_instance();
  $config=array(
                 'protocol' => 'smtp', 
                 'smtp_host' => 'ssl://smtp.googlemail.com', 
                 'smtp_port' => 465, 
                 'smtp_user' => 'jitendra.richlabz@gmail.com', 
                 'smtp_pass' => '230869sh',
                 'charset'=>'utf-8',
                 'newline'=> "\r\n",
                 'mailtype'=>'html',
                 'validation'=> true
      );
  $CI->load->library('email');
  $CI->email->initialize($config);
(!empty($bcc))?$CI->email->bcc($to):$CI->email->to($to);
  $CI->email->from($from);
  $CI->email->subject($subject);
  $CI->email->message($message);
       if($CI->email->send())
       {
        return true;
       }
       else
       {
        return false;
       }
}
?>