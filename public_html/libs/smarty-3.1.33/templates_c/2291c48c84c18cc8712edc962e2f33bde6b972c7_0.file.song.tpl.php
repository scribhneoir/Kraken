<?php
/* Smarty version 3.1.33, created on 2019-11-19 21:33:23
  from 'C:\Apache24\htdocs\Kraken-master\Kraken\public_html\templates\song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd4a5f38b5135_40033476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2291c48c84c18cc8712edc962e2f33bde6b972c7' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken-master\\Kraken\\public_html\\templates\\song.tpl',
      1 => 1574217107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd4a5f38b5135_40033476 (Smarty_Internal_Template $_smarty_tpl) {
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
