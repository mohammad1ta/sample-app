<?php
/* Smarty version 3.1.30, created on 2019-04-05 11:51:39
  from "/home/appclick/domains/appclick.ir/public_html/app/view/home/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca7333b7bdcb9_25714826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc9d9edb1d979d32f47a8cf0fe20bc35e49f7ad' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/home/home.tpl',
      1 => 1554458094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7333b7bdcb9_25714826 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel-area">

	<div class="stat-box green">
		<?php echo $_smarty_tpl->tpl_vars['all']->value;?>

		<span>All Tasks</span>
		<i class="fa fa-list"></i>
	</div>

	<div class="stat-box blue">
		<?php echo $_smarty_tpl->tpl_vars['todo']->value;?>

		<span>Todo</span>
		<i class="fa fa-cloud-upload"></i>
	</div>

	<div class="stat-box purple">
		<?php echo $_smarty_tpl->tpl_vars['doing']->value;?>

		<span>Doing</span>
		<i class="fa fa-download"></i>
	</div>

	<div class="stat-box red">
		<?php echo $_smarty_tpl->tpl_vars['done']->value;?>

		<span>Done</span>
		<i class="fa fa-check"></i>
	</div>

	<div class="clear"></div>

</div>
<?php }
}
