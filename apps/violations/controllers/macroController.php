<?

namespace violations;
class MacroController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function _list()
	{
		$this->macros = Macro::All('');
		$new_macro = new Macro();
		$this->new_macro_form = new \HappyPuppy\form($new_macro);
	}
	function create(){
    	$this->newmacro = new Macro();
		$this->newmacro->build($_POST["Macro"]);
		$error = '';
		$success = $this->newmacro->save($error);

		if ($success)
		{
			$this->flash = "New Macro Added";
			$this->redirect_to_action("list");
		} else {
			$this->view_template = "macro/list";
			$this->flash = "Macro was not able to be created: ".$error;
			$this->macros = Macro::All('');
			$this->new_macro_form = new \HappyPuppy\form($this->newmacro);
		}
	}
}
?>