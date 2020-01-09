<?php 
    session_start();
    include('condb.php');

    $userid = $_SESSION['userid'];
    $post_id = $_REQUEST['post_id'];

    $like = "insert into LikePost (like_id, post_id, userid)";
    $like = $like. "values('null', '$post_id', '$userid')";

    if($connect->query($like)) {
?>      
        <script>
            location.replace("../html/view.html?post_id=<?php echo $post_id ?>");
        </script>
<?php   
    }else{
?>              
        <script>                 
            alert("좋아요 오류");
            history.back();
        </script>
<?php   
    }  
    mysqli_close($connect);
?>


