<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'ZaloClient.php';

$zaloClient = new ZaloClient();
$zaloClient->SendMess();
// $zaloClient->SendMessImage();
// $zaloClient->SendMessGif();
// $zaloClient->UploadImage();
// $zaloClient->GetInfoFollower();
// $zaloClient->CreateProducts();

?>
