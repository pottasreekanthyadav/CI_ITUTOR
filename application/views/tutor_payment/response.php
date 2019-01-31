<?php
session_start();
extract($_POST);
$uid=$_SESSION['user_id'];
$order_id=$_SESSION['order_id'];
$all_total=$_SESSION['all_total'];
$name=$_SESSION['name'];
$mobile=$_SESSION['mobile'];
//print_r($_SESSION);exit;
?>
<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"]; //Please use the amount value from database
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="eCwWELxi"; //Please change the value with the live salt for production environment


//Validating the reverse hash
If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
  else {    

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
     $hash = hash("sha512", $retHashSeq);
     
       if ($hash != $posted_hash) {
         echo "Transaction has been tampered. Please try again";
       }
     else {
               
          require_once "includes/dbconnect.php";
          $date=date('Y-m-d H:i:s');
          $sql_cart_update="update rl_cart_tbl set cart_status = 1, order_id = $order_id, payment_status = 1 where user_id = $uid and cart_status = 0";
          $sql_payment="insert into rl_book_payment_history_tbl(user_id,order_id, payment_mode,payment_status,payment_amount,added_on,payee_name, payee_mobile,txn_id,err_msg) values($uid,$order_id,'online',1,$all_total,'$date','$name',$mobile,'$txnid',$status')";
          $sql_order="update fk_orders_tbl set order_status = 3, payment_type = 'Online' where order_id = $order_id";
          $cart_result=mysqli_query($con,$sql_cart_update);
          $payment_result=mysqli_query($con,$sql_payment);
          $order_result=mysqli_query($con,$sql_order);
          if($cart_result && $payment_result && $order_result ){
           $_SESSION['trans_id'] = $txnid;
           header('location:success.php');
       } 
       else
       {
        echo "something went wrong";
       }        
          }
?>  