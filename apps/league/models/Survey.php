<?php

namespace league;
class Survey extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function __get($name)
	{
		if (is_equal($name, "champions"))
		{
			$sql = "SELECT * FROM champions
			WHERE survey_id <= ? ORDER by name";
			$champions = Champion::FindBySQL($sql, $this->id);
			return $champions;
		}
		return parent::__get($name);
	}
	
	function completedBy($person_id)
	{
		$sql = "select count(*) from champions c
				left join ratings r on
					c.id = r.champion_id AND
					r.survey_id = ".$this->id." AND 
					r.person_id = ".$person_id."
				where c.survey_id <= ".$this->id." AND r.id is null";
		$db_results = \HappyPuppy\DB::query($sql);
		if (!is_array(end($db_results)))
		{
			return false;
		}
		$num_unratinged = end(end($db_results));
		return $num_unratinged == 0;
	}
	static function Active()
	{
		return Survey::Where("active = ?", "1");
	}
}

?>