<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传文件</title>
</head>
<body>
<form method="post" action="http://up.qiniu.com/" enctype="multipart/form-data">
<h3>上传文件</h3>
<p>Token：</p>
<textarea name="token" style="width:300px;height:120px;resize:none;overflow:auto;margin-bottom:10px;"><?php echo $_COOKIE['token'] ?></textarea>
<p>文件：</p>
<input type="file" name="file"><br/>
<br/>
<button type="submit">上传</button>
<a href="token.php">生成token</a>
</form>
</body>
</html>

