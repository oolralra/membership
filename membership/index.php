<?php
include './common/sessionstart.php';
include $_SERVER['DOCUMENT_ROOT'].'/phpexam/membership/common/dbconnect.php';
// echo '세션 시작과 접속이 성공하였습니다.<br/> ';
//echo $_SERVER['HTTP_HOST'];   
/* php superglobal 변수 : PHP의 일부 미리 정의된 변수을 "superglobal"이라하며
       이는 범위와 관계없이 항상 액세스할 수 있고, 특별한 작업 없이도 함수, 클래스 또는 파일에서 액세스할 수 있다.

$_SEVER[' '] : PHP super global variable(php 자체적으로 내장된 변수이며 데이터형은 배열, 인덱스 값에 따라 다양한 정보를 획득 가능)
   'DOCUMENT_ROOT' : 문서의 루트 
   'PHP_SELF' : 현재 실행 중인 파일의 경로와 파일명 표시
   'HTTP_HOST' : 현재 리퀘스트의 HOST 헤더 내용(localhost,...)
   'REQUEST_METHOD' :페이지에 액세스할 때 사용된 리퀘스트의 메소드명(POST, GET)
   ...
*/
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
  .section_container{
      width:960px;
      height : 600px;
  }
  </style>
</head>

<body>
   <div class="section_container">
    <h1> 회원 관리 화면 </h1>
   <?php
    if(!isset($_SESSION['memberID'])){  //$_SESSION['memberID']은 로그인 성공시 생성하는 세션
                                        // 세션이 존재하지 않으면 회원가입 및 로그인 하도록 설정
   ?>  
    <h3><a href="joinMember.php">회원 가입</a></h3>
    <h3><a href="login.php">로그인</a></h3> 
    
    <?php
         }else{ //$_SESSION['memberID']가 있는 경우는 회원조회, 회원수정, 회원 삭제
    ?>
    <br/><br/>
    <h3><a href="memberSelect.php">회원 조회</a></h3>
    <h3><a href="memberUpdate.php">회원 수정</a></h3>
    <h3><a href="memberDelete.php">회원 삭제</a></h3>
    <h3><a href="logout.php">로그아웃</a></h3>   
    <?php
         }
    ?>

  </div>
</body>

</html>




<?php
mysqli_close($con);
include 'footer.php';
?>