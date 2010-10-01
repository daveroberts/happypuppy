<?
namespace violations;
class EmployeeOccurrenceHire extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("employee_occurrence_hire");
		parent::has_one("employee_occurrence", "\\budget\\EmployeeOccurrence", "employee_occurrence", "employee_occurrence_id");
	}
}
?>