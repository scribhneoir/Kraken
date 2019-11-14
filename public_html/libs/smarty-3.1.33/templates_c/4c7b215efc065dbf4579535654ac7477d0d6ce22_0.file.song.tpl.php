<?php
/* Smarty version 3.1.33, created on 2019-11-13 01:46:31
  from 'C:\Apache24\htdocs\Kraken - Copy\public_html\templates\song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcba6c79ccd33_61431415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c7b215efc065dbf4579535654ac7477d0d6ce22' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken - Copy\\public_html\\templates\\song.tpl',
      1 => 1573627588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcba6c79ccd33_61431415 (Smarty_Internal_Template $_smarty_tpl) {
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
        <button type="button" id="deleteSong"
            class="btn shadow">
            <i class="fas fa-trash-alt"></i>
        </button>
    </td>
</tr><?php }
}
