<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sendemail 
{
public function send_email($to,$from,$subject,$message){
    // $this->load->library('email');
     $this->email->to($to);
     $this->email->from($from);
     $this->email->subject($subject);
     $this->email->message($message);
     if($this->email->send())
        return true;
    else
        return false;
}
}
?>