<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'ZaloClient.php';

$zaloClient = new ZaloClient();
// $zaloClient->SendMess();
// $zaloClient->UploadImage();
// $zaloClient->SendMessImage();
// $zaloClient->UploadGif(); 
// $zaloClient->SendMessGif();

// $zaloClient->GetInfoFollower();
// $zaloClient->UploadProductImages(); 
$zaloClient->CreateProducts();
// $zaloClient->PostArticle();
// $zaloClient->UploadGif(); 
?>
