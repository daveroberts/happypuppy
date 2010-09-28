<div class="person_top_ajax">
	<span class="person_name_area">
		<?= link_to_action($person->name, "show", $person->id, array('id'=>'person_show_link_'.$person->id, 'class'=>'person_show_link')) ?>
	</span>
	<span>
		<?= link_to_action(png('pencil'), "edit", $person->id, array('id'=>'person_edit_link_'.$person->id, 'class'=>'person_edit_link')) ?>
	</span>
	<span><?= link_to_action(png('delete'), 'show', $person->id, array('id'=>'person_delete_link_'.$person->id, 'class'=>'person_delete_link')) ?></span>
</div>