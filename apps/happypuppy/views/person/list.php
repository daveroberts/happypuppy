<h2>MVC Example</h2>
<p>This section shows off a fake MVC example.  Look at the personController.php file in the "controllers" folder to see code to help you get started</p>
<h2>People List</h2>
<p><a id="newPersonLink" href="/person/new">Add Person</a></p>
<div id="people">
  <table><thead><tr><td>Name</td><td></td></tr></thead>
    <tbody id='peopleData'><tr><td></td><td></td></tr>
      <? foreach($people as $person) {?>
        <tr><td><?= link_to_action($person->name, "show", $person->id) ?></td>
          <td><?= delete_link(appurl_for_action("destroy", $person->id), png('delete'), "Are you sure you want to delete ".$person->name."?") ?></td></tr>
      <? } ?>
    </tbody></table>
    <p>Only showing 10 people</p>
</div>