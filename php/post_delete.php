<?php
    
    session_start();

    include('condb.php');

    $post_id = $_REQUEST['post_id'];

    $query4 = "delete from TComment where post_id = '$post_id'";
    $result4 = $connect->query($query4);

    if($result4) {

        $query3 = "delete from Comment where post_id = '$post_id'";
        $result3 = $connect->query($query3);
        
        if($result3) {

            $query2 = "delete from LikePost where post_id = '$post_id'";
            $result2 = $connect->query($query2);

            if($result2) {

                $query = "delete from Post where post_id = '$post_id'";
                $result = $connect->query($query);
        
                if($result) {
?>      
                <script>
                    alert("삭제되었습니다.");
                    location.replace("../html/mypic.html");
                </script>
<?php       
                }
                else {
?>
                <script>
                    alert("삭제 실패");
                    history.back();
                </script>
<?php
                }
            }
            else {
?>
                <script>
                    alert("삭제 실패");
                    history.back();
                </script>
<?php 
            }
        }
        else {
?>
            <script>
                alert("삭제 실패");
                history.back();
            </script>
<?php
        }
    }
    else {
?>
        <script>
            alert("삭제 실패");
            history.back();
        </script>
<?php
    }

    mysqli_close($connect);
?>