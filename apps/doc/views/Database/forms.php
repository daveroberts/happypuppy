db forms

<p>In the controller</p>
<pre class="sh_php">
function _new()
{
	$this-&gt;f = new \HappyPuppy\form(new Game());
}
</pre>
<p>Then in the view</p>
<pre class="sh_php">echo $f-&gt;start("Create", array("id"=>"NewGameForm"))</pre>
<p>Start the form with "start".  First parameter is a <?php echo link_to("location", "/Views/Links") ?>.  Here, the location is set to the action "Create".</p>
<p>The second parameter is an optional array of http attributes.  Here, we're setting the id attribute to NewPersonForm</p>
<pre class="sh_php">echo $f-&gt;end()</pre>
<p>At the end of your form, place a form ending tag with the end method.</p>
<pre class="sh_php">
echo $f-&gt;label("name", "Name:")
echo $f-&gt;input("name")

$f-&gt;label("system", "System:")
$f-&gt;input("system")

$f-&gt;submit("Add New Game")
</pre>
<p>Back to the controller</p>
<pre class="sh_php">
function Create()
{
	$this->newgame = Game::buildFromPost($_POST["Game"]);
	$error = '';
	$success = $this->newgame->save($error);
}
</pre>