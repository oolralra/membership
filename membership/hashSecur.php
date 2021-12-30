<?php
$pw = "1234";
echo $pw."<br/>";
//Secure Hash Algorithm - 단방향 암호화
//sha1([문자열], [규칙]);
//TRUE - sha1 의 결과값이 20자리가 되어 출력됩니다.
//FALSE - sha1 의 결과값이 40자리가 되어 출력되어 규칙을 설정하지 않는 경우 기본값이 됩니다.
$pw = sha1('php'.$pw, false);
echo '암호화 후'.$pw."<br/>";
$pwd="1234";
// hash( 해싱 알고리즘 , 데이터,   raw_output  = FALSE )
//hash('sha256', $password);

$pwd=hash('sha256',$pwd);
echo '암호 '.$pwd;
$pwd=hash('sha512',$pwd);
echo '암호 '.$pwd;

?>