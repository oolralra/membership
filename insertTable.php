<?php
  include './common/dbconnect.php';
  $sql = "
  INSERT INTO MEMBERTBL(MEMBERID, EMAIL, NAME, PWD, BIRTHDAY, REGTIME) VALUES('a12','a@naver.com','홍길동','a','123',235), 
 ('b12','aaab@naver.com','홍동','b','123',239), ('c12','bbb@naver.com','김가','c','123',238); 
  ";

  $ret = mysqli_query($con, $sql);
  if($ret){
    echo 'memberTBL 테이블 삽입 성공 <br/>';

  }else{
    echo 'member 테이블 삽입 실패!!<br/>';
    echo '실패 원인 : '.mysqli_error($con);
  }

  mysqli_close($con);
?>