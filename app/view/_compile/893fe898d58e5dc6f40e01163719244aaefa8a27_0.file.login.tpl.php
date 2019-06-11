<?php
/* Smarty version 3.1.30, created on 2019-04-05 11:55:48
  from "/home/appclick/domains/appclick.ir/public_html/app/view/home/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca73434138273_73238281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893fe898d58e5dc6f40e01163719244aaefa8a27' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/home/login.tpl',
      1 => 1554456024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca73434138273_73238281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="referrer" content="always">
	<meta name="robots" content="noindex">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
login.css" type="text/css" media="all" />

</head>

<body>

	<div class="container">

		<div class="panel">

			<div class="panel-form">

				<form action="" method="POST" name="login">

					<h1>Login to admin</h1>

					<?php echo $_smarty_tpl->tpl_vars['message']->value;?>


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

				<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
rocketman.png" alt="" />

			</div>

		</div>

	</div>

</body>

</html>
<?php }
}
