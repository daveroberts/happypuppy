<?php
	$rating = \league\Rating::GetByChampIDPersonIDSurveyID($champion->id, $person_id, $survey_id);
?>
<tr>
	<td><?php echo $champion->name ?></td>
	<?php if ($rating->score == 1): ?>
		<td class="bad">Needs Major Buffs</td>
	<?php elseif ($rating->score == 2): ?>
		<td class="meh">Needs Minor Buffs</td>
	<?php elseif ($rating->score == 3): ?>
		<td class="ok">Well Balanced</td>
	<?php elseif ($rating->score == 4): ?>
		<td class="good">Needs Minor Nerfs</td>
	<?php elseif ($rating->score == 5): ?>
		<td class="op">Needs Major Nerfs</td>
	<?php endif; ?>
</tr>