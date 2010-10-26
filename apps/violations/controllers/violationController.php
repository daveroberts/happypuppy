<?

namespace violations;
class ViolationController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function _list()
	{
		$this->violations = Violation::All('');
		$new_violation = new Violation();
		$this->new_violation_form = new \HappyPuppy\form($new_violation);
	}
	function create(){
    	$this->newviolation = new Violation();
		$this->newviolation->build($_POST["Violation"]);
		$error = '';
		$success = $this->newviolation->save($error);

		if ($success)
		{
			$this->flash = "New Violation Added";
			$this->redirect_to_action("list");
		} else {
			$this->view_template = "violation/list";
			$this->flash = "Violation was not able to be created: ".$error;
			$this->violations = Violation::All('');
			$this->new_violation_form = new \HappyPuppy\form($this->newviolation);
		}
	}
	function company($id){
		$this->violation = Violation::Get($id);
		$new_occurrence = new CompanyOccurrence();
		$this->f = new \HappyPuppy\form($new_occurrence);
	}
	function employee($id){
		$this->violation = Violation::Get($id);
		if ($this->violation == null){ $this->view_template = "violation/invalid"; return; }
		$new_occurrence = new EmployeeOccurrence();
		$this->f = new \HappyPuppy\form($new_occurrence);
	}
	function nooccurrences($id){
		$this->violation = Violation::Get($id);
	}
	function show($id){
		$this->violation = Violation::Get($id);
		if ($this->violation->isCompanyViolation())
		{
			$this->view_template ="violation/company";
			$new_occurrence = new CompanyOccurrence();
			$this->f = new \HappyPuppy\form($new_occurrence);
		}
		if ($this->violation->isEmployeeViolation())
		{
			$this->view_template = "violation/employee";
			$new_occurrence = new EmployeeOccurrence();
			$this->f = new \HappyPuppy\form($new_occurrence);
		}
		else
		{
			$this->view_template = "violation/nooccurrences";
		}
	}
}
?>