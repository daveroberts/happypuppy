<h2><?php echo $survey->name ?></h2>
<table id="championsTable">
	<thead>
		<tr>
			<th>Champion</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($survey->champions as $champion):?>
			<tr id="question_<?php echo $champion->id?>">
				<?php echo PhpRender::render_arr('rating/_show', array(
					"champion"=>$champion,
					"person_id"=>$person->id,
					"survey_id"=>$survey->id)) ?>
			</tr>
		<?php endforeach;?>
	<tbody>
</table>
