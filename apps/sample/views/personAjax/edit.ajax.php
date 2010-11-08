<div class="edit_person_detail">
	<form class="edit_ajax_form" action='/personAjax/update.ajax' method='post'>
		<?php echo  html_hidden('person[id]', $person->id); ?>
		<?php echo  render_arr('personAjax/personform', array('person'=>$person)) ?>
		<div class="buttonwrapper">
			<a id="edit_link_<?php echo $person->id?>" class="squarebutton edit_link" href="/personAjax/update.ajax"><span>Edit</span></a>
			<a class="squarebutton cancel_edit_link" href="/personAjax/list" style="margin-left: 6px"><span>Cancel</span></a>
		</div>
	</form>
</div>