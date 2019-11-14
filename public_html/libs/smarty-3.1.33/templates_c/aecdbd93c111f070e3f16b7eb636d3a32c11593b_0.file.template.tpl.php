<?php
/* Smarty version 3.1.33, created on 2019-11-13 12:35:58
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc3efe1b25b3_02152588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aecdbd93c111f070e3f16b7eb636d3a32c11593b' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\template.tpl',
      1 => 1573666555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc3efe1b25b3_02152588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="shortcut icon" href="../img/squid.ico"/>
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
    <?php echo $_smarty_tpl->tpl_vars['AdditionalCSS']->value;?>

    

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
                <div class="col-4" id="search">
                    <form class="form-inline">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                            aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="wrapper">
        <div class="row">

            <nav class="col" id="sidebar">
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
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19200025645dcc3efe1b14a8_39745852', "content");
?>

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
            //sidebar
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#sbToggle').toggleClass('fa-arrow-alt-circle-right');
                $('#sbToggle').toggleClass('fa-arrow-alt-circle-left');
            });

            //edit playlist (toggle delete)
            $(".edit").click(function () {
                $('.delete').toggleClass('active');
            });

            //go to song
            $(".song").click(function () {
                alert($(this).attr("id"));
                window.location = "viewSong.php";
            });

            $(".collapsible").click(function () {
                
            });
        });

        //library expansion
        var coll = document.getElementsByClassName("collapsible");
        var playlistArr = document.getElementsByClassName("playlist");
        var i;
        var j;
        var k;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                for (k = 0; k < coll.length; k++) {
                    if (coll[k] === this) {
                        for (j = 0; j < playlistArr.length; j++) {
                            var content = playlistArr[j];
                            if (content.style.maxHeight) {
                                content.style.maxHeight = null;
                            }
                            else if (k == j) {
                                content.style.maxHeight = content.scrollHeight + "px";
                            }
                        }
                    }
                }
            });
        }

    <?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block "content"} */
class Block_19200025645dcc3efe1b14a8_39745852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19200025645dcc3efe1b14a8_39745852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
