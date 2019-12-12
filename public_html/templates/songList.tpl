{extends file="template.tpl"} 
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="text-align: center"><h1>Song Library</h1></div>
                <div class="playlist">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Album</th>
                                <th scope="col">Artist</th>
                            </tr>
                        </thead>
                        <tbody>
                            {for $i=0 to count($songs) - 1}
                                <tr class="song" id={$songs[$i][3]}>
                                    <td>{$songs[$i][0]}</td>
                                    <td>{$songs[$i][1]}</td>
                                    <td>{$songs[$i][2]}</td>
                                </tr>
                            {/for}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{/block}