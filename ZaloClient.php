<?php 

use Zalo\Zalo;
use Zalo\ZaloEndpoint;
use Zalo\ZaloConfig;
use Zalo\FileUpload\ZaloFile;


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
    public function SendMessImage()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $data = array(
        'uid' => "8769581709013811958", // user id
        'imageid' => 'a5cc74fd68f981a7d8e8',
        'message' => 'hello'
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_SEND_PHOTO_MSG, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }
    public function UploadImage()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $filePath = 'https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2018/04/23/Pictures/_0e53a530-46d9-11e8-b38d-ae9d3b5e5930.jpg';
        $params = ['file' => new ZaloFile($filePath)];
        $response = $zalo->post(ZaloEndpoint::API_OA_UPLOAD_PHOTO, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

}