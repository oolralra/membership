<?php
 include './common/sessionstart.php';
 include './common/dbconnect.php';
 unset($_SESSION['memberID']);
 unset($_SESSION['email']);
 echo '로그아웃 되었습니다.';
 echo "<a href='index.php'>메인페이지로 이동 </a>";

 mysqli_close($con);
?>