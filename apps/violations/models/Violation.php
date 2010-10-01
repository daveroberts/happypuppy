<?
namespace violations;
class Violation extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("violation");
		parent::has_many("occurrences", "", "\\violations\\Occurrence", "occurrence", "violation_id");
		parent::has_one("macro", "\\violations\\Macro", "macro", "macro_id");
	}
	public function isEmployeeViolation()
	{
		if (count($this->occurrences) == 0){
			return false;
		}
		$occurrence = reset($this->occurrences);
		return ($occurrence->employee_occurrence_id > 0);
	}
	public function isCompanyViolation()
	{
		if (count($this->occurrences) == 0){
			return false;
		}
		$occurrence = reset($this->occurrences);
		return ($occurrence->company_occurrence_id > 0);
	}
}
?>