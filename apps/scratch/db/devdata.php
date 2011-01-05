<?php

namespace scratch;
class DevData
{
	static function From1To2()
	{
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Ada');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Patrick');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Elizabeth');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Mark');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Brendan');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Lisa');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Jessica');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Aaron');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Jesse');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Anna');");
		\HappyPuppy\DB::AppExec("scratch", "INSERT INTO people (name) VALUES('Rick');");
	}
}

?>