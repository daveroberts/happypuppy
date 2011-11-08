db relations

<div class="member_box">
<a href="#" class="member_title">Field get and set</a>
<div class="member_details">
	<div class="member_description">Gets or set your database column values</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
		<pre class="sh_php">print($person->name);</pre>
		<pre class="sh_php">$person->name = "Bob Smith";</pre>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p>Happy Puppy reads your database, and allows you to access columns as if they were member variables on your model class.  You can either create a new object of the model type, or get an existing one from the database.  Setting values here doesn't change anything in the database.  You need to call save (see below) after changes have been made.</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">Relation get</a>
<div class="member_details">
	<div class="member_description">Get the entity or entities associated with this entity</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
<pre class="sh_php">print($game->system->name); // prints Nintendo</pre>
		<p>Where both game and system are models, and the game model "has one" system<p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p><?php echo link_to("See Relations", "Relations")?> for a full explanation.</p>
	</div>
</div>
</div>

<div class="member_box">
<a href="#" class="member_title">Relation set</a>
<div class="member_details">
	<div class="member_description">Set the entity or entities associated with this entity</div>
	<div class="member_synopsis">
		<div class="section_title">Example</div>
<pre class="sh_php">
$nintendo = System::FindByName("Nintendo");
$game-$gt;system = $nintendo;
$game-$gt;save();
</pre>
		<p>Where both game and system are models, and the game model "has one" system<p>
	</div>
	<div class="member_information">
		<div class="section_title">Info</div>
		<p><?php echo link_to("See Relations", "Relations")?> for a full explanation.</p>
	</div>
</div>
</div>

protected function has_many($relation_name, $sort_by='', $foreign_class = '', $foreign_table = '', $foreign_key = ''){

protected function has_one($relation_name, $foreign_class = '', $foreign_table = '', $foreign_key = ''){

protected function habtm($relation_name, $sort_by='', $foreign_class = '', $foreign_table = '', $foreign_table_pk = '', $link_table = '', $link_table_fk_here = '', $link_table_fk_foreigntable = ''){


public function setRelationIDs($relation_name, $ids){

public function addIntoRelation($relation_name, $key, $value, $fromDB = false){