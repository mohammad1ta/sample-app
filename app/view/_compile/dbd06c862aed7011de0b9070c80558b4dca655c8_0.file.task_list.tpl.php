<?php
/* Smarty version 3.1.30, created on 2019-04-05 11:55:54
  from "/home/appclick/domains/appclick.ir/public_html/app/view/admin/task_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca7343a8398c6_53150362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd06c862aed7011de0b9070c80558b4dca655c8' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/admin/task_list.tpl',
      1 => 1554457902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7343a8398c6_53150362 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>List</h1>
<h2>Show all tasks for admin</h2>

<ul class="linear-list">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['task_list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

		<li>

			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
admin/task_show/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/">
				<div class="left">
					<i class="fa fa-cube"></i>
					<strong><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</strong>
					<span>( <?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
 )</span>
					<span><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
 ...</span>
				</div>
				<div class="right">
					<span><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</span>
					<?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>

					<?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == "done") {?><i class="fa fa-check green"></i><?php }?>
				</div>
			</a>

		</li>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</ul>
<?php }
}
