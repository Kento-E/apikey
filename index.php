<?php
require __DIR__ . '/vendor/autoload.php';

// APIトークン作成用 暗号化鍵
define("API_TOKEN_KEY", '7HtXrSi6eKspGxXWaMmsikms3gPBsuGd');

// APIトークン作成用 暗号化アルゴリズム
define("API_TOKEN_ENCRYPTION_ALGORITHM", 'HS256');

$service_name = '';
if(isset($_POST['customer_no'])){
    $service_name = $_POST['service_code'];
    $customer_code = $_POST['customer_no'];
    $data = [
            'customer_code' => $customer_code,
            'service_name' => $service_name
        ];
    $token = JWT::encode($data, API_TOKEN_KEY, API_TOKEN_ENCRYPTION_ALGORITHM);
    echo('<p id="token">');
    echo($token);
    echo('</p>');
    echo('<button id="btn" data-clipboard-target="#token" autofocus>クリップボードにコピー</button>');
}else{
    print_r('顧客No.を入力してください。');
}

?>
<html>
<head>
	<meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
    <script>
        $(function () {
            new ClipboardJS('#btn');
        });
    </script>
</head>
<body>
    <h1>APIトークンの生成</h1>
    <form method="post">
        <input type="number" id="customer_no" name="customer_no" placeholder="6ケタの顧客No.を入力" autofocus>
        <select name="service_code" id="service_code">
            <option value="service01">service01</option>
            <option value="service02">service02</option>
            <option value="service03">service03</option>
            <option value="service04">service04</option>
            <option value="service05">service05</option>
        </select>
        <input type="submit" value="生成">
    </form>
</body>
</html>