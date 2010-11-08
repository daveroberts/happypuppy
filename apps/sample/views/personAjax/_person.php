<div class="person_top_ajax">
	<span class="person_name_area">
		<?php echo  link_to($person->name, "/personAjax/show/".$person->id, array('id'=>'person_show_link_'.$person->id, 'class'=>'person_show_link')) ?>
	</span>
	<span>
		<?php echo  link_to(png('pencil'), "/personAjax/edit/".$person->id, array('id'=>'person_edit_link_'.$person->id, 'class'=>'person_edit_link')) ?>
	</span>
	<span><?php echo  link_to(png('delete'), '/personAjax/show/'.$person->id, array('id'=>'person_delete_link_'.$person->id, 'class'=>'person_delete_link')) ?></span>
</div>