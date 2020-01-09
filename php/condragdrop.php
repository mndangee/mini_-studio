<?php

    session_start();

    $output = '';

    if(isset($_FILES['file']['name'][0]))
    {
        foreach($_FILES['file']['name'] as $keys => $values) {
            if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], '../uploads/' . $values)) {
                $output .= '<img src="../uploads/'.$values.'" class="contentimg" style="width: 700px;"/><br>'; 

                $filename = $values;
                $imgurl = "http://127.0.0.1/project2/uploads/". $values;
                $size = $_FILES['file']['size'][$keys];

            }
        }
        echo $output;
    }


    $_REQUEST["filename"] = $filename;
    $_REQUEST["imgurl"] = $imgurl;
    $_REQUEST["size"] = $size;
?>