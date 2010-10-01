<?
namespace violations;
class Macro extends \HappyPuppy\dbobject
{
	function __construct()
	{
		parent::__construct("macro");
		parent::has_many("violations", "", "\\budget\\Violation", "violation", "macro_id");
	}
}
?>