<td class="firstCol"><?php echo $survey->name?></td>
<td><?php echo link_to("Stats", "/stats/view/".$survey->id) ?></td>
<td><?php echo link_to("Take", "/survey/take/".$survey->id) ?></td>
<td><?php echo link_to("Edit", "/survey/edit/".$survey->id) ?></td>
<td class="lastCol"><?php echo link_to("Delete", "/survey/delete/".$survey->id) ?></td>