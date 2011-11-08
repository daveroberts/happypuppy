<?php
	$rating = \league\Rating::GetByChampIDPersonIDSurveyID($champion->id, $person->id, $survey->id);
	$f = new \HappyPuppy\Form($rating, $champion->id);
?>
<?php echo $f->hiddenID() ?>
<tr>
	<td><?php echo $champion->name ?></td>
	<td class="bad"><?php echo $f->radio("score", "1") ?></td>
	<td class="meh"><?php echo $f->radio("score", "2") ?></td>
	<td class="ok"><?php echo $f->radio("score", "3") ?></td>
	<td class="good"><?php echo $f->radio("score", "4") ?></td>
	<td class="op"><?php echo $f->radio("score", "5") ?></td>
</tr>