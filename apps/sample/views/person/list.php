<h2>MVC Example</h2>
<div style="margin-bottom: 1em;">
	<a href="#" onclick="$('#disclaimer').slideToggle();">Show Disclaimer</a>
	<div id="disclaimer" style="display:none; background-color: #CA75FF; padding: 1em;">
		<p>This is a fake MVC example.  No database is used.  The code here is in personController.php</p>
		<p>To see an example using the database, install the zip and take a look in /apps/games</p>
		<p>Because no database is used, you wouldn't want to copy and paste this code into your own project.  For example: when creating a textbox for a database field, such as a person's name, HappyPuppy will take care of all the details if you specify $form-&gt;input('name').  However, since there is no database, that code won't work, and the non-db method textbox() is used instead.</p>
	</div>
</div>
<h2>People List</h2>
<p><a id="newPersonLink" href="/sample/person/new">Add Person</a></p>
<div id="people">
  <table><thead><tr><td>Name</td><td></td></tr></thead>
    <tbody id='peopleData'><tr><td></td><td></td></tr>
      <?php foreach($people as $person) {?>
        <tr><td><?php echo link_to($person->name, "/person/show/".$person->id) ?></td>
          <td><?php echo link_to(png('delete'), "/person/destroy/".$person->id, array("onclick"=>js_delete_confirm("Are you sure you want to delete ".$person->name."?", $person->id))) ?></td></tr>
      <?php } ?>
    </tbody></table>
</div>