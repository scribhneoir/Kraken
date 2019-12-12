<?php
/* Smarty version 3.1.33, created on 2019-12-12 14:14:01
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\profile_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2917935d084_24255736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd43d7ad848e4c6b625d54ae1055c3f98e536116d' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\profile_edit.tpl',
      1 => 1576178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2917935d084_24255736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10384337155df29179356ce2_00415552', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_10384337155df29179356ce2_00415552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10384337155df29179356ce2_00415552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php" method="post">
                    <div id="pro_form" class="offset-2 col-md-8">
                        <h1 class="offset-5 profile_title">Edit Profile</h1>
                        <div class="form-group row">
                            <label for="first_name" class="offset-2 col-3 col-form-label font-weight-bold">First
                                Name</label>
                            <div class="col-7">
                                <input id="first_name" name="first_name" type="text" class="form-control" required="required"
                                        value="<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="offset-2 col-3 col-form-label font-weight-bold">Last
                                Name</label>
                            <div class="col-7">
                                <input id="last_name" name="last_name" type="text" class="form-control" required="required"
                                        value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="offset-2 col-3 col-form-label font-weight-bold">Password</label>
                            <div class="col-7">
                                <input id="password" name="password" type="password" class="form-control" required="required"
                                        value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="offset-2 col-3 font-weight-bold">Gender</label>
                            <div class="col-7">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="male" type="radio" class="custom-control-input "
                                            value="male"<?php if ($_smarty_tpl->tpl_vars['gender']->value == "male") {?>checked = "true"<?php }?>>
                                    <label for="male" class="custom-control-label">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="female" type="radio" class="custom-control-input"
                                            value="female" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "female") {?>checked = "true"<?php }?>>
                                    <label for="female" class="custom-control-label">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-5 col-8">
                                <a class="btn" href="profile.html" role="button">Cancel</a>
                                <button name="submit" type="submit" class="btn">Submit</button>
                                <a class="btn" href="deleteUser.php" role="button">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
