<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>puu signUp page</title>
    <link rel="stylesheet" href="login.css" type="text/css">





  </head>

  <body>



    <div class="loginbox">
      <div class="loginInput">

<form class="" name="signUp" action="signUpProcess.php" method="post" onsubmit="idCheck();return false">


      <input type="text" name="ID" placeholder="이메일주소">
      <a id="add" href="javascript:id_Check()">[중복검사]</a>
      <br>
      <input type="text" name="Name" placeholder="이름">
      <input type="password" name="password" placeholder="비밀번호">
      <br>

      <input type="submit"  name="submit" value="회원가입" style="border: 0px; background-color:#aaaaaa; width:170px;"   ></li>
</form>
      </div>

    </div>


  </body>
</html>
