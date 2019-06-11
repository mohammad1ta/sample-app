<?php
/* Smarty version 3.1.30, created on 2019-04-09 19:28:46
  from "/home/appclick/domains/appclick.ir/public_html/app/view/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cace45e482a40_95146908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b65a526ced1660859917cfaf76e5927d444b8920' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/main.tpl',
      1 => 1554834511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cace45e482a40_95146908 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
main.css?3" type="text/css" media="all" />
	<link media="screen" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
font-awesome.min.css" type="text/css" rel="stylesheet" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
jquery.js" defer><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
tooltipster.bundle.min.js" defer><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
main.js" defer><?php echo '</script'; ?>
>
</head>

<body>

	<?php echo '<script'; ?>
>
	var mainUrl = "<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
";
	<?php echo '</script'; ?>
>

	<div class="container">

		<div id="sidebar">

			<div class="logo">

				<span>M</span>yTEST

			</div>

			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"><i class="fa fa-dashboard"></i>Dashboard</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/add"><i class="fa fa-book valign"></i>New Task</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists"><i class="fa fa-list valign"></i>Task List</a></li>
			</ul>

		</div>

		<div id="content">

			<div class="navigation">

				<div class="left">

					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
admin/task" class="admin-link">Admin</a>

				</div>

				<div class="right">

					<div class="notify tip" title="Notification">
						<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
">
							<i class="fa fa-exclamation-triangle"></i>
							<span>2</span>
						</a>
					</div>

					<div class="notify tip" title="Messages">
						<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
">
							<i class="fa fa-envelope-o bounce"></i>
							<span>3</span>
						</a>
					</div>

				</div>

				<div class="clear"></div>

			</div>

			<?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>


		</div>

	</div>

</body>
</html>
<?php }
}
