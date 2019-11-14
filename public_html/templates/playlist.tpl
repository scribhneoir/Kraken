<div class="row">
    <div class="col">
        <div class="playlist">
            <div class="row">
                <div class="col-3">
                    <h2>{$playlistTitle}</h2>
                </div>
                <div class="col">
                    <button type="button" class="btn shadow edit">
                        <i class="fas fa-pen-square"></i>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                                <th scope="col">Runtime</th>
                            </tr>
                        </thead>
                        <tbody>
                            {for $i=0 to count($playlist) - 5} 
                                {include file="song.tpl" song=$playlist[$i] num=$i+1}
                            {/for}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
