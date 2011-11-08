<h2>Models</h2>

<a href="#" id="static_functions_link"><h3>Static Functions</h3></a>
<div id="static_functions">

<div class="member_box">
<a href="#" class="member_title">All</a>
<div class="member_details">
	<div class="member_description">Retrieve all rows in the database from this table</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$this->people = Person::All();</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">array All(sort_by = '', debug = false)</pre>
		<p>The sort_by parameter is added to the ORDER BY SQL clause.  By default it is not included.  If your table has a column "name", it will automatically by sorted by the column name.</p>
		<p>If debug is set to true, the SQL statement is printed out and not executed.  Nothing is returned.</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>You will typically call this from your controller, and set the output to a class variable to use in your view.  With the example above in the controller, we can now put this in the view:</p>
<pre class="sh_php">
&lt;?php foreach($people as $person):?&gt;
	&lt;?php echo $person-&gt;name ?&gt;
&lt;?php endforeach;?&gt;
</pre>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">Get</a>
<div class="member_details">
	<div class="member_description">Gets a DB entity by primary key</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$person = Person::Get(1);</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static Get($pk_id)</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>caching system will pull from memory if object has already been retrieved</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">FindBy{Name}</a>
<div class="member_details">
	<div class="member_description">Finds records in a database by a single criteria</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$microsoft_employees = Person::FindByCompany("Microsoft"));</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static array FindBy{Name}($value, $debug = false)</pre>
		<p>Substitute {Name} with your db column</p>
		<p>$value is what you're matching on</p>
		<p>Setting debug to true will print the SQL</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">Find</a>
<div class="member_details">
	<div class="member_description">Finds records in a database by semi-complex criteria (For simpler criteria, use FindBy{Name}</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$old_people = Person::Find(array("conditions"=>"age > 50"));</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static array Find($args, $debug = false)</pre>
		<p>$args is an array containing one or more of the following:</p>
		<ul>
			<li>conditions - This is added to the where clause</li>
			<li>count - When set to true, Find returns an int</li>
			<li>order - added after ORDER BY</li>
			<li>limit - added after LIMIT</li>
			<li>offset - added after OFFSET</li>
			<li>
				<p>includes - Name of a relationship to include.  This information is preloaded in a single query</p>
				<p>Let's say you have a Game model and a System model.  A video game has one system, and a System has many video games.  You could load all systems, along with their games by writing:</p>
<pre class="sh_php">$systems = System::Find(array("includes"=>"games"));</pre>
			</li>
		</ul>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>For simpler queries, use FindBy{Name}.  For more complex queries, use FindBySQL</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">FindBySQL</a>
<div class="member_details">
	<div class="member_description">Finds records in a database and returns PHP objects of the models</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$old_microsoft_employees = Person::FindBySQL("SELECT * FROM people WHERE age > 50 AND company = "Microsoft");</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static array FindBySQL($sql, $debug = false)</pre>
		<p>$sql is the full SQL string</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>This method gives you full control over your query, so long as you return all the columns in your model's table.</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">First</a>
<div class="member_details">
	<div class="member_description">Returns the first record in the database for this table</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$user_one = User::First();</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static First()</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>Usually used for demonstration purposes.  Normally you'll want to call Get($id)</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">CollectionToXML</a>
<div class="member_details">
	<div class="member_description">Take a collection of entities returned by All or Find, and turn them into an XML string</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
			<p>In your controller</p>
<pre class="sh_php">
$this->games = Game::All(); // retrieve games from database
switch ($this->responds_to)
{
	case 'xml':
		$xml_string = Game::collectionToXML($this->games, array("system"), array("system_id", "order"));
		$this->renderXml($xml_string);
		break;
}
</pre>
<p>The above returns something like:</p>
<pre class="sh_xml">
&lt;games&gt;
	&lt;game id="3"&gt;
		&lt;name&gt;Batman: Arkham Asylum&lt;/name&gt;
	&lt;/game&gt;
	&lt;game id="2"&gt;
		&lt;name&gt;Heroes of Newerth&lt;/name&gt;
		&lt;system id="1"&gt;
			&lt;name&gt;PC&lt;/name&gt;
		&lt;/system&gt;
	&lt;/game&gt;
&lt;/games&gt;
</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static string collectionToXML($collection, $includes = array(), $excludes = array(), $name = '')</pre>
		<p>collection - The array of entities you want to transform into XML.  Usually the result of a Find() or All()</p>
		<p>includes - If the model has a relation to another model, you can include the related model or models as full XML.  In the example above, a game has_one system.  We are including the full XML of the system.  (We can get really advanced and nest this down indefinitely by including an array within the array)</p>
		<p>excludes - fields you don't want inside of your XML.  For example, we're including the full system model in the example, so including the system_id would be redundant.  Try removing the exclude and see what happens!</p>
		<p>name - by default, this is the plural name of your model.  In the example above: games.  You can change it to whatever you want here, like "pc_games".</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>For more info: <?php echo link_to("Outputting XML", "XML") ?></p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">LoadRelation</a>
<div class="member_details">
	<div class="member_description">Pre-loads relation information.  Can be useful to avoid n+1 queries</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<p>Suppose a blogpost hasmany comments, and a comment hasone author.  If you were to write the following code, your code could execute one SQL command to fetch every author on the page!</p>
<pre class="sh_php">
$blogpost = Blogpost::Get($id);
foreach($blogpost->comments as $comment)
{
	print($comment->author->name." says: ".$comment->text);
}
</pre>
<p>Instead, we can load all the authors needed into memory first</p>
<pre class="sh_php">
$blogpost = Blogpost::Get($id);
// preload comments
Blogpost::LoadRelation("SELECT b.id as __id, c.* FROM comments c LEFT JOIN blogposts b ON b.id = c.blogpost_id WHERE b.id=".$blogpost->id, "comments");
// preload authors
Comments::LoadRelation("SELECT c.id as __id, a.* FROM authors a LEFT JOIN comments c ON a.id = c.author_id LEFT JOIN blogposts b ON b.id = c.blogpost_id WHERE b.id=".$blogpost->id, "author");
</pre>
		<p>This code would likely live in your model code, perhaps in a "GetWithCommentsAndAuthors" method</p>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">LoadRelation($sql, $relation_name)</pre>
		<p>$sql - The SQL code to run.  Should include all fields needed to load $relation_name and the __id of model we're loading the relationships onto, named as __id</p>
		<p>The type of relationship we're loading</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>Note: if you just want to LoadRelation one level deep, it may be easier to use Find with the optional $includes parameter.</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">Count</a>
<div class="member_details">
	<div class="member_description">Same as Find, just returns a count</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$num_ms_employees = Employees::Count(array("conditions"=>"company='Microsoft'"));</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static int Count($args, $debug = false)</pre>
		<p>Arguments same as Find.  $count already set to true</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p></p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">BuildFromPost</a>
<div class="member_details">
	<div class="member_description">Take information returned from an HTML form and turn it into a Happy Puppy model</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$this->game = Game::BuildFromPost($_POST["Game"]);</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">static object buildFromPost($arr)</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>By default, Happy Puppy will place form data into a POST array with the model name.  This can be changed when creating your form.</p>
	</div>
</div>
</div>

</div> <!--- Static Functions --->

<a href="#" id="member_methods_link"><h3>Member Methods</h3></a>
<div id="member_methods">

<div class="member_box">
<a href="#" class="member_title">prettyPrint</a>
<div class="member_details">
	<div class="member_description">Prints the text output of your model, including fields and relations  Useful for debugging.</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
<pre class="sh_php">
print($game->prettyPrint());
</pre>
<p>Will output</p>
<pre>
games\Game object
id: 2
name: Heroes of Newerth
system_id: 1
order: 2
system: 1
---

</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">prettyPrint()</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>Debugging models with print_r() or var_dump is very difficult.  The output is way too verbose.  If you're looking to see what fields and relationships are on a model, this is an easy way to do so.  First, all fields and their values are shown.  Then the relations are looped on, and their IDs are printed (printing the relations fields and models can lead to an infinite loop)</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">save</a>
<div class="member_details">
	<div class="member_description">Saves info to database</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
<pre class="sh_php">
$success = $this->game->save($error);
if ($success)
{
	setflash("G saved successfully");
	$this->redirectTo("list");
}
else
{
	setflash("Could not save G");
	// at this point, you can log the $error and redirect to another page,
	// or you can repopulate the form variables and set the view template
	// to the original editing page again.  For more info, click the link below
}
</pre>
<p>See also: <?php echo link_to("Forms", "Forms")?></p>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">save(&$error_msg = '', $debug = false)</pre>
		<p>&$error_msg - if something goes wrong, a message is placed here</p>
		<p>$debug - when set to true, SQL messages are printed out before executed</p>
		<p>returns true if save is successful</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>If the model was created "from scratch", it will not have a primary key value, and will be inserted into the database.  Otherwise, an update call will be made.  If the model has a beforeSave method defined, it will be called before the database insert or update is made.</p>
		<p>See also: <?php echo link_to("Models", "Models")?></p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">delete</a>
<div class="member_details">
	<div class="member_description">Deletes a row from the database</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$game->delete();</pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">delete()</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>Relationships are not deleted with this call.  To do that, call destroy(true) (see below).</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">destroy</a>
<div class="member_details">
	<div class="member_description">Deletes a row from the database.  Also optionally deletes orphans.</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$system->destroy(true);</pre>
		<p>This will delete the system object as well as any games belonging to that system.</p>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">destroy($destroy_dependents = false)</pre>
		<p>$destroy_dependents - When set to true, has_many orphans are deleted.  Otherwise, their foreign keys are set to null.  Foreign keys set to null for other type of relations.</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
	</div>
</div>
</div>

</div>

<a href="#" id="fields_relations_link"><h3>Fields and Relations</h3>
<div id="fields_relations">
<p><?php echo link_to("see relations", "Relations") ?></p>
</div>

<a href="#" id="other_methods_link"><h3>Other properties and methods</h3></a>

<div id="other_methods">

<p>You probably won't need the following methods in your application, ever.  They're used by Happy Puppy internally.  They're here for completeness.  Should you wish to use them, here they are.</p>

<div class="member_box">
<a href="#" class="member_title">tablename</a>
<div class="member_details">
<div class="member_description">Returns the tablename for this model</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$person->tablename</pre>
		<p>Could return "person" or "people", depending on the value set in $_ENV["config"]["plural_db_tables"].  See <?php echo link_to("models", "Models") ?> for more info</p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>This is used by Happy Puppy.  You probably won't need to use this</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">__description</a>
<div class="member_details">
<div class="member_description">Returns a string of the column used for describing this entity</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$person->__description</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>This is used by Happy Puppy.  You probably won't need to use this.  You probably want to set which column describes your entity.  See setDescription in <?php echo link_to("Models", "Models") ?>.</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">pk</a>
<div class="member_details">
<div class="member_description">Returns a string of the column name used as primary key</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$person->pk</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>99% of the time this will return "id".</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">pkval</a>
<div class="member_details">
<div class="member_description">Returns the value of the primary key for this entity</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">$person->pkval</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>This will usually return an int with the ID column value.</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">buildFromDB</a>
<div class="member_details">
	<div class="member_description">Used by Happy Puppy to turn DB results into objects</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php"></pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">object buildFromDB($arr)</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p></p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">build</a>
<div class="member_details">
	<div class="member_description">Used internally by Happy Puppy to build the object models</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php"></pre>
	</div>
	<div class="member_signature">
		<div class="section_title">Signature</div>
		<pre class="sh_php">build($arr)</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p></p>
	</div>
</div>
</div>

</div>