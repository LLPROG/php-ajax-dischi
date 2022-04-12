<?php
    header('Content-Type: application/json');
    include __DIR__."/db/data.php";
    echo json_encode($arr_disci);