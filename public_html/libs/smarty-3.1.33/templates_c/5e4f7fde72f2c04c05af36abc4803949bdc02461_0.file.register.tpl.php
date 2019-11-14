<?php
/* Smarty version 3.1.33, created on 2019-11-13 22:29:32
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccca1ce479f0_92765364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e4f7fde72f2c04c05af36abc4803949bdc02461' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\register.tpl',
      1 => 1573702168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccca1ce479f0_92765364 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <link rel="stylesheet" href="../css/temp_style.css">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <header class="shadow">
        <div class="container">
            <div class="row">
                <div class="col-2" id="logoImg">
                    <img id="icon" src="../img/icon.png" alt="icon">
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
        <div class="container offset-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form method="post">
                            <div id="pro_form" class="offset-2 col-md-8">
                                <h2 class="offset-5 profile_title">register</h2>
                                <div class="row">
                                    <img id="profile_image" class="offset-2" src="../img/profile.jpg" alt="profile_image">
                                    <div class="file-field">
                                        <div class="btn btn-sm" id="profile_image_upload">
                                            <span>Choose new image</span>
                                            <input type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_id" class="offset-2 col-3 col-form-label font-weight-bold">User
                                        ID</label>
                                    <div class="col-7">
                                        <input id="user_id" name="user_id" type="text" class="form-control"
                                            placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="offset-2 col-3 col-form-label font-weight-bold">E-Mail</label>
                                    <div class="col-7">
                                        <input id="email" name="email" type="text" class="form-control"
                                               placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="offset-2 col-3 col-form-label font-weight-bold">Password</label>
                                    <div class="col-7">
                                        <input id="password" name="password" type="text" class="form-control"
                                               placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="first_name" class="offset-2 col-3 col-form-label font-weight-bold">First
                                        Name</label>
                                    <div class="col-7">
                                        <input id="first_name" name="first_name" type="text" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="last_name" class="offset-2 col-3 col-form-label font-weight-bold">Last
                                        Name</label>
                                    <div class="col-7">
                                        <input id="last_name" name="last_name" type="text" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country"
                                        class="offset-2 col-3 col-form-label font-weight-bold">Country</label>
                                    <div class="col-7">
                                        <input id="country" name="country" type="text" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="offset-2 col-3 col-form-label font-weight-bold" for="age">Age</label>
                                    <div class="col-7">
                                        <input id="age" name="age" type="number" class="form-control " placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="offset-2 col-3 font-weight-bold">Gender</label>
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
                                    <label for="textarea"
                                        class="font-weight-bold offset-2 col-3 col-form-label">Bio</label>
                                    <div class="col-7">
                                        <textarea id="textarea" name="textarea" cols="40" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-5 col-8">
                                        <a class="btn" href="index.php" role="button">Cancel</a>
                                        <button name="submit" type="submit" class="btn">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#sbToggle').toggleClass('fa-arrow-alt-circle-right');
                $('#sbToggle').toggleClass('fa-arrow-alt-circle-left');
            });
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
