<?php
/* Smarty version 3.1.33, created on 2019-11-13 11:13:52
  from 'C:\Apache24\htdocs\Kraken - Copy\public_html\templates\playlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc2bc08fbcf8_77058569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb13ceac50a42fa8d43b48bc2db46c4643748f21' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken - Copy\\public_html\\templates\\playlist.tpl',
      1 => 1573661629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:song.tpl' => 1,
  ),
),false)) {
function content_5dcc2bc08fbcf8_77058569 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col">
        <div class="playlist">
            <div class="row">
                <div class="col-3">
                    <h2><?php echo $_smarty_tpl->tpl_vars['playlistTitle']->value;?>
</h2>
                </div>
                <div class="col">
                    <button type="button" id="edit" class="btn shadow">
                        <i class="fas fa-pen-square"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                                <th scope="col">Runtime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['playlist']->value)-5+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['playlist']->value)-5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?> 
                                <?php $_smarty_tpl->_subTemplateRender("file:song.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('song'=>$_smarty_tpl->tpl_vars['playlist']->value[$_smarty_tpl->tpl_vars['i']->value],'num'=>$_smarty_tpl->tpl_vars['i']->value+1), 0, true);
?>
                            <?php }
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
