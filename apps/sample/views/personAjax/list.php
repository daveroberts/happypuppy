<div id="ajax_error" class="warning"></div>
<h2>People List</h2>
<div>Note: Deleting people will fail 50% of the time for demo purposes</div>
<p><a id="newPersonLink" href="/personAjax/new">Add Person</a></p>
<img id='newform-load' src='/images/ajax-loader.gif' />
<div id="newform"></div>
<div id="people">
<?php foreach($people as $person) {?>
	<div id="person_<?php echo $person->id?>">
		<div id="person_top_<?php echo $person->id?>" class="person_top">
			<?php echo  PhpRender::render('personAjax/_person', 'person', $person)?>
		</div>
		<div id="person_ajax_loading_<?php echo $person->id?>" style="display: none;">
			<img id='newform-load' src='/images/ajax-loader.gif' />
		</div>
		<div id="person_show_<?php echo $person->id?>" class="person_show">
		</div>
		<div id="person_edit_<?php echo $person->id?>" class="person_edit">
		</div>
	</div>
<?php } ?>
</div>