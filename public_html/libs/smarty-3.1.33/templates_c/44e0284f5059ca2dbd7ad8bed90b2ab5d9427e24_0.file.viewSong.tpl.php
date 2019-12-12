<?php
/* Smarty version 3.1.33, created on 2019-12-11 23:56:13
  from 'C:\Apache24\htdocs\Kraken\public_html\templates\viewSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1c86dad9789_31378036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e0284f5059ca2dbd7ad8bed90b2ab5d9427e24' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Kraken\\public_html\\templates\\viewSong.tpl',
      1 => 1576126572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1c86dad9789_31378036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2990929275df1c86dad80d6_76239370', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_2990929275df1c86dad80d6_76239370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2990929275df1c86dad80d6_76239370',
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
                    <h3 style="text-align:center">Thunder</h3>
                    <ul>
                        <li>Song Length: 3:08</li>
                        <li>Artist: Imagine Dragons</li>
                        <li>Album: Evolve</li>
                        <li>Genre: Synth-Pop</li>
                        <li>Description: Upbeat song, the bass really slaps.</li>
                        <li>Added By: LazyTiger22</li>
                        <li>Average Start Rating: 3.9</li>
                        <a name="submit" href="viewAlbum.php" type="submit" class="btn" style="margin-top:10px;">Go To Album</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form col">
            <label for="songReview" class="col-form-label " style="color: #dbedf3;">Write a Review!</label>
            <textarea id="songReview" name="songReview" cols="40" rows="5" class="form-control"></textarea>
            <button name="submit" type="submit" class="btn">Submit Your Review</button>
            <div class="card" style="margin-top:10px;">
                <div class="card-body">
                    <h3 style="text-align:center">Other Users Wrote:</h3>
                    <p>Madrake35: I love this song so Much!</p>
                    <p>Puppy_Eyes314: This song is kinda ok.</p>
                </div>
            </div>
            <h3 style="margin-top: 10px;">How many stars do you give this song?</h3>
            <div class="rate">
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text"style="color: #dbedf3;">1 star</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text"style="color: #dbedf3;">2 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text"style="color: #dbedf3;">3 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text"style="color: #dbedf3;">4 stars</label>
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text"style="color: #dbedf3;">5 stars</label>
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
