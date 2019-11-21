<?php
/* Smarty version 3.1.33, created on 2019-11-21 14:08:45
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6e0bda44e07_07043667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052026a175aba422d4390ec261184b2cca816173' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\login.tpl',
      1 => 1574363323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6e0bda44e07_07043667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17138436475dd6e0bda41923_76621247', "form");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "home.tpl");
}
/* {block "form"} */
class Block_17138436475dd6e0bda41923_76621247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_17138436475dd6e0bda41923_76621247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post">
        <div id="pro_form" class="offset-2">
            <h2 class="profile_title">Login</h2>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label font-weight-bold">E-Mail</label>
                <div class="col-7">
                    <input id="email" name="email" type="text" class="form-control"
                        placeholder="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-3 col-form-label font-weight-bold">Password</label>
                <div class="col-7">
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="" required="required">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
                    <button class="btn" type="submit">Login</button>
                    <a class="btn" href="register" role="button">Register</a>
                    <a class="btn" href="forgot_password" role="button">Forgot Password</a>
                </div>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "form"} */
}
