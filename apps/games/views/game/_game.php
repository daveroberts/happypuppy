<tr id="game_<?php echo $game->id?>" class="gameTableRow">
	<td class="firstCol"><?php echo $game->name?></td>
	<td><?php echo $game->system->name?></td>
	<td><?php echo link_to("Edit", "/game/edit/".$game->id) ?></td>
	<td class="lastCol"><?php echo link_to("Delete", "/game/delete/".$game->id) ?></td>
</tr>