<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="localhost";
 $username="root";
 $password="Bir3t2020!!!";
 $databasename="siltalin";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $email=$_POST['email'];
 $pass=$_POST['password'];
 $select_data=mysql_query("SELECT * FROM user WHERE email='$email' AND password='$pass'");
 if($row=mysql_fetch_array($select_data))
 {
  $_SESSION['email']=$row['email'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>
