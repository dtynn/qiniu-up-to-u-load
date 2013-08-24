<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>生成token</title>
</head>
<body>
<h4>当前的token：</h4>
<textarea style="width:300px;height:120px;resize:none;overflow:auto;margin-bottom:10px;"><?php echo $_COOKIE['token'] ?></textarea><br/>
<div style="display:block;width:100%;border-bottom:1px solid black;"></div>
<form method="post" action="make_token.php">
<h3>生成新token：</h3>
空间：<br/>
<input type="text" name="bucket" value="<?php echo $_COOKIE['bucket'] ?>"><br/>
Access Key：<br/>
<input type="text" name="access_key"><br/>
Secret Key：</br>
<input type="text" name="secret_key"><br/>
<button type="submit">生成</button>
<a href="upload.php">返回<a>
</form>
</body>
</html>
