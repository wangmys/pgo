<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>尊敬的<?php echo e($data['uname']); ?>:</p>
	
	<p>
       您好，感谢您注册（<?php echo e(url('')); ?>）。这是一封注册验证邮件。
      <br> 
		您的验证码为<?php echo e($code); ?></p> 
	<p style="text-align: left">							
			Pgo购物商城
	</p>

	<br>

</body>
</html>