<p>In your /apps/scratch/; folder, create a folder named db.  Add a file named migrations.php with the following content:</p>
<pre class="sh_php">
&lt;?php

namespace scratch;
class Migrations
{
	static function From0To1()
	{
		\HappyPuppy\DBMigration::CreateUserAndDB("scratch", "0knHBKQ62Y4iS9xQKHPCw9z0rBg58bNMQOni0liP", "scratch");
	}
	static function From1To0()
	{
		\HappyPuppy\DBMigration::DropUserAndDB("scratch", "scratch");
	}
	static function From1To2()
	{
		\HappyPuppy\DBMigration::CreateTable("scratch", "people", array("name"=&gt;"string"));
	}
	static function From2To1()
	{
		\HappyPuppy\DBMigration::DropTable("scratch", "people");
	}
}

?&gt;
</pre>