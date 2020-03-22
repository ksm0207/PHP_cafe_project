function checkid(){
    var userid = document.getElementById("check").value;
    if(userid){
        url="cafe_signup_check.php?user_id="+userid;
        window.open(url,"chkid","width=300,height=100");
    }else{
        alert("아이디를 입력하세요!");
    }
}