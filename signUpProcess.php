<?php
if (!$_POST["ID"]) {
  echo "
  <script>
    window.alert('주소를 입력하세요')
    history.go(-1)
    </script>
    ";

}
elseif(!$_POST["Name"]) {
  echo "
  <script>
    window.alert('이름을 입력하세요')
    history.go(-1)
    </script>
    ";

}
elseif (!$_POST["password"]) {
  echo "
  <script>
    window.alert('비밀번호를 입력하세요')
    history.go(-1)
    </script>
    ";
}else {
  echo"
  <script>
    window.alert('회원가입이 완료되었습니다.')
    </script>
    ";
}
$ID =$_POST["ID"];
$name=$_POST["Name"];
$password=$_POST["password"];
$con = mysql_connect('localhost','root','852963');
mysql_select_db("jisungdb",$con);
mysql_query("insert into userinfo(id,name,pw) values('$ID','$name','$password')",$con);
mysql_close($con);


echo "<script>
location.replace('login.html');
</script>";
 ?>
