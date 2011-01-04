<p>In your config folder create a file named 'dbconf.php'</p>
<p>Add the following content</p>
<pre class="sh_php">
&lt;?php

namespace HappyPuppy;
class DBConf
{
	static function RootDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"",
			"dbusername"=>"root",
			"dbpassword"=>""
		);
	}
	static function SampleDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"sample",
			"dbusername"=>"sample",
			"dbpassword"=>"mysamplepass"
		);
	}
}
?&gt;
</pre>
<p>Change the RootDB information to match your database</p>
<p>For every Happy Puppy app that uses a database, add a static function named &lt;AppName&gt;DB.  Have it return an array of credentials in a similar manner</p>