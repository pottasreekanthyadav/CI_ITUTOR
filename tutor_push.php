<?php
//this is for tutor app notification
define('API_ACCESS_KEY','AAAAXvZPZYk:APA91bEkTpr8C2EdJNL2JE73Vu-d-efTSjljLzHHHMsfaFkDVz5LJyaZgA65S3l_rmDVP-wNKZohHe7sQ2f_Sym1AoJ275EkuqMbo2PA9xkAEa4F9_GBMxHIbWJQVgPyH-c9G49g8Ymx');
$registrationIDs = array(
     'cRCnBF31JNc:APA91bE__JAkNPAXdPhwsSMHner0acAihNaQ12NgmUhnBhQf3U2BZzw5AHhCnK5lZA9e_h8dHejO0hZb2B0Q1UeX4GDTWh4AjXrZliy_EprqjHvBMGt-wSFQrWNrQwVCeHrIiJkO29st',
     'e9wO1CGdEbw:APA91bE_arh-Vb2IJZPvRgTMMUuVbv7udbbgrNbVXgvcODTbigZsgtm0hZvoee2T6Zvvsf8WSSIikoxjfjgE2XWeRJ_BE5DJfuvck8K5CVrGTrM2KGiEQ-RFWO8AB__hsVePl5601Nj1'
) ;
$fcmMsg = array(
	'title' => 'Your profile viewed',
	'body' => 'Seshu testing',
	'type' => "matchingrequirement",
	'sound' => "default",
);
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
//echo json_encode( $fcmFields );exit;
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result . "\n\n";
?>
