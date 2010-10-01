<?
namespace violations;
class CompanyOccurrence extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("company_occurrence");
		parent::has_many("occurrences", "", "\\violations\\Occurrence", "occurrence", "company_occurrence_id");
	}
}
?>