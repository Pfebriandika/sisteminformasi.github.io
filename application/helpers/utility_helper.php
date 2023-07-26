<?php
function post_curl($_url, $_param, $method, $ext = null)
{
    $CI = &get_instance();

    $postData = '';

    if ($_param != null and $method == 'POST') {
        $postData = json_encode($_param);
    }

    $authorization = "Authorization: Bearer " . $CI->session->userdata('bearer');

    // var_dump($authorization);


    $ch = curl_init();
    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_URL, $CI->config->item('api_url') . $_url);
    } else if ($method == 'GET') {
        if ($ext != NULL) {
            curl_setopt($ch, CURLOPT_URL, $ext);
        } else {
            curl_setopt($ch, CURLOPT_URL, $CI->config->item('api_url') . $_url . '/' . $_param);
        }
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $authorization));

    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, $postData);
        curl_setopt($ch, CURLOPT_POSTFIELDS,  $postData);
    }

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}

function encrypt_decrypt_Performance($action, $string)
{
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'en') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'de') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

////////////////////// base64 encode & decode
function base_en_pass($link)
{
    return 'TaG' . base64_encode($link) . '2020' . base64_encode($link) . 'TaG';
}
