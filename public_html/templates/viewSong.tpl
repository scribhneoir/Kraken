{extends file="template.tpl"} 
{block name="content"}
    <h1 style="text-align:center">View Song</h1>
    <div class="row">
        <div class="col">
            <img src="img\Imagine Dragons Cover Art.jpg" style="width:100%">
            <div class="card">
                <div class="card-body">
                    <h3 style="text-align:center">{$songTitle}</h3>
                    <ul>
                        <li>Song Length: {$songLength}</li>
                        <li>Artist: {$songArtist}</li>
                        <li>Album: {$songAlbum}</li>
                        <li>Genre: {$songGenre}</li>
                        <li>Description: {$songDescription}</li>
                        <li>Added By: {$songAdded}</li>
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
                    {for $i=0 to count($songReviews) - 1} 
                        <p>{$songReviews[$i][1]}: {$songReviews[$i][0]}</p>
                    {/for}
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
{/block}