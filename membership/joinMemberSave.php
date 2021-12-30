<?php
include './common/sessionstart.php';
include './common/dbconnect.php';

$id = $_POST['memberID'];
$email = $_POST['email'];
$name = $_POST['name'];
$pw = $_POST['pwd'];
$birthYear = (int) $_POST['birthYear'];
$birthMonth =(int) $_POST['birthMonth'];
$birthDay = (int) $_POST['birthDay'];

function goJoinMemberPage($alert){
    echo $alert.'<br/>';
    echo "<a href='joinMember.php'>회원가입 창으로 이동</a>";
    return;
}

//유효성 검사 - 이메일 검사
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    goJoinMemberPage('올바른 이메일이 아닙니다.');
    exit();
}


//유효성 검사 - 비밀번호 검사
if($pw==null || $pw==''){
    goJoinMemberPage('비밀번호를 입력하세요.');
    exit;
}

//암호화-단방향 암호화
$pw = sha1('test1234'.$pw, false);
//$pw = hash('sha256',$pw);


//태어난 연도 검사
if($birthYear==0){
    goJoinMemberPage("태어난 연도를 입력하세요.");
    exit;
}
//태어난 월 검사
if($birthMonth==0){
    goJoinMemberPage("태어난 월을 입력하세요.");
    exit;
}

//태어난 일 검사
if($birthDay==0){
    goJoinMemberPage("태어난 일을 입력하세요.");
    exit;
}
$birth = $birthYear.'-'.$birthMonth.'-'.$birthDay;
//id 중복 검사
$isIdCheck = false;


$sql = "select memberID from memberTBL where memberID='{$id}'";
$result = mysqli_query($con, $sql);

if($result){
    $count = mysqli_num_rows($result);
    if($count==0){
        $isIdCheck=true;
    }else{
        goJoinMemberPage('중복된 id입니다.');
        exit;
    }
}else{
    echo '에러 발생 : 관리자에게 문의해 주세요.';
    exit;
} 

//이메일 중복 검사
$isEmailCheck = false;


$sql = "select email from memberTBL where email='{$email}'";
$result = mysqli_query($con, $sql);

if($result){
    $count = mysqli_num_rows($result);
    if($count==0){
        $isEmailCheck=true;
   }else{
        goJoinMemberPage('중복된 이메일 주소입니다. 이메일을 확인해주세요.');
        exit;
    }
}else{
    echo '에러 발생 : 관리자에게 문의해 주세요.';
    exit;
}

//memberTBL 테이블에 회원 데이터 입력하기
if($isIdCheck==true && $isEmailCheck=true){
  $regTime = time();
  $sql = "insert into memberTBL(memberID, email, name, pwd, birthday, regTime)
          values('{$id}','{$email}','{$name}','{$pw}','{$birth}','{$regTime}');
  ";

  $result = mysqli_query($con, $sql);
  //$result = $con->query($sql);

  if($result){
      $_SESSION['memberID'] = $id;
      $_SESSION['email'] = $email;
      echo '회원가입이 되었습니다.<br/>';
      echo "<a href='login.php'>로그인 화면으로 이동 </a>";
  }else{
      echo '회원가입 실패 : 관리자에게 문의 바람';
      exit;
  }
}else{
    goJoinMemberPage('id 또는 이메일이 중복되었습니다.');
    exit;
}

mysqli_close($con);
?>