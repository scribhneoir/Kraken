<?php
/* Smarty version 3.1.33, created on 2019-11-13 12:35:35
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\playlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc3ee7273a67_67826263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de3ea4571fafe1a9ff2698f304fd25a30a03267' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\playlist.tpl',
      1 => 1573666533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:song.tpl' => 1,
  ),
),false)) {
function content_5dcc3ee7273a67_67826263 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col">
        <div class="playlist">
            <div class="row">
                <div class="col-3">
                    <h2><?php echo $_smarty_tpl->tpl_vars['playlistTitle']->value;?>
</h2>
                </div>
                <div class="col">
                    <button type="button" class="btn shadow edit">
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
