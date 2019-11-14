<?php
/* Smarty version 3.1.33, created on 2019-11-13 11:10:53
  from 'C:\Apache24\htdocs\Kraken - Copy\public_html\templates\playlistButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc2b0d5f9675_86170609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf8339971c0b2f3ca55fa8a50ea92a0ad853f7a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken - Copy\\public_html\\templates\\playlistButton.tpl',
      1 => 1573661439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc2b0d5f9675_86170609 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col">
    <button style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['playlistImage1']->value;?>
), 
        url(<?php echo $_smarty_tpl->tpl_vars['playlistImage2']->value;?>
),
        url(<?php echo $_smarty_tpl->tpl_vars['playlistImage3']->value;?>
), 
        url(<?php echo $_smarty_tpl->tpl_vars['playlistImage4']->value;?>
);" type="button" class="btn collapsible">
    </button>
    <p><?php echo $_smarty_tpl->tpl_vars['playlistTitle']->value;?>
</p>
</div><?php }
}
