<?

namespace violations;
class OccurrenceController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	
	/**
	* !Route GET, /employee/occurrence/create
	*/
	function createEmployeeOccurrence()
	{
		$this->violation = Violation::Get($_POST["violation_id"]);
		$this->newempocc = new EmployeeOccurrence();
		$this->newempocc->build($_POST["EmployeeOccurrence"]);
		$error = '';
		$success = $this->newempocc->save($error);

		if ($success)
		{
			$newocc = new Occurrence();
			$newocc->violation_id = $this->violation->id;
			$newocc->employee_occurrence_id = $this->newempocc->id;
			$newocc->save($error);
			
			$this->violation->addIntoRelation("occurrences", $newocc->id, $newocc);
			$this->violation->save();
			setflash("New Occurrence Added");
			$this->redirect_to("/violation/employee/".$this->violation->id);
		} else {
			$this->view_template = "violation/employee";
			setflash("Occurrence couldn't be added: ".$error);
		}
	}
}
?>