<?php
/* Smarty version 3.1.33, created on 2019-11-21 13:48:21
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6dbf5687470_67659846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e4f7fde72f2c04c05af36abc4803949bdc02461' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\register.tpl',
      1 => 1574362098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6dbf5687470_67659846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13270613475dd6dbf5686c18_49767159', "form");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "home.tpl");
}
/* {block "form"} */
class Block_13270613475dd6dbf5686c18_49767159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_13270613475dd6dbf5686c18_49767159',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="post">
        <div id="pro_form" class="offset-2">
            <h2 class=" profile_title">Register</h2>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label font-weight-bold">E-Mail</label>
                <div class="col-7">
                    <input id="email" name="email" type="text" class="form-control"
                            placeholder="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="first_name" class="col-3 col-form-label font-weight-bold">First
                    Name</label>
                <div class="col-7">
                    <input id="first_name" name="first_name" type="text" class="form-control"
                        placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-3 col-form-label font-weight-bold">Last
                    Name</label>
                <div class="col-7">
                    <input id="last_name" name="last_name" type="text" class="form-control"
                        placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 font-weight-bold">Gender</label>
                <div class="col-7">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="male" type="radio" class="custom-control-input"
                            value="male" checked>
                        <label for="male" class="custom-control-label">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="female" type="radio" class="custom-control-input"
                            value="female">
                        <label for="female" class="custom-control-label">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <a class="btn" href="../index.php" role="button">Cancel</a>
                    <button name="submit" type="submit" class="btn">Register</button>
                </div>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "form"} */
}
