<?php
/* Smarty version 3.1.33, created on 2019-12-12 00:45:54
  from 'C:\Users\Gage Sapp\PhpstormProjects\Kraken\public_html\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1d412470a25_46179213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c673cda2fcf2829130b034bb027e25b9db5120b' => 
    array (
      0 => 'C:\\Users\\Gage Sapp\\PhpstormProjects\\Kraken\\public_html\\templates\\home.tpl',
      1 => 1576128903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1d412470a25_46179213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- FontAwesome CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"><?php echo '</script'; ?>
>

        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lexend+Exa|Questrial|Righteous&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathChange']->value;?>
css/temp_style.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathChange']->value;?>
css/login.css">

    </head>

    <body>
        <header class="shadow">
            <div class="container">
                <div class="row">
                    <div class="col-2" id="logoImg">
                        <img id="icon" src="<?php echo $_smarty_tpl->tpl_vars['pathChange']->value;?>
img/icon.png" alt="icon">
                    </div>
                    <div class="col-5" id="logo">
                        <div class="row">
                            <div class="col">
                                <h1>KRAKEN</h1>
                                <h2 id="subtitle">social music library</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div>
                <p>&nbsp;</p>
            </div>
            <div class="container offset-7">
                <div class="row">
                    <div class="col-6">
                        <div class="card" id="login">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8979073405df1d41246d746_57296996', "form");
?>

                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2019 KrakenMedia LLC</p>
        </footer>

        <!-- jQuery CDN  -->
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!-- Popper.JS -->
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!-- Bootstrap JS -->
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>
</html><?php }
/* {block "form"} */
class Block_8979073405df1d41246d746_57296996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_8979073405df1d41246d746_57296996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "form"} */
}
