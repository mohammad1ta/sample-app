<?php
/* Smarty version 3.1.30, created on 2019-04-05 11:52:02
  from "/home/appclick/domains/appclick.ir/public_html/app/view/task/show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca733523b7452_96385019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd13a59bb1632ec3388d15398fe34d47f57c4c92b' => 
    array (
      0 => '/home/appclick/domains/appclick.ir/public_html/app/view/task/show.tpl',
      1 => 1554452733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca733523b7452_96385019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Task by: <?php echo $_smarty_tpl->tpl_vars['task']->value['username'];?>
</h1>
<h2>Email: <?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
</h2>

<?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>

<?php }
}
