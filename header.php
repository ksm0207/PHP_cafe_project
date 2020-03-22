<?
session_start();

if(isset($_SESSION["user_id"]))$user_id =$_SESSION["user_id"];
else $user_id="";

if(isset($_SESSION["user_name"]))$user_name=$_SESSION["user_name"];
else $user_name="";

if(isset($_SESSION["user_password"]))$user_password=$_SESSION["user_password"];
else $user_password="";

if(isset($_SESSION["user_level"]))$user_level=$_SESSION["user_level"];
else $user_level="";



?>

<link rel="stylesheet" href="./css/header.css">
<header>

<div class="header_main">

    <div>
        <?
            if(!$user_id){
        ?>
        <a href="index.php"><img class="header_photo" src="./image/SBUX_CAH_Logo_international_RGB-01_4.png" alt=""></a>
        <a class="header_signup_login" href="#">도움말 센터</a>
        <a class="header_signup_login" href="cafe_sign_up.php">회원가입</a>
        <a class="header_signup_login" href="cafe_login.php">로그인</a>
    </div>
    <?
    }else{
        $log="Welcome to Side Project!!      ".$user_name.'님  활동레벨 :'.$user_level;
    ?>
        <a href="index.php"><img class="header_photo" src="./image/SBUX_CAH_Logo_international_RGB-01_4.png" alt=""></a>

            <a class="header_signup_login" href="#">도움말 센터</a>
            <a class="header_signup_login" href="cafe_logout.php">로그아웃</a>
            <li class="list_login" href="#"><?=$log?></li>
            
        
    <?
    }
    ?>    
    
    
    <div class="header_border_bottom">
        
        <div class="find_text_center">
            <a class="find_a" href="#"><span>종류별 커피를 확인해 보세요</span></a>
            <a class="find_a" href="#"><span>회사 소개</span></a>
            <a class="find_a" href="cafe_board_select.php"><span>게시판</span></a>
            <a class="find_a" href="#"><span>머신 알아보기</span></a>
        </div>
        </div>            

        

        
    
    </div> <!-- end of header_border_bottom ys  -->  
     
</div>
</header>
