<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>尊敬的<?php echo e($data['uname']); ?>:。这是一封密码找回邮件。
      <br> 
		您的验证码为<?php echo e($code); ?></p> 
	<p style="text-align: left">							
			Pgo购物商城
	</p>

	<br>

</body>
</html>