
<?php
    $content_type = "";
    $v = ["_embedded"];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo json_encode($v);
        $content_type = "application/json";
    } else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo json_encode($v);
        $content_type = "application/json";
    } else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $content_type = "application/json";
    } else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        $content_type = "application/json";
    }

    echo $v;
?>