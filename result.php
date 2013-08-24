<?php

$ret_str = $_GET["upload_ret"];
$err_code = $_GET["code"];
$err_msg = urldecode($_GET["error"]); 
$ret = base64_decode($ret_str);
$ret_obj = json_decode($ret);

if ($ret_str) {
    $url = 'http://' . $ret_obj->{"bucket"} . '.qiniudn.com/' . $ret_obj->{"key"};
    $detail = '<h4>上传成功</h4><p>查看：<a target="_blank" href="' . $url .  '">文件外链</a></p>' ;
} else {
    $detail = '<h4>上传失败</h4>' . '<p>错误代码：' . $err_code . '</p>' . '<p>错误详情：' . $err_msg .'</p>';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传结果</title>
</head>
<body>
<h3>上传结果</h3>
<?php echo $detail ?>
<p><a href="upload.php">继续上传</a><p>
</body>
</html>

