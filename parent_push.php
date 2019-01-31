<?php
//this is for parent app notification
define('API_ACCESS_KEY','AAAANyVa4ys:APA91bHjYuhNNjAP2UfEeZo-Ov2wPZrpu9FLxQsF24_Q7GK6fX8L-qq66vFuWxogttXRUa-Ne0K5HAXdjTQV1srk0LL_YraYrw-cGjSLYsK4SN2zNpcfLtmt-q6VjIvdqH-Xtwcf1kJy');
$registrationIDs = array(
     'dZ5AKOG880Q:APA91bFblL8fwSmHFvapBJuccwFO3KqcwpGIkJdIQOu5bjRCGMgIqZ6T6AJdfRpHLVjoBSlKwrGY5aEFxJjEnfYmPOdc3_7d2ar_ZWkkqVPP5JPESNNQeoXdDGQqWO6NULt9gsdTyA_x',
     'e9wO1CGdEbw:APA91bE_arh-Vb2IJZPvRgTMMUuVbv7udbbgrNbVXgvcODTbigZsgtm0hZvoee2T6Zvvsf8WSSIikoxjfjgE2XWeRJ_BE5DJfuvck8K5CVrGTrM2KGiEQ-RFWO8AB__hsVePl5601Nj1'
) ;
$fcmMsg = array(
	'title' => 'Hi testing multiuser',
	'body' => 'Seshu testing',
	'type' => "leave",
	'sound' => "default",
);
$fcmFields = array(
	//'to' => $singleID,
	 'registration_ids' => $registrationIDs,
         'priority' => 'high',
	 'notification' => $fcmMsg
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
curl_close( $ch );
echo $result . "\n\n";
?>