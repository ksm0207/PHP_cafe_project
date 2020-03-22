<?
$connect_sql = mysqli_connect("localhost","root","123456","cafe");

$user_id = $_GET["user_id"];

$select_sql = "select * from cafe_member where user_id='".$user_id."'";


$result = $connect_sql->query($select_sql);

$row = mysqli_num_rows($result);

if($row === 0){

?>
<div>
<?
 echo $user_id.'는 사용가능한 아이디입니다.';
?>


</div>

<?
}

else{
?>

<div>
<?
    echo $user_id.'중복';
?>

</div>
<?
}
?>

