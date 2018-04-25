<?php 

use Zalo\Zalo;
use Zalo\ZaloEndpoint;
use Zalo\ZaloConfig;
use Zalo\FileUpload\ZaloFile;



class ZaloClient {

    // Gửi tin nhắn text
    public function SendMess()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $data = array(
        'uid' => '5445114201839834069', // user id
        'message' => 'Tỉnh'
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_SEND_TEXT_MSG, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

    // Gửi tin nhắn hình
    public function SendMessImage()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $data = array(
        'uid' => '8769581709013811958', // user id
        'imageid' => '92cd845e955a7c04254b',
        'message' => 'hello'
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_SEND_PHOTO_MSG, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

    // Gửi tin nhắn dạng GIF
     public function SendMessGif()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $data = array(
            'uid' => '8769581709013811958', // put_user_id_here
            'imageid' => "8193867958810412755",
            'width' => 200,
            'height' => 200
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_SEND_GIF_MSG, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

    //Upload hình
    public function UploadImage()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $filePath = 'https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-h1-400x460-400x460.png';
        $params = ['file' => new ZaloFile($filePath)];
        $response = $zalo->post(ZaloEndpoint::API_OA_UPLOAD_PHOTO, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

    // Lấy thông tin người quan tâm OA
    public function GetInfoFollower()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $params = ['uid' => '1612203523067543834']; // put user id here
        $response = $zalo->get(ZaloEndpoint::API_OA_GET_PROFILE, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

    // Tạo sản phẩm
    public function CreateProducts()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        // $cate = array('cateid' => 'put_your_cate_id_here');
        // $cates = [$cate];
        $photo = array('id' => '92cd845e955a7c04254b');
        $photos = [$photo];
        $data = array(
            // 'cateids' => $cates,
            'name' => 'iPhone X',
            'desc' => 'Điện thoại iPhone X',
            'code' => '0001',
            'price' => 15000,
            'photos' => $photos,
            'display' => 'show', // show | hide
            'payment' => 2 // 2 - enable | 3 - disable
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_STORE_CREATE_PRODUCT, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }


}