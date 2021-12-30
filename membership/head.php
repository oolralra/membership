<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>웹페이지 제작 연습</title>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
  <link href="./css/basic.css" rel="stylesheet" type="text/css">
  <style>
    .head_container {
      position: relative;
      width: 960px;
      height: 150px;
      margin: 5px auto;
      background-color: #070373;
    }

    .main_logo>h1 {
      position: absolute;
      left: 20px;
      top: 50px;
      font-family: 'Nanum Pen Script', cursive;
      font-size: 3rem;
      letter-spacing: 7px;
    }

    .main_logo>h1>a{
      color: white;
    }
    .main_logo>h1>a:visited{
      color: white;
    }
    .head_top_navi {
      position: absolute;
      right: 5px;
      top: 5px;
      overflow: hidden;
    }

    .head_top_navi li {
      float: left;
    }

    .head_top_navi a {
      display: inline-block;
      padding: 2px 5px;
      color: white;
    }
    .head_top_navi a:visited {
      display: inline-block;
      padding: 2px 5px;
      color: white;
    }
    .head_top_navi a:hover {
      color: red;
    }

    .head_main_navi {
      position: absolute;
      left: 400px;
      bottom: 10px;
      overflow: hidden;
    }

    .head_main_navi li {
      float: left;
    }

    .head_main_navi a {
      display: inline-block;
      padding: 2px 10px;
      font-size: 1.5rem;
      letter-spacing: 5px;
      color: white;
    }
    .head_main_navi a:visited {
      display: inline-block;
      padding: 2px 10px;
      font-size: 1.5rem;
      letter-spacing: 5px;
      color: white;
    }
    .head_main_navi a:hover {
      color: blue;
      background-color: #b5dff5;
      border-radius: 5px;
    }
  </style>

</head>

<body>
  <div class="head_container">
    <div class="main_logo">
      <h1><a href="index.php">한국정보교육원</a></h1>
    </div>
    <div class="head_top_navi">
      <ul>
        <li><a href="login.php" target="_blank">로그인</a></li>
        <li><a href="joinMember.php" target="_blank">회원가입</a></li>
        <li><a href="#" target="_blank">사이트맵</a></li>
      </ul>
    </div>
    <div class="head_main_navi">
      <ul>
        <li><a href="#" target="_blank">메뉴1</a></li>
        <li><a href="#" target="_blank">메뉴2</a></li>
        <li><a href="#" target="_blank">메뉴3</a></li>
      </ul>
    </div>
  </div>
</body>

</html>