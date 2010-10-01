<div id="ajax_error" class="warning"></div>
<h2>People List</h2>
<p><a id="newPersonLink" href="/personAjax/new">Add Person</a></p>
<img id='newform-load' src='/images/ajax-loader.gif' />
<div id="newform"></div>
<div id="people">
<? foreach($people as $person) {?>
	<div id="person_<?=$person->id?>">
		<div id="person_top_<?=$person->id?>" class="person_top">
			<?= PhpRender::render('personAjax/_person', 'person', $person)?>
		</div>
		<div id="person_ajax_loading_<?=$person->id?>" style="display: none;">
			<img id='newform-load' src='/images/ajax-loader.gif' />
		</div>
		<div id="person_show_<?=$person->id?>" class="person_show">
		</div>
		<div id="person_edit_<?=$person->id?>" class="person_edit">
		</div>
	</div>
<? } ?>
</div>