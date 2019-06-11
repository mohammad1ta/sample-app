<?php
/* Smarty version 3.1.30, created on 2019-04-09 19:30:20
  from "/home/appclick/domains/appclick.ir/public_html/app/view/task/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cace4bc827b33_24641803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ae3315c01a338ca3006a52bfb68309faff545d1' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/task/add.tpl',
      1 => 1554834620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cace4bc827b33_24641803 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value) {?>
	<div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>

<h1>New Task</h1>
<h2>Insert new task</h2>

<form action="" method="POST" class="center">

	<div class="form-item">
		<label>Username</label>
		<div class="item-content">
			<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
		</div>
	</div>

	<div class="form-item">
		<label>E-Mail</label>
		<div class="item-content">
			<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
		</div>
	</div>

	<div class="form-item">
		<label>Your Problem</label>
		<div class="item-content">
			<textarea name="description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
		</div>
	</div>

	<div class="form-item">
		<label></label>
		<div class="item-content">
			<input type="submit" name="submit" value="Submit" class="submit green" />
		</div>
	</div>

</form>
<?php }
}
