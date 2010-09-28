<?

# load models needed for this controller here
//xxxrequire_once $_ENV["app"]->root().'models/person.php';

class personController extends Controller
{
	public function index()
	{
		$this->redirect("/person/list");
	}
	// list and new are keywords in php, so we append an underscore
	public function _list()
	{
		$this->people = person::getAll();
		$this->people = array_slice($this->people, 0, 10);
	}
	public function create()
	{
		setflash("Dummy create method called (".$_POST['person']['name'].")");
		$this->redirect('/person/list');
	}
	public function show($id)
	{
		// $this->person = person::get($id);
		$this->person = person::getFakePerson();
	}
	public function destroy($id)
	{
		setflash("Dummy destroy method called (#".$id.")");
		$this->redirect("/person/list");
	}
	public function edit($id)
	{
		// $this->person = person::get($id);
		$this->person = array('id'=>$id, 'name'=>'Fake Person'.' '.$id);
	}
	public function update()
	{
		setflash("Dummy update method called (#".$_POST['person']['id'].")");
		$this->redirect('/person/list');
	}
	public function searchby()
	{
		$userinput = $_POST['queryString']; // sanitize this please!!!
		$this->partial_matches = person::searchby($userinput);
		$this->layout = false;
	}
}

?>
