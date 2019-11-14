<?php
/* Smarty version 3.1.33, created on 2019-11-14 12:22:12
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\songList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd8d440b7046_95493965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54754aaf6afe3e791d9b86fd7a7456aa9688f620' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\songList.tpl',
      1 => 1573752129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd8d440b7046_95493965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19624980895dcd8d440b0cf0_02407277', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_19624980895dcd8d440b0cf0_02407277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19624980895dcd8d440b0cf0_02407277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div style="text-align: center"><h1>Song Library</h1></div>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['songs']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['songs']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <div class="card" style="margin-top:10px">
                        <p style="margin-top:10px; margin-left: 10px;">
                            Title: <?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Album: <?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Artist: <?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>

                        </p>
                    </div>
                <?php }
}
?>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
