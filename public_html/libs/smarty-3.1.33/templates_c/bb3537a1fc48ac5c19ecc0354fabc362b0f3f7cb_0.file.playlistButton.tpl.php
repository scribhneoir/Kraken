<?php
/* Smarty version 3.1.33, created on 2019-11-19 21:33:23
  from 'C:\Apache24\htdocs\Kraken-master\Kraken\public_html\templates\playlistButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd4a5f38390e1_64689454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3537a1fc48ac5c19ecc0354fabc362b0f3f7cb' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken-master\\Kraken\\public_html\\templates\\playlistButton.tpl',
      1 => 1574217107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd4a5f38390e1_64689454 (Smarty_Internal_Template $_smarty_tpl) {
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
