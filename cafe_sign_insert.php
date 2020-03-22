<?php
session_start();
$user_name=$_POST["user_name"];
$user_id  =$_POST["user_id"];
$user_pass=$_POST["user_password"];
$user_phone=$_POST["user_phone"];
$user_email=$_POST["user_email"];
$user_level=$_POST["user_level"]+1;
$user_gender=$_POST["user_gender"];
$user_year=$_POST["user_year"];
$user_month=$_POST["user_month"];
$user_day=$_POST["user_day"];





$connect_sql = mysqli_connect("localhost","root","123456","cafe");

$insert_sql="INSERT INTO `cafe_member`(`user_name`,`user_id`,`user_password`,`user_phone`,`user_email`,`user_level`,`user_gender`,`user_year`,`user_month`,`user_day`)VALUES
(\"$user_name\",\"$user_id\",\"$user_pass\",\"$user_phone\",\"$user_email\",\"$user_level\",\"$user_gender\",\"$user_year\",\"$user_month\",\"$user_day\")";

$result = $connect_sql->query($insert_sql);
if($result === TRUE){
    echo "<script> alert('회원가입을 축하합니다 !');</script>";
}else{
    die('insert Error :'.mysqli_error($connect_sql));
}

echo "
    <script>
        location.href = 'index.php';
    </script>


"

?>