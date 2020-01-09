<?php

    session_start();

    include('condb.php');

    $userid = $_SESSION['userid'];
    $nickname = $_REQUEST['nickname'];
    $address = $_REQUEST['address'];
    $description = $_REQUEST['description'];


        $query = "update UserInfo set nickname ='$nickname', address ='$address', description = '$description' where userid = '$userid'";
        $info = $connect->query($query);
    
   
        if($info) {
?>
            <script>
                alert("수정되었습니다.");
                location.replace("../html/m_studio.html?address=<?php echo $address ?>");
            </script>
<?php    }
        else {
?>              
            <script>                 
                alert("수정에 실패하였습니다");
                history.back();
            </script>
<?php  
        }
?>