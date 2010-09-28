

class <?= $this->dbtablename ?>

{
<? foreach($this->fields as $name=>$type): ?>
	var $<?= $name ?>;
<? endforeach; ?>
}