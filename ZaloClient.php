<?php 

use Zalo\Zalo;
use Zalo\ZaloEndpoint;
use Zalo\ZaloConfig;

class ZaloClient {

    public function SendMess()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $data = array(
        'uid' => "8769581709013811958", // user id
        'message' => 'Duyyyyy'
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_SEND_TEXT_MSG, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

}