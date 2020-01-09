<?php

    session_start();

    include('condb.php');

    $nickname = $_SESSION['nickname'];
    $userid = $_SESSION['userid'];
    $filename = $_REQUEST["filename"];
    $imgurl = $_REQUEST["imgurl"];
    $size = $_REQUEST["size"];
   
    $image = "insert into Images (image_id, userid, filename, imgurl, size)";
    $image = $image. "values('null','$userid','$filename','$imgurl','$size')";

    $imgresult=$connect->query($image);

    if(!isset($imgresult)) {
?>              
    <script>                 
            alert("저장에 실패하였습니다");
            history.back();
    </script>
<?php   
    }

    mysqli_close($connect);
?>     