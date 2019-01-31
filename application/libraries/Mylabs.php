<?php
class Mylabs
{
public function mypagination($total,$per_page,$base_url,$uri=null){
    // $config['page_query_string'] = TRUE;
    $config['reuse_query_string'] = true;
    $config['base_url']=$base_url;
    $config['total_rows']=$total;
    $config['per_page']=$per_page;
    $config['user_page_numbers']=true;
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    // $config['prev_link'] = '&lt';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    // $config['next_link'] = '&gt';
    if(!empty($uri))
    {
    $config['uri_segment'] =$uri;
    }
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    return $config;
}
public function send_email($to,$from,$subject,$message){
     $this->load->library('email');
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
