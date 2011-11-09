<?php echo form_start("/survey/submit/".$survey->id) ?>
	<table id="championsTable">
		<thead>
			<tr>
				<th>Champion</th>
				<th class="">Needs Major Buffs</th>
				<th class="">Needs Minor Buffs</th>
				<th class="">Well Balanced</th>
				<th class="">Needs Minor Nerfs</th>
				<th class="">Needs Major Nerfs</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($survey->champions as $champion):?>
				<tr id="champion_<?php echo $champion->id?>">
					<?php echo PhpRender::render_arr('rating/_form', array("champion"=>$champion, "person"=>$person, "survey"=>$survey)) ?>
				</tr>
			<?php endforeach;?>
		<tbody>
	</table>
	<?php echo submit("Submit Answers") ?>
<?php echo form_end() ?>