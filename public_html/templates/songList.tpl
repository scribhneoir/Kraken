{extends file="template.tpl"} 
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="text-align: center"><h1>Song Library</h1></div>
                {for $i=0 to count($songs) - 1}
                    <div class="card" style="margin-top:10px">
                        <p style="margin-top:10px; margin-left: 10px;">
                            Title: {$songs[$i][0]} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Album: {$songs[$i][1]} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Artist: {$songs[$i][2]}
                        </p>
                    </div>
                {/for}
            </div>
        </div>
    </div>
{/block}