<?php
/* Smarty version 3.1.33, created on 2019-12-11 23:28:52
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\songList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1c2048404e9_38468572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54754aaf6afe3e791d9b86fd7a7456aa9688f620' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\songList.tpl',
      1 => 1576124931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1c2048404e9_38468572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6865178815df1c204839387_11114115', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_6865178815df1c204839387_11114115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6865178815df1c204839387_11114115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div style="text-align: center"><h1>Song Library</h1></div>
                <div class="playlist">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['songs']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['songs']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <tr class="song" id=<?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
>
                                    <td><?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['songs']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>
</td>
                                </tr>
                            <?php }
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
