<tr class="song" id="{$song["songID"]}">
    <th scope="row">{$num}</th>
    <td>{$song["songTitle"]}</td>
    <td>{$song["songAlbum"]}</td>
    <td>{$song["songArtist"]}</td>
    <td>{$song["songLength"]}</td>
    <td class="delete">
        <button type="button"
            class="btn shadow deleteSong">
            <i class="fas fa-trash-alt fa-xs"></i>
        </button>
    </td>
</tr>