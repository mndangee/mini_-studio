<?php

    session_start();

    include('condb.php');

    $nickname = $_SESSION['nickname'];
    $title = $_REQUEST['title'];
    $subtitle = $_REQUEST['subtitle'];
    $content = $_REQUEST['content'];
    $post_id = $_REQUEST['post_id'];
    $date = date('Y/m/d');

    $query = "update Post set title ='$title', subtitle ='$subtitle', content = '$content', date='$date' where post_id = $post_id";
    $result = $connect->query($query);

    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("../html/view.html?post_id=<?php echo $post_id ?>");
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