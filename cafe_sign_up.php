<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/sign_up.css">
<script src="./js/check_id.js"></script>
   
    <title>Document</title>
    
</head>
<body>

<header>
    <div>
        <a href="index.php"><img class="main_photo" src="./image/SBUX_CAH_Logo_international_RGB-01_4.png" alt=""></a>  
    </div>
</header>
<form name="cafe_form" action="cafe_sign_insert.php" method="post">
<div class="signup_form">
</div>
<div class="signup_form2">
    <span class="text_border">Sign up</span>
    <div class="side_border">

        <input class="input_name" type="text" name="user_name" placeholder="Name">

        <input class="input_id" type="text" name="user_id" placeholder="ID" id="check">
        <input type="button" value="중복확인" onclick="checkid();">
      
        <input class="input_password" type="password" name="user_password" placeholder="PassWord">

        <select class="input_gender" name="user_gender" id="">
            <option class="select_gender" value="남"><span>남</span></option>
            <option class="select_gender" value="여"><span>여</span></option>
        </select>

        <select class="input_birthday_year" name="user_year" id="">
            <option value="">년</option>
            <option class="select_gender" value="2003"><span>2003</span></option>
            <option class="select_gender" value="2002"><span>2002</span></option>
            <option class="select_gender" value="2001"><span>2001</span></option>
            <option class="select_gender" value="2000"><span>2000</span></option>
            <option class="select_gender" value="1999"><span>1999</span></option>
            <option class="select_gender" value="1998"><span>1998</span></option>
            <option class="select_gender" value="1997"><span>1997</span></option>
            <option class="select_gender" value="1996"><span>1996</span></option>
            <option class="select_gender" value="1995"><span>1995</span></option>
            <option class="select_gender" value="1994"><span>1994</span></option>
            <option class="select_gender" value="1993"><span>1993</span></option>
            <option class="select_gender" value="1992"><span>1992</span></option>
            <option class="select_gender" value="1991"><span>1991</span></option>
            <option class="select_gender" value="1990"><span>1990</span></option>

        </select>

        <select class="input_birthday_month" name="user_month" id="">
            <option value="">월</option>
            <option class="select_gender" value="01"><span>01</span></option>
            <option class="select_gender" value="02"><span>02</span></option>
            <option class="select_gender" value="03"><span>03</span></option>
            <option class="select_gender" value="04"><span>04</span></option>
            <option class="select_gender" value="05"><span>05</span></option>
            <option class="select_gender" value="06"><span>06</span></option>
            <option class="select_gender" value="07"><span>07</span></option>
            <option class="select_gender" value="08"><span>08</span></option>
            <option class="select_gender" value="09"><span>09</span></option>
            <option class="select_gender" value="10"><span>10</span></option>
            <option class="select_gender" value="11"><span>11</span></option>
            <option class="select_gender" value="12"><span>12</span></option>


        </select>

        <select class="input_birthday_day" name="user_day" id="">
            <option value="">일</option>
            <option class="select_gender" value="01"><span>01</span></option>
            <option class="select_gender" value="02"><span>02</span></option>
            <option class="select_gender" value="03"><span>03</span></option>
            <option class="select_gender" value="04"><span>04</span></option>
            <option class="select_gender" value="05"><span>05</span></option>
            <option class="select_gender" value="06"><span>06</span></option>
            <option class="select_gender" value="07"><span>07</span></option>
            <option class="select_gender" value="08"><span>08</span></option>
            <option class="select_gender" value="09"><span>09</span></option>
            <option class="select_gender" value="10"><span>10</span></option>
            <option class="select_gender" value="11"><span>11</span></option>
            <option class="select_gender" value="12"><span>12</span></option>
            <option class="select_gender" value="13"><span>13</span></option>
            <option class="select_gender" value="14"><span>14</span></option>
            <option class="select_gender" value="15"><span>15</span></option>
            <option class="select_gender" value="16"><span>16</span></option>
            <option class="select_gender" value="17"><span>17</span></option>
            <option class="select_gender" value="18"><span>18</span></option>
            <option class="select_gender" value="19"><span>19</span></option>
            <option class="select_gender" value="20"><span>20</span></option>
            <option class="select_gender" value="21"><span>21</span></option>
            <option class="select_gender" value="22"><span>22</span></option>
            <option class="select_gender" value="23"><span>23</span></option>
            <option class="select_gender" value="24"><span>24</span></option>
            <option class="select_gender" value="25"><span>25</span></option>
            <option class="select_gender" value="26"><span>26</span></option>
            <option class="select_gender" value="27"><span>27</span></option>
            <option class="select_gender" value="28"><span>28</span></option>
            <option class="select_gender" value="29"><span>29</span></option>
            <option class="select_gender" value="30"><span>30</span></option>
            <option class="select_gender" value="31"><span>31</span></option>

        </select>


        <input class="input_phone" type="text" name="user_phone" placeholder="Phone(010-0000-0000)">

        <input class="input_email" type="text" name="user_email" placeholder="Email(@+input)">

        <button class="signup_submit" type="submit">다음</button>
    
    
</div>




</div>




</form>

    
</body>
</html>