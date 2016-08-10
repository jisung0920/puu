<?php
  echo "<script>
  window.alert('로그아웃 되었습니다.')
  </script>";

  SetCookie("UserID","",time()-100);
  SetCookie("UserName","",time()-100);

  echo "<script>
  location.replace('login.html')
  </script>";

 ?>
