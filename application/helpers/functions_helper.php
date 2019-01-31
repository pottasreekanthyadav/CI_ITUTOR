<?php
function get_age($dob){
$d1=strtotime($dob);
$d2=date("d-m-YY");
$d3=strtotime($d2);
$diff=$d3-$d1;
$seconds_year=365*24*3600;
$years=($diff)/($seconds_year);
$arr=explode('.',$years);
echo $arr[0];
} 
function get_age_api($dob){
$d1=strtotime($dob);
$d2=date("d-m-YY");
$d3=strtotime($d2);
$diff=$d3-$d1;
$seconds_year=365*24*3600;
$years=($diff)/($seconds_year);
$arr=explode('.',$years);
return $arr[0];
} 
function common_str($str)
{
$result = implode(',', array_unique(explode(',', $str)));
echo $result;
}

?>