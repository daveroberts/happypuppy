<td class="firstCol"><?php echo $question->text?></td>
<td><?php echo link_to("Edit", "/question/edit/".$question->id) ?></td>
<td class="lastCol"><?php echo link_to("Delete", "/question/delete/".$question->id) ?></td>