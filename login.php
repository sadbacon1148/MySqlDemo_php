<?php
require "conn.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "SELECT * FROM 'employee_data' WHERE username='$user_name' AND password='$user_pass';";
$result = mysqli_query($conn,$mysql_qry);
if(!$result || mysqli_num_rows($result) > 0)
  {
    echo "login success";
  }
else
  {
    echo "login not success";
  }
?>
