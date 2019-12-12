<?php
/* Smarty version 3.1.33, created on 2019-12-12 14:15:21
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df291c9445f62_37615420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b5e36f58bb0749de7fbe9a4a9b3b191a2d015f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\profile.tpl',
      1 => 1576178095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df291c9445f62_37615420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3417370185df291c9442497_27496355', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_3417370185df291c9442497_27496355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3417370185df291c9442497_27496355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div id="pro_form" class="row">
                    <div class="col">
                        <h1 class="profile_title">Profile</h1>
                        <div class="row">
                            <label class="col col-form-label font-weight-bold">First Name</label>
                            <div class="col">
                                <p class="font-weight-bold profile_border"><?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col col-form-label font-weight-bold">Last Name</label>
                            <div class="col">
                                <p class="font-weight-bold profile_border"><?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col col-form-label font-weight-bold">Gender</label>
                            <div class="col">
                                <p class="font-weight-bold profile_border"><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="btn" href="../profile_edit" role="button">Edit Profile</a>
                                <a class="btn" href="../library" role="button">Library</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
