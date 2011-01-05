<?php

namespace games;
class DevData
{
	static function From1To2()
	{
		\HappyPuppy\DB::AppExec("games", "INSERT INTO games (name) VALUES('LoL');");
		\HappyPuppy\DB::AppExec("games", "INSERT INTO games (name) VALUES('HoN');");
		\HappyPuppy\DB::AppExec("games", "INSERT INTO games (name) VALUES('B:AA');");
	}
	static function From2To3()
	{
		\HappyPuppy\DB::AppExec("games", "INSERT INTO systems (name) VALUES('PC');");
		\HappyPuppy\DB::AppExec("games", "INSERT INTO systems (name) VALUES('PS3');");
		\HappyPuppy\DB::AppExec("games", "UPDATE games SET system_id=1 WHERE id=1");
		\HappyPuppy\DB::AppExec("games", "UPDATE games SET system_id=1 WHERE id=2");
		\HappyPuppy\DB::AppExec("games", "UPDATE games SET system_id=2 WHERE id=3");
	}
}

?>