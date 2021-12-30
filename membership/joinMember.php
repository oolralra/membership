<?php
include './common/sessionstart.php';
include 'head.php';
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./css/basic.css" rel="stylesheet" type="text/css">
  <style>
    .section_container {
      width: 960px;
      height: 500px;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <div class="section_container">
    <h1> 회원가입 </h1>
    <form action="joinMemberSave.php" method="post" name="signup">
      아이디 : <input type="text" name="memberID" id="memberID" required /><br /><br />
      이메일 : <input type="email" name="email" id="email" required /><br /><br />
      이 름 : <input type="text" name="name" id="name" required /><br /><br />
      비밀번호 : <input type="password" name="pwd" id="pwd" required /><br /><br />
      생일<br />
      <select name="birthYear" required>
        <?php
            $thisYear = date('Y', time());
            for($i=1920; $i<=$thisYear; $i++){
                echo "<option value='{$i}'>{$i}</option>";
            }
        ?>
      </select>년&nbsp; &nbsp;
      <select name="birthMonth" required>
        <?php
           for($i=1; $i<=12; $i++){
                echo "<option value='{$i}'>{$i}</option>";
            }
        ?>
      </select>월&nbsp; &nbsp;
      <select name="birthDay" required>
        <?php
           for($i=1; $i<=31; $i++){
                echo "<option value='{$i}'>{$i}</option>";
            }
        ?>
      </select>일<br /><br />

      <input type="submit" value="가입하기" />
    </form>
  </div>
</body>

</html>

<?php
include 'footer.php';
?>