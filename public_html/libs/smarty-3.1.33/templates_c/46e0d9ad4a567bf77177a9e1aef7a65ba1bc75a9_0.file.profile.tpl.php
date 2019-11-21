<?php
/* Smarty version 3.1.33, created on 2019-11-20 23:05:10
  from 'C:\Apache24\htdocs\Kraken-master\Kraken\public_html\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd60cf6980aa4_85507049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e0d9ad4a567bf77177a9e1aef7a65ba1bc75a9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken-master\\Kraken\\public_html\\templates\\profile.tpl',
      1 => 1574309102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd60cf6980aa4_85507049 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Template</title>
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

</head>

<body>
    <header class="shadow">
        <div class="container">
            <div class="row">
                <div class="col-2" id="logoImg">
                    <img id="icon" src="../img/icon.png" alt="icon">
                </div>
                <div class="col-4" id="logo">
                    <div class="row">
                        <div class="col">
                            <h1>KRAKEN</h1>
                            <h2 id="subtitle">social music library</h2>
                        </div>
                    </div>
                </div>
                <div class="col-4" id="search">
                    <form class="form-inline">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                            aria-label="Search">
                        <div class = "dropdown col-1">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">config
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Artists</li>
                                <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Albums</li>
                                <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Songs</li>
                                <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Users</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class = "offset-1 col-1" id = "profile">
                    <a href="profile.html"><img id="profile_pics" src="../img/profile.jpg" alt="profile" style ="
                    width: 100px;"></a>
                </div>
            </div>
        </div>
    </header>

    <main class="wrapper">
        <div class="row">
            <nav class="col-3" id="sidebar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="sidebar-header">
                                <h2>Social Feed</h2>
                            </div>
                            <div class="card shadow feed-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="feed-icon" src="../img/icon.png" alt="icon">
                                        </div>
                                        <div class="col-9">
                                            <h3>@Scribhneoir favorited a new album!</h3>
                                            <p>The Click - AJR</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow feed-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="feed-icon" src="../img/icon.png" alt="icon">
                                        </div>
                                        <div class="col-9">
                                            <h3>@Bandboy sent you a playlist!</h3>
                                            <p>Groovy Tunes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-1">
                            <button type="button" id="sidebarCollapse" class="btn shadow">
                                <i id="sbToggle" class="fas fa-arrow-alt-circle-left"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                        </div>
                    </div>
                </div>
            </nav>

            <div class="col-9" id="content">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div id="pro_form" class="row">
                                <div class="col">
                                    <h1 class="profile_title">Profile</h1>
                                    <!--
                                    <img id="profile_image" src="img/profile.jpg" alt="profile_image">
                                    <div class="row">
                                        <label class="col col-form-label font-weight-bold">User ID</label>
                                        <div class="col">
                                            <p class="font-weight-bold profile_border">JohnSmith</p>
                                        </div>
                                    </div>
                                    -->
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
                                    <!--
                                    <div class="row">
                                        <label class="col col-form-label font-weight-bold">Country</label>
                                        <div class="col">
                                            <p class="font-weight-bold profile_border">U.S.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col col-form-label font-weight-bold">State</label>
                                        <div class="col">
                                            <p class="font-weight-bold profile_border">PA</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col col-form-label font-weight-bold">Age</label>
                                        <div class="col">
                                            <p class="font-weight-bold profile_border">20</p>
                                        </div>
                                    </div>
                                    -->
                                    <div class="row">
                                        <label class="col col-form-label font-weight-bold">Gender</label>
                                        <div class="col">
                                            <p class="font-weight-bold profile_border"><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <a class="btn" href="../profile_edit" role="button">Edit
                                                Profile</a>
                                            <a class="btn" href="change_password.html" role="button">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="col">
                                    <h1>Bio</h1>
                                    <P id = "bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consequat
                                        sed lectus non lobortis. Aenean imperdiet leo nec efficitur iaculis.
                                        Donec euismod dignissim efficitur. Maecenas dignissim lobortis ultricies.
                                        Maecenas ultrices elit at rutrum consectetur. Nunc egestas porta ex, non
                                        molestie felis gravida sed. Nulla egestas dapibus mi sed porta. Ut dapibus
                                        neque ut eleifend pulvinar. Cras rhoncus lacus nec risus faucibus mattis.
                                        Donec vitae ex est. Nunc scelerisque eleifend scelerisque. Nullam dignissim
                                        velit eget tincidunt lobortis.</P>
                                </div>
                                -->
                            </div>

                        </div>
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
