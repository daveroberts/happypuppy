<div class="edit_person_detail">
	<!--- Place hidden ID here --->
	<div>
		<?php echo PHPRender::render_arr('personAjax/personform', array('person'=>$person)) ?>
		<a id="edit_link_<?php echo $person->id?>" class="squarebutton edit_link" href="#"><span>Edit</span></a>
		<a class="cancel_edit_link" href="#" style="margin-left: 6px"><span>Cancel</span></a>
	</div>
</div>