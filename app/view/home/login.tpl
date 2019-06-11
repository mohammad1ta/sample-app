<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="referrer" content="always">
	<meta name="robots" content="noindex">
	<title>Login</title>
	<link rel="stylesheet" href="{$CSS_PATH}login.css" type="text/css" media="all" />

</head>

<body>

	<div class="container">

		<div class="panel">

			<div class="panel-form">

				<form action="" method="POST" name="login">

					<h1>Login to admin</h1>

					{$message}

					<label>
						<input type="text" name="username" placeholder="Username" />
					</label>

					<label>
						<input type="password" name="password" placeholder="Password" />
					</label>

					<input type="submit" name="submit" value="Login" />

					<input type="hidden" name="send" value="1" />

				</form>

			</div>

			<div class="panel-content">

				<h1><span>M</span>yTEST</h1>
				<h2><span>Platform to control tasks</span></h2>

				<img src="{$IMG_PATH}rocketman.png" alt="" />

			</div>

		</div>

	</div>

</body>

</html>
