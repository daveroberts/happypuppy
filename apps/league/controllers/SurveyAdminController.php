<?php

namespace league;
/**  
 * !DefaultAction list
 * !Before is_admin, logged_in
 * */
class SurveyAdminController extends \HappyPuppy\Controller
{
	/**
	 * !NotRoute
	 **/
	function logged_in()
	{
		LoginController::logged_in();
	}
	/**
	 * !NotRoute
	 **/
	function is_admin()
	{
		LoginController::is_admin();
	}
	function _list()
	{
		$this->surveys = Survey::All();
		$this->f = new \HappyPuppy\form(new Survey());
	}
	function create()
	{
		$this->survey = Survey::BuildFromPost($_POST["Survey"]);
		$success = $this->survey->save($error);
		if ($success)
		{
			setflash("Survey saved successfully");
			$this->redirectTo("edit/".$this->survey->id);
		}
		else
		{
			setflash("Could not save Survey");
			$this->f = new \HappyPuppy\form(new Survey());
			$this->view_template = "surveyadmin/list";
		}
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