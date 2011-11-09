<?php

namespace league;
class Rating extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
	}
	static function GetByChampIDPersonIDSurveyID($champion_id, $person_id, $survey_id)
	{
		$rating = Rating::Where(
			"champion_id = ? AND person_id = ? AND survey_id = ?",
				$champion_id,
				$person_id,
				$survey_id);
		if (count($rating) == 1){ return end($rating); }
		$r = new Rating();
		$r->champion_id = $champion_id;
		$r->person_id = $person_id;
		$r->survey_id = $survey_id;
		return $r;
	}
}

?>