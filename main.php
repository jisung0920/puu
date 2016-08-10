<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>puu main page</title>
    <link rel="stylesheet" href="main.css" type="text/css">
</head>


<body>
  <?php
if (!isset($_COOKIE["UserName"])) {
  echo "<script>
  window.alert('로그인 하세요');
 <meta http-equiv='refresh' content='0;url=login.php'>
  </script>";
  # code...
}
   ?>
    <div class="topBody">
        <a href="main.php">
            <img style="margin-left:10px" src="puu_logo.jpg" height="40px" align="middle" width="80px" />
        </a>

        <?php
        echo $_COOKIE["UserName"];?>
        <a style="text-decoration:none; float:right" href="logout.php" target="_self">
      로그아웃
        </a>
    </div>

    <div class="leftBody">

        <ul id="leftMenu">

            <li style="font-size:10px">
                <a href="">
                    <img src="puu_timeline_p1.jpg" height="35px" width="35px" alt="middle" />
                </a>
            </li>

            <li>
                <a href="">
                    <img src="puu_fav_p1.jpg" height="35px" width="35px" alt="middle" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="puu_setting_p1.jpg" height="35px" width="35px" alt="middle" />
                </a>
            </li>


        </ul>

    </div>
    <div class="centerTop">
        <a href="#">
            <img src="facebook_logo.jpg" height="30px" width="30px" alt="middle" /></a>
        <a href="#">
            <img src="youtube_logo.jpg" height="30px" width="30px" alt="middle" /></a>
    </div>
    <div class="centerBody">

        <div class="contentLine">
            contenstLine
            <div class="contents">
                content
            </div>

        </div>

        center

    </div>
    <div class="bottom">
        copyright Jisung
    </div>


</body>

</html>
