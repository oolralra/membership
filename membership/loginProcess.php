<?php
include './common/sessionstart.php';
include './common/dbconnect.php';

$id = $_POST['memberID'];
$email = $_POST['email'];
$pw = $_POST['pwd'];

function goLogInPage($alert){
    echo $alert.'<br/>';
    echo "<a href='login.php'>회원가입 창으로 이동</a>";
    return;
}

//유효성 검사 - id 검사
if($id==null || $id==''){
    goLogInPage('id를 입력하세요.');
    exit;
}

//유효성 검사 - 이메일 검사
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    goLogInPage('올바른 이메일이 아닙니다.');
    exit;
}

//유효성 검사 - 비밀번호 검사
if($pw==null || $pw==''){
    goLogInPage('비밀번호를 입력하세요.');
    exit;
}

//암호화-단방향 암호화
$pw = sha1('test1234'.$pw, false);
//$pw = hash('sha256',$pw);


$sql = "select memberID, email from memberTBL where memberID='{$id}' and email='{$email}' and pwd='{$pw}'";
$result = mysqli_query($con, $sql);
if($result){
    $count = mysqli_num_rows($result);
    if($count==0){
        goLogInPage('로그인 정보가 일치하지 않습니다.');
        echo "<a href='login.php'>로그인 화면으로 이동 </a>";
        exit;
    }else{
        $memberInfo = mysqli_fetch_array($result);
        $_SESSION['memberID'] = $memberInfo['memberID'];
        $_SESSION['email'] = $memberInfo['email'];

        echo "<a href='index.php'>메인 화면으로 이동 </a>"; 
    }
}

mysqli_close($con); 
?>