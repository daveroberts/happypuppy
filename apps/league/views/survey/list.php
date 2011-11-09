<h2>Surveys</h2>
<table id="surveysTable">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($surveys as $survey):?>
			<tr id="quiz_<?php echo $survey->id?>">
				<td><?php echo link_to($survey->name, "take/".$survey->id) ?></td>
			</tr>
		<?php endforeach;?>
	<tbody>
</table>