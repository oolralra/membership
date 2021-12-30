<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>
</head>
<body>
    <h1>로그인 화면</h1>
    <form action="loginProcess.php" method="post" name="signin">
    아이디 : <input type="text" name="memberID" id="memberID" required /><br /><br />
    이메일 : <input type="email" name="email" id="email" required /><br /><br />
    비밀번호 : <input type="password" name="pwd" id="pwd" required /><br /><br />
    <input type="submit" value="로그인" />
</form>
</body>
</html>