<?php

namespace hotel;
class DevData
{
	static function From1To2()
	{
		\HappyPuppy\DB::AppExec("hotel",
			"INSERT INTO account (username, password)
				VALUES('admin', '29c69f9313c43efdda3585a2af10fe1e03f96b55');");
		\HappyPuppy\DB::AppExec("hotel",
			"INSERT INTO type (name, price)
				VALUES('single', 149);");
		\HappyPuppy\DB::AppExec("hotel",
			"INSERT INTO type (name, price)
				VALUES('double', 199);");
		\HappyPuppy\DB::AppExec("hotel",
			"INSERT INTO type (name, price)
				VALUES('suite', 249);");
		\HappyPuppy\DB::AppExec("hotel",
			"INSERT INTO type (name, price)
				VALUES('presidential', 499);");
	}
	static function From2To3()
	{
	}
}

?>
