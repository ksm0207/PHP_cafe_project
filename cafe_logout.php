<?
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_level"]);

echo("
<script>
    window.alert('로그아웃');
   location.href = 'index.php';
  </script>
");
?>