<link rel="stylesheet" href="./css/border.css">
<header>
 <? include "header.php" ?>
</header>
<?
session_start();
if(isset($_SESSION["user_id"]))$user_id =$_SESSION["user_id"];
else $user_id="";


	
	if (!$user_id){
		echo("
					<script>
					alert( '로그인 후 이용가능 합니다.');
					history.go(-1)
					</script>
		");
				exit;
	}
?>  

<form action="cafe_board_insert.php" method="post">
    <div >
    </div>
<div class="border_header">
 
    <div class="border_header_2">
        <input type="hidden" name="user_id" value="<?=$user_id?>">
        <span class="user_form">작성자 <input class="input_user" name="user_name" type="text" value="<?=$user_name?>"></span>  
        <span class="user_form">제목   <input class="input_subject" name="board_subject" type="text"></span>  
        <span class="border_comment">내용</span>
        <textarea class="text_comment" name="user_content" id="" cols="130" rows="20"></textarea> 
        
        <input class="secret_number" name="secret_number" type="password" value="" placeholder="암호"> 
 
    </div>
    <div class="border_top">
        <button type="submit" class="submit_border">작성하기</button>
        <a class="border_list" href="cafe_board_list.php">목록</a></button>

    </div>
    

</div>
</form>
