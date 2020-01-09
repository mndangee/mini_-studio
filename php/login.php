<?php

    session_start();

    include('condb.php');
 
    $userid = $_REQUEST['userid'];
    $password = $_REQUEST['password'];

    $sql = "SELECT * FROM UserInfo WHERE userid = '$userid'";
    $result=$connect->query($sql); 

    if(mysqli_num_rows($result)==1) {
 
        $row=mysqli_fetch_assoc($result);

 
        if($row['passwd']==$password){

            $_SESSION['userid'] = $userid;
        
            if(isset($_SESSION['userid'])){
            ?>     
            <script>
                location.replace("../html/index.html");
            </script>
<?php
            }   
            else{
                echo "세션저장실패";
            }
        }
 
        else {
        ?>              
        <script>
            alert("비밀번호를 다시 입력해 주세요.");
            history.back();
        </script>
<?php
        }
 
    }
 
    else{
    ?>              
    <script>
        alert("비밀번호와 아이디를 다시 입력해 주세요.");
        history.back();
    </script>
<?php
    }
  
?>

