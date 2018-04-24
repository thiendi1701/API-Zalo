<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'ZaloClient.php';
// use Zalo\Zalo;
// use Zalo\ZaloConfig;
// use Zalo\ZaloEndpoint;

// $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
// $data = array(
//     'uid' => 4829905128097954001, // user id
//     'message' => 'HELLO'
// );
// $params = ['data' => $data];
// $response = $zalo->post(ZaloEndpoint::API_OA_SEND_TEXT_MSG, $params);
// $result = $response->getDecodedBody(); // result
// print_r($result);
/** config your app id here */
// const ZALO_APP_ID_CFG = "932541833157921742";

// /** config your app secret key here */
// const ZALO_APP_SECRET_KEY_CFG = "B1KZ45UD3yLViBiEvQcD";

// * config your offical account id here 
// const ZALO_OA_ID_CFG = "2184792249474812865";

// /** config your offical account secret key here */
// const ZALO_OA_SECRET_KEY_CFG = "2G6n9VBRQiNJiQepOLgL";

$zaloClient = new ZaloClient();

$zaloClient->SendMess();


?>
