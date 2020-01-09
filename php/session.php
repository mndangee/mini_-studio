<?php

    session_start();

    include('condb.php');

    $user_check=$_SESSION['userid'];

    $ses_sql=mysqli_query($con, "select id from UserInfo where id='$user_check' ");

    $row=mysqli_fetch_array($ses_sql);

    $login_session=$row['userid'];


    if(!isset($login_session))
    {
        echo '0';
    }
    else
    {
        echo '1';
    }

?>
