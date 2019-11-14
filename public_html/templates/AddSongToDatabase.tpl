{extends file="template.tpl"} 
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col">
                <form method='post'>
                    <h1>Add a Song</h1>
                    <p>{$msg}</p>
                    <div class="form-group row">
                        <label for="songName" class="col-4 col-form-label">Song Name:</label>
                        <div class="col-8">
                            <input id="songName" name="songName" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="songLengthMinute" class="col-4 col-form-label">Minutes: </label>
                        <div class="col-8">
                            <input id="songLengthMinute" name="songLengthMinute" type="number" min="00" max="59" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="songLengthSecond" class="col-4 col-form-label">Seconds: </label>
                        <div class="col-8">
                            <input id="songLengthSecond" name="songLengthSecond" type="number" min="01" max="59"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="songGenre" class="col-4 col-form-label">Genre:</label>
                        <div class="col-8">
                            <input id="songGenre" name="songGenre" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="songAlbum" class="col-4 col-form-label">Album:</label>
                        <div class="col-8">
                            <input id="songAlbum" name="songAlbum" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="songArtist" class="col-4 col-form-label">Artist/Band:</label>
                        <div class="col-8">
                            <input id="songArtist" name="songArtist" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="songDescription" class="col-4 col-form-label">Description</label>
                        <div class="col-8">
                            <textarea id="songDescription" name="songDescription" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">User Who Added the Song:</label>
                        <div class="col-8">
                            <input id="userAdded" name="userAdded" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}