<?php
    
    session_start();

    include('condb.php');

    $post_id = $_REQUEST['post_id'];
    $userid = $_SESSION['userid'];
    
    $delete = "delete from LikePost where post_id='$post_id' AND userid='$userid'";
    $result = $connect->query($delete);

    if($result) {
?>
        <script>
            history.back();
        </script>
<?php    
    }
    else {
?>              
        <script>
            alert("제거 실패");
            history.back();
        </script>
<?php
    }
    mysqli_close($connect);
?>