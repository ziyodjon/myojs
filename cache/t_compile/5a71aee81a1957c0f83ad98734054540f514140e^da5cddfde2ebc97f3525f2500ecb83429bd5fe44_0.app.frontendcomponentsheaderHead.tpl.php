<?php
/* Smarty version 4.3.1, created on 2023-11-20 14:14:13
  from 'app:frontendcomponentsheaderHead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_655b69b55342a3_62805758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5cddfde2ebc97f3525f2500ecb83429bd5fe44' => 
    array (
      0 => 'app:frontendcomponentsheaderHead.tpl',
      1 => 1693254618,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655b69b55342a3_62805758 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
	<meta charset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value ?: '');?>

				<?php if ((($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?>
			| <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();?>

		<?php }?>
	</title>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_header'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_stylesheet'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>

</head>
<?php }
}
