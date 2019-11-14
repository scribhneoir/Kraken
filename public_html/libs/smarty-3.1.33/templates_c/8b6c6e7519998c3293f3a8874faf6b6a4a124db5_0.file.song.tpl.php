<?php
/* Smarty version 3.1.33, created on 2019-11-13 12:42:53
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc409da8b514_09622908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b6c6e7519998c3293f3a8874faf6b6a4a124db5' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\song.tpl',
      1 => 1573666971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc409da8b514_09622908 (Smarty_Internal_Template $_smarty_tpl) {
?><tr class="song" id="<?php echo $_smarty_tpl->tpl_vars['song']->value["songID"];?>
">
    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</th>
    <td><?php echo $_smarty_tpl->tpl_vars['song']->value["songTitle"];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['song']->value["songAlbum"];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['song']->value["songArtist"];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['song']->value["songLength"];?>
</td>
    <td class="delete">
        <button type="button"
            class="btn shadow deleteSong">
            <i class="fas fa-trash-alt fa-xs"></i>
        </button>
    </td>
</tr><?php }
}
