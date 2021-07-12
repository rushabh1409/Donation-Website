<?php


$email = $_POST['email'];
$amount = $_POST['amount'];
$name = $_POST['name'];
$phone = $_POST['phone'];
include 'instamojo/Instamojo.php';



$api = new Instamojo\Instamojo('test_7a4b5903f9084cf205bde738a90','test_078ba1609708d83fd7658136ec8', 'https://test.instamojo.com/api/1.1/');

try{
    $response = $api->paymentRequestCreate(array(

    'purpose' => 'Donate',
    'amount' => $amount,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'http://localhost/Donation/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
    ));

    $pay_url = $response['longurl'];
    header("Location:$pay_url");
}
catch(Exception $e){
    print('Error: ' .$e->getMessage());
}

?>