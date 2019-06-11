<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<title>404 Not Found</title>
		<style>
			* { box-sizing: border-box; }
			html, body { margin: 0; padding: 0; }
			body { width: 100%; height: 100%; background: #666 }
			a { color: #34495e; font-family: tahoma; font-size: 13px; display: inline-block; text-decoration: none; background: #1177cc; color: #fff; padding: 10px 40px 14px; position: absolute; margin-left: -55px; left: 50%; bottom: 30px; border-radius: 18px; }
			.container { width: 100%; height: 100%; position: absolute; top: 0; background: #fff url('{IMG_PATH}error.png') top center no-repeat; background-size: 100%; text-align: center; font-size: 16px; padding-top: 60px; }
			.message { position: absolute; width: 100%; text-align: center; left: 0; bottom: 100px; }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="message">{$message}</div>
			<a href="{$URL}">بازگشت</a>
		</div>
	</body>
</html>