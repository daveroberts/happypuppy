<h2>Surveys</h2>
<table id="surveyesTable">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($surveys as $survey):?>
			<tr id="survey_<?php echo $survey->id?>">
				<?php echo PhpRender::render('surveyadmin/_survey', "survey", $survey) ?>
			</tr>
		<?php endforeach;?>
	<tbody>
</table>
<div>
	<h3>New Survey</h3>
	<?php echo $f->start("create") ?>
		<?php echo PhpRender::render('surveyadmin/_form', "f", $f) ?>
		<div><?php echo $f->submit("Add new Survey") ?></div>
	<?php echo $f->end() ?>
</div>