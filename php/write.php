<?php
    
    session_start();

    include('condb.php');
    
    $userid = $_SESSION['userid'];
    $title = $_REQUEST['title'];
    $subtitle = $_REQUEST['subtitle'];
    $content = $_REQUEST['content'];
    $date = date('Y/m/d');
    
    if($title == "" || $subtitle == "" || $content == "") { 
?>
        <script>
            alert('빈칸을 다 채워 주세요.');
            location.replace("../html/write.html");
        </script>
<?php   
    }
    else {

        $write = "insert into Post (post_id, userid, title, subtitle, content,date)";
        $write = $write. "values('null','$userid','$title','$subtitle','$content','$date')";

        if($connect->query($write)) {
?>      
        <script>
            location.replace("../html/now.html");
        </script>
<?php   
        }
        else{
?>              
        <script>                 
            alert("저장에 실패하였습니다");
            location.replace("../html/write.html");
        </script>
<?php   
        }
    }  
    mysqli_close($connect);
?>

