<?php
/* Smarty version 3.1.30, created on 2019-04-05 11:55:58
  from "/home/appclick/domains/appclick.ir/public_html/app/view/admin/task_show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca7343eb138e7_63684788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5183d4f9fd287cb0481d0c99eb2f23985a5a4b73' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/admin/task_show.tpl',
      1 => 1554457684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca7343eb138e7_63684788 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Task by: <?php echo $_smarty_tpl->tpl_vars['task']->value['username'];?>
</h1>
<h2>Email: <?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
</h2>

<?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>


<br/>
<br/>
<hr/>
<br/>

<h2>Edit this task:</h2>
<form action="" method="POST" class="center">

	<div class="form-item">
		<label>Status</label>
		<div class="item-content">
			<select name='status'>
        <option<?php if ($_smarty_tpl->tpl_vars['task']->value['status'] == 'todo') {?> selected<?php }?>>Todo</option>
        <option<?php if ($_smarty_tpl->tpl_vars['task']->value['status'] == 'doing') {?> selected<?php }?>>Doing</option>
        <option<?php if ($_smarty_tpl->tpl_vars['task']->value['status'] == 'done') {?> selected<?php }?>>Done</option>
      </select>
		</div>
	</div>

	<div class="form-item">
		<label>Problem</label>
		<div class="item-content">
			<textarea name="description"><?php echo $_smarty_tpl->tpl_vars['task']->value['description_edit'];?>
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
