<h2>MVC Example</h2>
<p>This section shows off a fake MVC example.  Look at the personController.php file in the "controllers" folder to see code to help you get started</p>
<h2>People List</h2>
<p><a id="newPersonLink" href="/person/new">Add Person</a></p>
<div id="people">
  <table><thead><tr><td>Name</td><td></td></tr></thead>
    <tbody id='peopleData'><tr><td></td><td></td></tr>
      <? foreach($people as $person) {?>
        <tr><td><?= link_to($person->name, "/person/show/".$person->id) ?></td>
          <td><?= link_to(png('delete'), "/person/destroy/".$person->id, array("onclick"=>js_delete_confirm("Are you sure you want to delete ".$person->name."?", $person->id))) ?></td></tr>
      <? } ?>
    </tbody></table>
    <p>Only showing 10 people</p>
</div>