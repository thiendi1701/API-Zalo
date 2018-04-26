<?php 

use Zalo\Zalo;
use Zalo\ZaloEndpoint;
use Zalo\ZaloConfig;
use Zalo\FileUpload\ZaloFile;


class ZaloClient {

    protected $zalo;

    public function getFollowerIDs() {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $data = [
            'offset' => 0,
            'count' => 50
        ];

        $params = ['data' => $data];

        return $followerIds = $zalo->get(ZaloEndpoint::API_OA_GET_FOLLOWERS_LIST, $params)->getDecodedBody()['data']['followers'];
    }

    // Gửi tin nhắn text
    public function SendMess()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $followerIds = $this->getFollowerIDs();
        foreach ($followerIds as $follower) {
            $data = [
                'uid' => $follower['uid'],
                'message' => 'Hi all'
            ];
        // $data = array(
        // 'uid' => '1612203523067543834', // user id
        // 'message' => 'Duyên khùng'
        // );
            $params = ['data' => $data];
            $response = $zalo->post(ZaloEndpoint::API_OA_SEND_TEXT_MSG, $params);
            $result = $response->getDecodedBody(); // result
            print_r($result);
        }
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
        $filePath = 'https://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s9-.jpg';
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
        $photo = array('id' => 'f5e713ef02ebebb5b2fa');
        $photos = [$photo];
        $data = array(
            // 'cateids' => $cates,
            'name' => 'Samsung Galaxy S9',
            'desc' => 'Điện thoại Samsung Galaxy S9',
            'code' => '0002',
            'price' => 20000000,
            'photos' => $photos,
            'display' => 'show', // show | hide
            'payment' => 2 // 2 - enable | 3 - disable
        );
        $params = ['data' => $data];
        $response = $zalo->post(ZaloEndpoint::API_OA_STORE_CREATE_PRODUCT, $params);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }

    // Đăng bài viết
    public function PostArticle()
    {
        $zalo = new Zalo(ZaloConfig::getInstance()->getConfig());
        $accessToken = 'pk8PFxrBWrF4v1u_i4-9KC3a4p-lBv1RtTrpOz9sgMkYYMPEYYRwUloD5Gh9H-ijfUeS0PO2sZAF-pyT_oBBRVJc4M72C-X5uEuKR-WWpL_8-0qsxXxiMfpRCNQ4SEzfzfam6T4ormUcx3ezWZp61eBYCX2I2wGhgyvdCjDcaIx7ZKqsv6BGFUArJrUIGQGycPjDCQq-cmhQpNGbn1le3kFi0JV00-8JoQrwVSryWLVKisXdqnYZIx_U86-L0BzNa-eY9vOcv0w2z7i4bb2OF46ShbsyK8vH';
        $params = ['message' => 'Test API'];
        $response = $zalo->post(ZaloEndpoint::API_GRAPH_POST_FEED, $params, $accessToken);
        $result = $response->getDecodedBody(); // result
        print_r($result);
    }


}