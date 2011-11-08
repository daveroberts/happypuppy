<?php

namespace league;
/**  
 * !DefaultAction list
 * !Before logged_in
 * */
class SurveyController extends \HappyPuppy\Controller
{
	/**
	 * !NotRoute
	 **/
	function logged_in()
	{
		LoginController::logged_in();
	}
	function _list()
	{
		if ($this->person->administrator)
		{
			$this->redirectTo("/surveyadmin/list");
		}
		$this->surveys = Survey::Active();
		if (count($this->surveys) == 1)
		{
			$survey = end($this->surveys);
			$this->redirectTo("take/".$survey->id);
		}
	}
	function take($survey_id)
	{
		$this->survey = Survey::Get($survey_id);
		if ($this->survey == null)
		{
			setflash("Could not find survey with ID: ".$survey_id);
			$this->redirectTo("list");
		}
		if (!$this->survey->active)
		{
			setflash("You can't submit a survey that is inactive");
			$this->redirectTo("list");
		}
		// has this person completed this survey?
		$complete = $this->survey->completedBy($this->person->id);
		if ($complete)
		{
			setflash("You have already completed this survey");
			$this->view_template = "survey/review";
		}
	}
	function _submit($survey_id)
	{
		$this->survey = Survey::Get($survey_id);
		if ($this->survey == null)
		{
			setflash("Could not find survey with ID: ".$survey_id);
			$this->redirectTo("list");
		}
		if (!$this->survey->active)
		{
			setflash("You can't submit a survey that is inactive");
			$this->redirectTo("list");
		}
		$complete = $this->survey->completedBy($this->person->id);
		if ($complete)
		{
			// Person has completed survey and is trying to cheat
			setflash("You have already completed this survey");
			$this->redirectTo("list");
		}
		foreach($_POST["Rating"] as $rating=>$val)
		{
			$champion_id = substr($rating, strpos($rating, "-") + 1);
			$rating = Rating::GetByChampIDPersonIDSurveyID(
				$champion_id,
				$this->person->id,
				$this->survey->id);
			$rating->score = $val;
			$result = $rating->save($error, $debug);
		}
		setflash("Ratings recorded");
		$this->redirectTo("take/".$survey_id);
	}
	function edit($survey_id)
	{
		$this->survey = Survey::Get($survey_id);
		if ($this->survey == null)
		{
			setflash("Could not find survey with ID: ".$survey_id);
			$this->redirectTo("list");
		}
		$question = new Question();
		$question->survey_id = $survey_id;
		$this->f = new \HappyPuppy\form($question);
	}
	function update($survey_id)
	{
		$this->survey = Survey::BuildFromPost($_POST["Survey"]);
		$debug = array();
		$success = $this->survey->save($error);
		if ($success) {
			setflash("Survey updated successfully");
			$this->redirectTo("list");
		} else {
			setflash("Could not update Survey");
			$this->survey = Survey::Get($survey_id);
			$this->f = new \HappyPuppy\form($this->survey);
			$this->view_template = "survey/edit";
		}
	}
	function delete($survey_id)
	{
		if (isset($_POST["Survey"]["id"]))
		{
			$this->survey = Survey::Get($_POST["Survey"]["id"]);
			$success = $this->survey->destroy();
			if ($success)
			{
				setflash("Survey deleted successfully");
				$this->redirectTo("list");
			}
			else
			{
				setflash("Could not delete Survey");
				$this->f = new \HappyPuppy\form($this->survey);
			}
		}
		else
		{
			$this->survey = Survey::Get($survey_id);
			$this->f = new \HappyPuppy\form($this->survey);
		}
	}
}

?>