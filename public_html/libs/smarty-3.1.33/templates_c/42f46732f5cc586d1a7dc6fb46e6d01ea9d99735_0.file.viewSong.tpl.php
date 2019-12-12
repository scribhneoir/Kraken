<?php
/* Smarty version 3.1.33, created on 2019-12-12 00:37:21
  from 'C:\Users\Gage Sapp\PhpstormProjects\Kraken\public_html\templates\viewSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1d21104c713_92124775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f46732f5cc586d1a7dc6fb46e6d01ea9d99735' => 
    array (
      0 => 'C:\\Users\\Gage Sapp\\PhpstormProjects\\Kraken\\public_html\\templates\\viewSong.tpl',
      1 => 1576128903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1d21104c713_92124775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5897752235df1d211029144_06170979', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_5897752235df1d211029144_06170979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5897752235df1d211029144_06170979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 style="text-align:center">View Song</h1>
    <div class="row">
        <div class="col">
            <img src="img\Imagine Dragons Cover Art.jpg" style="width:100%">
            <div class="card">
                <div class="card-body">
                    <h3 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['songTitle']->value;?>
</h3>
                    <ul>
                        <li>Song Length: <?php echo $_smarty_tpl->tpl_vars['songLength']->value;?>
</li>
                        <li>Artist: <?php echo $_smarty_tpl->tpl_vars['songArtist']->value;?>
</li>
                        <li>Album: <?php echo $_smarty_tpl->tpl_vars['songAlbum']->value;?>
</li>
                        <li>Genre: <?php echo $_smarty_tpl->tpl_vars['songGenre']->value;?>
</li>
                        <li>Description: <?php echo $_smarty_tpl->tpl_vars['songDescription']->value;?>
</li>
                        <li>Added By: <?php echo $_smarty_tpl->tpl_vars['songAdded']->value;?>
</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form col">
        <form method='post' action="index.php">
            <label for="songReview" class="col-form-label " style="color: #dbedf3;">Write a Review!</label>
            <textarea id="songReview" name="songReview" cols="40" rows="5" class="form-control"></textarea>
            <button name="submit" type="submit" class="btn">Submit Your Review</button>
        </form>
            <div class="card" style="margin-top:10px;">
                <div class="card-body">
                    <h3 style="text-align:center">Other Users Wrote:</h3>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['songReviews']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['songReviews']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?> 
                        <p><?php echo $_smarty_tpl->tpl_vars['songReviews']->value[$_smarty_tpl->tpl_vars['i']->value][1];?>
: <?php echo $_smarty_tpl->tpl_vars['songReviews']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
</p>
                    <?php }
}
?>
                </div>
            </div>
            <div class = "dropdown col-1"style="margin-top:20px;">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Add To Playlist
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Workout</li>
                    <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Car Jams</li>
                    <li class="dropdown-item"><input type="checkbox" checked data-size="mini"> Old School</li>
                </ul>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
