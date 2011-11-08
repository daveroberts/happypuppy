<div>
	<?php echo $f->start("/question/update") ?>
		<?php echo PhpRender::render('/question/_form', "f", $f) ?>
		<div><?php echo $f->submit("Save Question") ?></div>
	<?php echo $f->end() ?>
</div>
<div>
	<?php echo link_to("Back to quiz", "/quiz/edit/".$question->quiz->id) ?>
</div>