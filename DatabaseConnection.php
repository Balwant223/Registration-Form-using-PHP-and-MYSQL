<?php
$con=mysql_connect("localhost","root","") or die("not connected");
mysql_select_db("student",$con);

extract($_POST);
if(isset($save))
{
$dob=$yy."-".$mm."--".$dd;
$h=implode(",",$hobb);
$img=$_FILES['pic']['name'];

$sql=mysql_query("select email from studentdetails where email='$e'");
$return=mysql_num_rows($sql);

if($return)
{
$msg="<font color='red'>".ucfirst($e)."already exists choose another email</font>";
}
else
{
$query="insert into studentdetails values('','$n','$e','$p','$m','$g','$h','$dob','$add','$img',now())";
mysql_query($query);
$msg= "<font color='blue'>Your data saved</font>";
}
}
?>
