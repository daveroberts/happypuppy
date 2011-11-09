<div>Are you sure you want to delete <?php echo $question->text ?></div>
<?php echo $f->start("self") ?>
<?php echo $f->hiddenID() ?>
<?php echo $f->submit("Delete Question") ?>
<?php echo $f->end() ?>
<div>
	<?php echo link_to("Back to list", "/quiz/edit/".$question->quiz->id) ?>
</div>