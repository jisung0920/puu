
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>puu login</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <script>
        function nullCheck() {
            if (document.login.ID.value == '') {
                alert("이메일 주소를 입력하세요");
            } else if (document.login.name.value == '') {
                alert("이름을 입력하세요");
            } else {
                document.login.submit();
                return true;
            }
        }
    </script>

</head>
<style media="screen">

</style>

<body>

    <div class="loginbox">
        <form name="login" class="login access" action="login.php" method="post" onsubmit="nullCheck();return false">
            <p>
                <div class="loginInput">


                    <input type="text" name="ID" placeholder="이메일주소">
                    </li>
                    <br>
                    <input type="password" name="password" placeholder="비밀번호">
                    </li>
                    <br>
                    <input type="submit" name="submit" value="로그인" style="border: 0px; background-color:#aaaaaa; width:170px;">
                    </li>
                </div>
                <div class="addit">

                    <a id="add" href="signUp.php">회원가입</a> |
                    <a id="find" href="Member/findID.html" target="_blank">아이디찾기</a> |
                    <a id="find" href="Member/findPW.html" target="_blank">비밀번호찾기</a>

                </div>

            </p>

        </form>

    </div>



</body>

</html>
