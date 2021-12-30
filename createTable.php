<?php
  include './common/dbconnect.php';

  $sql="CREATE TABLE memberTBL( 
    memberID char(20) not null primary key,
    email varchar(100) unique not null,
    name varchar(100) not null,
    pwd varchar(200) ,
    birthday varchar(20) not null,
    regTime int not null
    );";

  $result = mysqli_query($con, $sql);
  if($result){
    echo 'memberTBL 테이블 생성 성공 <br/>';

  }else{
    echo 'member 테이블 생성 실패!!<br/>';
    echo '실패 원인 : '.mysqli_error($con);
  }

  /*
  $insertSql = "
  INSERT INTO MEMBERTBL(MEMBERID, EMAIL, NAME, PWD, BIRTHDAY, REGTIME) VALUES('a12','a@naver.com','홍길동','a','123',235), 
 ('b12','aaab@naver.com','홍동','b','123',239), ('c12','bbb@naver.com','김가','c','123',238); 
  ";

  $ret = mysqli_query($con, $insertSql);
  if($ret){
    echo 'memberTBL 테이블 삽입 성공 <br/>';

  }else{
    echo 'member 테이블 삽입 실패!!<br/>';
    echo '실패 원인 : '.mysqli_error($con);
  }

 $query = "select * from membertbl";
 
 $return = mysqli_query($con, $query);

 if($query){
   echo '조회된 쿼리'.mysqli_num_rows($return).'건 입니다. <br/>';
 }else{
   echo '조회 실패<br/>';
   echo '실패 원인 : '.mysqli_error($con);
   exit();
 }

 while($row = mysqli_fetch_array($return)){
   echo $row['memberID']," ",$row['name'],"<br/>";
 }


*/

  mysqli_close($con);
?>