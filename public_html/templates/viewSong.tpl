{extends file="template.tpl"} 
{block name="content"}
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
{/block}