<?php
require __DIR__ . '/vendor/autoload.php';

// eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjdXN0b21lcl9jb2RlIjoiMTcxMDkyIiwic2VydmljZV9uYW1lIjoiU01BUlQgQVBQUyJ9.0oLI35DNJPwjv5vnTYnra-Ok17WNkGSIcLvsWuxxreE

// APIトークン作成用 暗号化鍵
define("API_TOKEN_KEY", '7HtXrSi6eKspGxXWaMmsikms3gPBsuGd');

// APIトークン作成用 暗号化アルゴリズム
define("API_TOKEN_ENCRYPTION_ALGORITHM", 'HS256');

//$service_name = 'service03';
//$service_name = 'service02';
//$service_name = 'service01';
//$service_name = 'service04';
$service_name = '';
if(isset($argv[1])){
    $service_name = $argv[2];
    $customer_code = $argv[1];
    $data = [
            'customer_code' => $customer_code,
            'service_name' => $service_name
        ];
    $token = JWT::encode($data, API_TOKEN_KEY, API_TOKEN_ENCRYPTION_ALGORITHM);
    echo($token);
}else{
    print_r('customer_code ga naiyo');
}

?>