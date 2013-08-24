<?php

require_once("qiniu/rs.php");
require_once("conf.php");

$bucket = $_POST['bucket'];
$access_key = $_POST['access_key'];
$secret_key = $_POST['secret_key'];
$token = $_COOKIE['token'] ? $_COOKIE['token'] : '无';

if ($bucket && $access_key && $secret_key) {
    setcookie('bucket', $bucket);
    Qiniu_SetKeys($access_key, $secret_key);
    $put_policy = new Qiniu_RS_PutPolicy($bucket);
    $put_policy->ReturnUrl = RETURN_URL;
    $expire = 60 * 60 * 24 * 365 * 100;
    $put_policy->Expires = EXPIRE;
    $token = $put_policy->Token(null);
    setcookie('token', $token);
}
header("Location: upload.php");
?>
