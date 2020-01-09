<?php
 
    session_start();   

    include('condb.php');

    $name = $_REQUEST["name"];
    $userid = $_REQUEST["userid"];
    $password = $_REQUEST["password"];
    $password2 = $_REQUEST["password2"];
    $nickname = $_REQUEST["nickname"];
    $email = $_REQUEST["email"];
    $address = $userid;

    if($name == "" || $userid == "" || $password == "" || $nickname == "" ) {
?>
	<script>
        alert('빈칸을 다 채워주세요.');
        history.back();
    </script>
<?php   
    }
    else {
        $sql = "SELECT * FROM UserInfo WHERE userid = '$userid' or nickname = '$nickname'";
        $check = $connect->query($sql);
        if($check->num_rows >= 1){
?>
        <script>
            alert('이미 존재하는 아이디 혹은 닉네임이 있습니다.');
            history.back();
        </script>    
<?php    
        }
        else if ($password != $password2) {
?>
        <script>
            alert('비밀번호를 다시 확인 해 주세요.');
            history.back();
        </script>    
<?php   
        }
        else {
            $signup = "insert into UserInfo (name, userid, passwd, nickname, description, address)";
            $signup = $signup. "values('$name','$userid','$password','$nickname','','$address')";

            if($connect->query($signup)) {
?>      
            <script>
                alert('가입이 완료되었습니다.');
                location.replace("../html/login.html");
            </script>
<?php   
            }
            else{
?>              
            <script>                 
                alert("가입이 실패하였습니다");
                history.back();
            </script>
<?php   
            }
        }
    }
    mysqli_close($connect);
?>