<?
namespace violations;
class EmployeeOccurrencePerformance extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("employee_occurrence_performance");
		parent::has_one("employee_occurrence", "\\budget\\EmployeeOccurrence", "employee_occurrence", "employee_occurrence_id");
	}
}
?>