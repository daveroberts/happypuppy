<?php

namespace league;
/**  
 * !Before is_admin, logged_in
 * */
class ChampionController extends \HappyPuppy\Controller
{
	function __init()
	{
	}
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
	/**  
	 * !Route POST, /quiz/$id/question/create
	 * */
	function create($quiz_id)
	{
		$this->question = Question::BuildFromPost($_POST["Question"]);
		$this->question->quiz_id = $quiz_id;
		$success = $this->question->save($error, $debug);
		if ($success)
		{
			setflash("Question saved successfully");
			$this->redirectTo("/quiz/edit/".$this->question->quiz->id);
		}
		else
		{
			setflash("Could not save Question");
			$this->quiz = $this->question->quiz;
			$this->f = new \HappyPuppy\form($this->question);
			$this->view_template = "/quiz/edit";
		}
	}
	function edit($question_id)
	{
		$this->question = Question::Get($question_id);
		if ($this->question == null)
		{
			setflash("Could not find question with ID: ".$question_id);
			$this->redirectTo("list");
		}
		$this->f = new \HappyPuppy\form($this->question);
	}
	function update()
	{
		$this->question = Question::BuildFromPost($_POST["Question"]);
		$debug = array();
		$success = $this->question->save($error);
		if ($success) {
			setflash("Question updated successfully");
			$this->redirectTo("/quiz/edit/".$this->question->quiz->id);
		} else {
			setflash("Could not update Question");
			$this->f = new \HappyPuppy\form($this->question);
			$this->view_template = "question/edit";
		}
	}
	function delete($question_id)
	{
		if (isset($_POST["Question"]["id"]))
		{
			$this->question = Question::Get($_POST["Question"]["id"]);
			$quiz_id = $this->question->quiz->id;
			$success = $this->question->destroy();
			if ($success)
			{
				setflash("Question deleted successfully");
				$this->redirectTo("/quiz/edit/".$quiz_id);
			}
			else
			{
				setflash("Could not delete Question");
				$this->f = new \HappyPuppy\form($this->question);
			}
		}
		else
		{
			$this->question = Question::Get($question_id);
			$this->f = new \HappyPuppy\form($this->question);
		}
	}
	function reorder()
	{
		$ids = $_POST["IDS"];
		$order = 1;
		$success = true;
		foreach($ids as $id)
		{
			$q = Question::Get($id);
			$q->order = $order;
			$success = $q->save($error, $debug);
			if (!$success){ break; }
			$order++;
		}
		$data = array('success'=>$success);
		$this->renderJSON(json_encode($data));
	}
}

?>