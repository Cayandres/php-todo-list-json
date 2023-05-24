<?php
    $result = file_get_contents('db.json'); 
    
    $list = json_decode($result);

    if(isset($_POST['todoItem'])){
        $newTask = [
          "text" => $_POST['todoItem'],
          "done" => false
        ];

        $list[] = $newTask;
        filePut($list);
    };
    
    function filePut($list) {
        file_put_contents('db.json', json_encode($list));
    };

    header('Content-Type: application/json');

    echo json_encode($list);

