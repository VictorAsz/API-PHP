<?php

$data = [];

$data['status'] = 'ERROR';
$data['data'] = null;

if(isset($_GET['option'])){

    switch ($_GET['option']) {
        case 'status':
            success($data);
            $data['data'] = 'API running OK!';
            break;

    }

} 

response($data);

function success(&$data){
    $data['status'] = 'SUCCESS';
}
function response($data_response){
    header("Content-Type:application/json");
    echo json_encode($data_response);
}