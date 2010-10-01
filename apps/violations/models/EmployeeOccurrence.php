<?
namespace violations;
class EmployeeOccurrence extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("employee_occurrence");
		parent::has_many("occurrences", "", "\\violations\\Occurrence", "occurrence", "employee_occurrence_id");
	}
}
?>