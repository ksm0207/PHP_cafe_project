<?php
session_start();
if(isset($_SESSION["user_id"])) $user_id=$_SESSION["user_id"];
else $user_id="";

if(isset($_SESSION["user_name"])) $user_name=$_SESSION["user_name"];
else $user_name="";

$user_name=$_POST["user_name"];
$user_id  =$_POST["user_id"];
$border_comment=$_POST["user_content"];
$border_subject=$_POST["board_subject"];
$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
$page_hit=$_POST["page_hit"];
$secret_number=$_POST["secret_number"];


$connect_sql = mysqli_connect("localhost","root","123456","cafe");

$insert_sql="INSERT INTO `user_board`(`user_name`,`user_id`,`user_content`,`board_subject`,`date`,`page_hit`,`secret_number`)
VALUES(\"$user_name\",\"$user_id\",\"$border_comment\",\"$border_subject\",\"$regist_day\",\"0\",\"$secret_number\")";

$border_subject = htmlspecialchars($border_subject, ENT_QUOTES);
	// htmlspecialchars : 문자열에서 특정한 특수 문자를 HTML 엔티티로 변환한다
$border_comment = htmlspecialchars($border_comment, ENT_QUOTES);



$result = $connect_sql->query($insert_sql);
if($result === TRUE){
    echo "<script> alert('Welcome to Cafe!');</script>";
}else{
    die('insert Error :'.mysqli_error($connect_sql));
}

echo "
    <script>
        location.href = 'cafe_board_list.php';
    </script>


"


?>
