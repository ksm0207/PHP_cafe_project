<?

$user_id=$_POST["user_id"];
$user_pass=$_POST["user_password"];
$user_name=$_POST["user_name"];

$connect_sql = mysqli_connect("localhost","root","123456","cafe");
$select_sql  = "select * from cafe_member where user_id='$user_id'";

$result=mysqli_query($connect_sql,$select_sql);

$num_match=mysqli_num_rows($result);

if(!$num_match){

    echo("
    <script>
    window.alert('등록 되지 않은 아이디 입니다. 다시한번 확인해 주세요');
    history.go(-1)
    </script>
    ");
}else{
    $row = mysqli_fetch_array($result);
    $database_pass = $row["user_password"];
    
    mysqli_close($connect_sql);

    if($user_pass !== $database_pass){
        echo("
        <script>
        window.alert('비밀번호가 일치하지 않습니다 !');
        history.go(-1);
        </script>
        ");
        exit;
    }else{
        session_start();
        $_SESSION["user_id"]=$row["user_id"];
        $_SESSION["user_password"]=$row["user_password"];
        $_SESSION["user_name"]=$row["user_name"];
        $_SESSION["user_level"]=$row["user_level"];
        echo("
        <script>
        window.alert('로그인 하였습니다 !');
        </script>
        ");
    }
    echo("
      <script>
        location.href ='index.php';
        </script>
    ");
}


?>