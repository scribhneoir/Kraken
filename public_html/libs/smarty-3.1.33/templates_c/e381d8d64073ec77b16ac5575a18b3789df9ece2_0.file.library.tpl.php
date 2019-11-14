<?php
/* Smarty version 3.1.33, created on 2019-11-13 12:30:51
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc3dcb2fc902_96890216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e381d8d64073ec77b16ac5575a18b3789df9ece2' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\library.tpl',
      1 => 1573661779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:playlistButton.tpl' => 1,
    'file:playlist.tpl' => 1,
  ),
),false)) {
function content_5dcc3dcb2fc902_96890216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14449732265dcc3dcb2e7e87_64835419', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_14449732265dcc3dcb2e7e87_64835419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14449732265dcc3dcb2e7e87_64835419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Playlist Library</h1>
                <div class="container">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 3;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['keys']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['keys']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <div class="row" style="margin-bottom: 2em;">
                            <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+2+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-($_smarty_tpl->tpl_vars['i']->value+2)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                                <?php if ($_smarty_tpl->tpl_vars['j']->value < count($_smarty_tpl->tpl_vars['keys']->value)) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:playlistButton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('playlistTitle'=>$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value],'playlistImage1'=>$_smarty_tpl->tpl_vars['library']->value[$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value]]["playlistImage1"],'playlistImage2'=>$_smarty_tpl->tpl_vars['library']->value[$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value]]["playlistImage2"],'playlistImage3'=>$_smarty_tpl->tpl_vars['library']->value[$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value]]["playlistImage3"],'playlistImage4'=>$_smarty_tpl->tpl_vars['library']->value[$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value]]["playlistImage4"]), 0, true);
?>
                                <?php }?>
                            <?php }
}
?>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+2+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-($_smarty_tpl->tpl_vars['i']->value+2)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                            <?php if ($_smarty_tpl->tpl_vars['j']->value < count($_smarty_tpl->tpl_vars['keys']->value)) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:playlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('playlistTitle'=>$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value],'playlist'=>$_smarty_tpl->tpl_vars['library']->value[$_smarty_tpl->tpl_vars['keys']->value[$_smarty_tpl->tpl_vars['j']->value]]), 0, true);
?>
                            <?php }?>
                        <?php }
}
?>                           
                    <?php }
}
?>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
