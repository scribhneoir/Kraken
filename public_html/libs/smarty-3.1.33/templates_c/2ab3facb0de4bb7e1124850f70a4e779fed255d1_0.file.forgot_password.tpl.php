<?php
/* Smarty version 3.1.33, created on 2019-11-21 14:06:21
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6e02debdda0_47767638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab3facb0de4bb7e1124850f70a4e779fed255d1' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\forgot_password.tpl',
      1 => 1574363179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6e02debdda0_47767638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3236062225dd6e02debd6a8_36731566', "form");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home.tpl");
}
/* {block "form"} */
class Block_3236062225dd6e02debd6a8_36731566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_3236062225dd6e02debd6a8_36731566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post">
        <div id="pro_form" class="offset-2">
            <h2 class=" profile_title">Forgot Password</h2>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label font-weight-bold">E-Mail</label>
                <div class="col-7">
                    <input id="email" name="email" type="text" class="form-control"
                            placeholder="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <a class="btn" href="../index.php" role="button">Cancel</a>
                    <button name="submit" type="submit" class="btn">Submit</button>
                </div>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "form"} */
}
