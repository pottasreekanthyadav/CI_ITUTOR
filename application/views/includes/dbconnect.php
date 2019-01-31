 <?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
 $select=mysql_select_db("rl_tutorial");
	 if(!$select)
	 {
		 echo "DB not selected";exit;
	 }
 }
 else
{
 echo "DB Connection Error..!";
 exit;
}
 ?>