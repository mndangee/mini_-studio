<?php
    
    session_start();

    include('condb.php');

    $userid = $_SESSION['userid'];

    $query = "DELETE FROM TComment WHERE userid = '$userid'";
    $result = $connect->query($query);

    if($result) {

        $query2 = "DELETE FROM Comment WHERE userid = '$userid'";
        $result2 = $connect->query($query2);

        if($result2) {

            $query3 = "DELETE FROM LikePost WHERE userid = '$userid'";
            $result3 = $connect->query($query3); 

            if($result3) {

                $post = "SELECT * FROM Post WHERE userid = '$userid'";
                $p_result=$connect->query($post);
                $rows=mysqli_fetch_assoc($p_result);
                
                $post_id = $rows['post_id'];

                $p_query = "delete from TComment where post_id = '$post_id'";
                $p_delete = $connect->query($p_query);
                
                if($p_delete) {

                    $p_query2 = "delete from Comment where post_id = '$post_id'";
                    $p_delete2 = $connect->query($p_query2);

                    if($p_delete2) {

                        $p_query3 = "delete from LikePost where post_id = '$post_id'";
                        $p_delete3 = $connect->query($p_query3);
                        
                        if($p_delete3) {
                
                            $query4 = "DELETE FROM Post WHERE userid = '$userid'";
                            $result4 = $connect->query($query4);
                
                            if($result4) {
                    
                                $query5 = "DELETE FROM Images WHERE userid = '$userid'";
                                $result5 = $connect->query($query5); 
                    
                                if($result5) {

                                    $query6 = "DELETE FROM UserInfo WHERE userid = '$userid'";
                                    $result6 = $connect->query($query6); 

                                    if($result6) {
?>      
                                        <script>
                                            alert("탈퇴되었습니다.");
                                        </script>
<?php       
                                        $destroy = session_destroy();
                                        if($destroy) {
?>
                                        <script>
                                            location.replace("../html/index.html");
                                        </script>
<?php      
                                        } 
                                    }
                                    else {
?>
                                        <script>
                                            alert("탈퇴 실패1");
                                            history.back();
                                        </script>
<?php
                                    }
                                }
                                else {
?>
                                    <script>
                                        alert("탈퇴 실패2");
                                        history.back();
                                    </script>
<?php
                                }
                            }
                            else {
?>              
                                <script>
                                    alert("탈퇴 실패3");
                                    history.back();
                                </script>
<?php
                            }
                        }
                        else {
?>              
                            <script>
                                alert("탈퇴 실패4");
                                history.back();
                            </script>
<?php
                        }
                    }
                    else {
?>              
                        <script>
                            alert("탈퇴 실패5");
                            history.back();
                        </script>
<?php
                    }
                }
                else {
?>              
                    <script>
                        alert("탈퇴 실패6");
                        history.back();
                    </script>
<?php
                }
            }
            else {
?>              
                <script>
                    alert("탈퇴 실패7");
                    history.back();
                </script>
<?php
            }
        }
        else {
?>              
            <script>
                alert("탈퇴 실패8");
                history.back();
            </script>
<?php
        }
    }
    mysqli_close($connect);
?>