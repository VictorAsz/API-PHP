<?php

define('API_BASE', 'http://localhost/API%20PHP/api/?option=' );

function api_request($option){
 $client = curl_init(API_BASE . $option);
}

?>