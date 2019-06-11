<?php
/* Smarty version 3.1.30, created on 2019-04-09 19:23:34
  from "/home/appclick/domains/appclick.ir/public_html/app/view/task/list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cace326061f43_46714263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf54ac69e677e292caa72dbe54955fa36e3e5e1' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/task/list.tpl',
      1 => 1554834212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cace326061f43_46714263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>List</h1>
<h2>Show all tasks</h2>

<div class="right">
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/add/" class="submit-extra green">
		<i class="fa fa-plus"></i>
		<span>New Task</span>
	</a>
</div>

<div class="left">
	Sort By:
	<ul class="sort">
		<li <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == "username") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists/page/1/sort/username/order/<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
/">Username</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == "email") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists/page/1/sort/email/order/<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
/">E-Mail</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == "status") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists/page/1/sort/status/order/<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
/">Status</a></li>
	</ul>
	&nbsp;&nbsp;&nbsp;&nbsp; Sort Type:
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists/page/1/sort/<?php echo $_smarty_tpl->tpl_vars['sort_type']->value;?>
/order/asc/"><i class="sort-type fa fa-arrow-up <?php if ($_smarty_tpl->tpl_vars['order']->value == "asc") {?>active<?php }?>"></i></a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists/page/1/sort/<?php echo $_smarty_tpl->tpl_vars['sort_type']->value;?>
/order/desc/"><i class="sort-type fa fa-arrow-down <?php if ($_smarty_tpl->tpl_vars['order']->value == "desc") {?>active<?php }?>"></i></a>
</div>

<div class="clear"></div>

<ul class="linear-list">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['task_list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

	<li>

		<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/show/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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

<?php if ($_smarty_tpl->tpl_vars['show_pagination']->value) {?>

	<div class="pagination">
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['num_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['num_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
task/lists/page/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/sort/<?php echo $_smarty_tpl->tpl_vars['sort_type']->value;?>
/order/<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
/" <?php if ($_smarty_tpl->tpl_vars['current_page']->value == $_smarty_tpl->tpl_vars['i']->value) {?> class="bold" <?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
		<?php }
}
?>

	</div>

<?php }
}
}
