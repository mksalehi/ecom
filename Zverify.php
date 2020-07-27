<?php
require_once 'inc/config.php';
$session = $_SESSION;
$cart = [];
foreach($session as $keySession => $value){
    if(substr($keySession, 0, 5) == 'cart_'){
        $cart[$keySession] = $value;
    }
}
$price=array_column($cart,'price');
$price=array_sum($price);
$Authority = $_GET['Authority'];
$data = array(
    'MerchantID' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
    'Authority' => $Authority,
    'Amount' => $price);
$jsonData = json_encode($data);
$ch = curl_init('http://sandbox.zarinpal.com/pg/rest/WebGate/PaymentVerification.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));
$result = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);
$result = json_decode($result, true);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $name=implode(', ',array_column($cart,'name'));
    $Status=$result['Status'];
    $authority=$result['RefID'];

    $query=mysqli_query($connection,
        "INSERT INTO orders(name,price,authority,status)
    VALUES('$name','$price','$authority','$Status')");
    header('location:http://localhost:8181/ecom');
}
?>
