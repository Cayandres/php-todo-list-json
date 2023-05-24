<?php
    $result = file_get_contents('db.json'); 
    
    $phpDecode = json_decode($result);

    header('Content-Type: application/json');

   echo json_encode($phpDecode);

