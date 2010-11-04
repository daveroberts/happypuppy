<?

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
?>