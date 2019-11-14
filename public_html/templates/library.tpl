{extends file="template.tpl"} 
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Playlist Library</h1>
                <div class="container">
                    {for $i=0 to count($keys) - 1 step 3}
                        <div class="row" style="margin-bottom: 2em;">
                            {for $j=$i to $i+2}
                                {if $j < count($keys)}
                                    {include file="playlistButton.tpl" playlistTitle = $keys[$j] playlistImage1 = $library[$keys[$j]]["playlistImage1"] playlistImage2 = $library[$keys[$j]]["playlistImage2"] playlistImage3 = $library[$keys[$j]]["playlistImage3"] playlistImage4 = $library[$keys[$j]]["playlistImage4"]}
                                {/if}
                            {/for}
                        </div>
                        {for $j=$i to $i+2}
                            {if $j < count($keys)}
                                {include file="playlist.tpl" playlistTitle = $keys[$j] playlist=$library[$keys[$j]]}
                            {/if}
                        {/for}                           
                    {/for}
                </div>
            </div>
        </div>
    </div>
{/block}