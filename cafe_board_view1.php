<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?
    session_start();
    if(isset($_SESSION["user_id"]))$user_id =$_SESSION["user_id"];
    else $user_id="";
    if(isset($_SESSION["user_level"]))$user_level=$_SESSION["user_level"];
    else $user_level="";

    if(isset($_SESSION["userid"])){

    }

    
    ?>

</head>
<body>
    <div>
    <input type="text" value="<?=$user_level?>">
    <input type="text" value="<?=$user_id?>">

    </div>
    
</body>
</html>