<?
namespace violations;
class Occurrence extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("occurrence");
		parent::has_one("violation", "\\violations\\Violation", "violation", "violation_id");
		parent::has_one("employee_occurrence", "\\violations\\EmployeeOccurrence", "employee_occurrence", "employee_occurrence_id");
		parent::has_one("company_occurrence", "\\violations\\CompanyOccurrence", "company_occurrence", "company_occurrence_id");
	}
}
?>