<?php
/* Smarty version 3.1.30, created on 2019-04-05 11:57:26
  from "/home/appclick/domains/appclick.ir/public_html/app/view/errors/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca734961f77d0_99266687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed96c97076e412dc1c392e89dc4d8d3b39c6a70' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/errors/404.tpl',
      1 => 1511446827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca734961f77d0_99266687 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
			.container { width: 100%; height: 100%; position: absolute; top: 0; background: #fff url('<?php echo IMG_PATH;?>
error.png') top center no-repeat; background-size: 100%; text-align: center; font-size: 16px; padding-top: 60px; }
			.message { position: absolute; width: 100%; text-align: center; left: 0; bottom: 100px; }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
">بازگشت</a>
		</div>
	</body>
</html><?php }
}
