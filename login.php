<?php
$userid=$_POST["ID"];
$userpw=$_POST["password"];
$con = mysql_connect('localhost','root','852963');
mysql_select_db("jisungdb",$con);
$result =mysql_query("select* from userinfo where id='$userid'",$con);
$total=mysql_num_rows($result);

if (!$total) {
  echo "<script>
  window.alert('존재하지 않는 이메일입니다.')
  history.go(-1)
  </script>";
  exit;
  # code...
}else {
  $pass=mysql_result($result,0,"pw");
  $username=mysql_result($result,0,"name");
  if ($pass!==$userpw) {
    echo "<script>
    window.alert('비밀번호가 틀렸습니다.')
    history.go(-1)
    </script>";
    exit;
  }else {
    SetCookie("UserID","$userid",0);
    SetCookie("UserName","$username",0);
  }
}
mysql_close($con);

echo "<script>
location.replace('main.php')
</script>";
 ?>
