<h2><?php echo $survey->name ?></h2>
<table id="championsTable">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($survey->questions as $champion):?>
			<tr id="question_<?php echo $champion->id?>">
				<?php echo PhpRender::render('champion/_champion', "champion", $champion) ?>
			</tr>
		<?php endforeach;?>
	<tbody>
</table>
<div>
	<?php echo $f->start("/survey/".$survey->id."/champion/create") ?>
		<?php echo PhpRender::render('/champion/_form', "f", $f) ?>
		<div><?php echo submit("Add champion") ?></div>
	<?php echo $f->end() ?>
</div>
<div>
	<?php echo link_to("Back to list", "list") ?>
	<?php echo link_to("Take Survey", "take/".$survey->id) ?>
</div>