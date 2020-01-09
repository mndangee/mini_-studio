<?php
 
    session_start();
    $logout = session_destroy();
 
    if($logout) {
?>
    <script>
        alert("로그아웃 되었습니다.");
        location.replace("../html/index.html");
    </script>
<?php   
    }
?>
 

