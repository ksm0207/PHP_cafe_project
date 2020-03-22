<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/border_list.css">

    <title>Document</title>
</head>
<?
session_start();
if(isset($_SESSION["user_id"]))$user_id =$_SESSION["user_id"];
else $user_id="";


	
	if (!$user_id){
		echo("
					<script>
					alert( '');
					history.go(-1)
					</script>
		");
				exit;
	}
?>  
<header>
    <? include 'header.php' ?>
</header>
<body>
    <form action="#" method="POST">
    <div class="list_form">
        <div class="list_form2">
            <ul>
        <li>
                <span class="list_number1">글번호</span>
                <span class="list_number1">제목</span>
                <span class="list_number1">작성자</span>
                <span class="list_number1">작성날짜</span>
                <span class="list_number1">조회수</span>
                <span class="list_number1">첨부파일(예정)</span>
            </li>
        </ul>

        </div>
        <ul>
           
        <?

        if(isset($_GET["page"])){
           $page=$_GET["page"];    
        }else{
            $page=1;
        }
            $connect_sql = mysqli_connect("localhost","root","123456","cafe");
            $select_sql = "select * from user_board order by number desc ";
            $result= mysqli_query($connect_sql,$select_sql);
            
            $total_data=mysqli_num_rows($result);
            $scale = 10;

            if($total_data % $scale == 0){
                $total_page = floor($total_data / $scale);
            }else{
                $total_page = floor($total_data / $scale) + 1;
                $start=($page-1) * $scale;
                $number = $total_data - $start;
            }
        for($i = $start ; $i < $start + $scale && $i < $total_data ; $i++){
            mysqli_data_seek($result , $i);

            $row = mysqli_fetch_array($result);
            $user_id = $row["user_id"];
            $user_name = $row["user_name"];
            $border_subject = $row["board_subject"];
            $regist_day = date("Y-m-d (H:i)");
            $page_hit = $row["page_hit"];
        ?>
           <div class="list_form3">
               <div class="list_form4">
                <span class="list_number2"><?=$number?></span>
                <?
                ?>
					<!-- <span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span> -->
                <span class="list_number2"> <a class="subject_text" href="cafe_board_view1.php">    <?=$border_subject?> </a></span>
                <span class="list_number2"><?=$user_name?></span>
                <span class="list_number2"><?=$regist_day?></span>
                <span class="list_number2"><?=$page_hit?></span>
                <span class="list_number2"></span>
               </div>
        </div>
<?      $number --;
    }
    mysqli_close($connect_sql);

?>  
    <ul>
 <?
    if($total_page >=2 && $page >= 2){
        $new_page = $page-1;

      		echo "<li><a href='cafe_board_list.php?page=$new_page'> 이전 </a> </li>";

    }else{
        echo "<li>&nbsp;</li>";
    }
    for($i=1; $i<=$total_page; $i++){
        if($page === $i){
            echo "<li> $i </li>";
        }else{
            echo "<li> <a href = 'cafe_board_list.php?page=$i'>$i</a></li>";
        }
    }
    if($total_page >=2 && $page != $total_page){
        $new_page = $page+1;
        echo "<li><a href='cafe_board_list.php?page=$new_page'>다음</a> </li>";
    }else{
		echo "<li>&nbsp;</li>";

    }
 ?>       

    </ul>

    </div>
    </form>
    
</body>
</html>