<?php

    session_start();

    include('condb.php');

    $filename = $_REQUEST["filename"];
    $imgurl = $_REQUEST["imgurl"];
    $size = $_REQUEST["size"];

    echo $filename;
    echo $imgurl;
    echo $size;
   
    $cimage = "insert into ContentImages (cimage_id, filename, imgurl, size)";
    $cimage = $cimage. "values('null', $filename','$imgurl','$size')";

    $cimgresult=$connect->query($cimage);

    if(!isset($cimgresult)) {
?>              
    <script>                 
            alert("저장에 실패하였습니다");
            history.back();
    </script>
<?php   
    }

    mysqli_close($connect);
?>     