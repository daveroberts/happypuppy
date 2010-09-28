<?

class filtersController extends Controller
{
  var $classvar;
  
  // Filter information
  var $before = array("validate"=>"*", "preload"=>array("alreadyloaded"));
  var $not_before = array("validate"=>array("", "index", "alreadyloaded", "login"));
  public function validate()
  {
    $admin = false;
    if (!$admin)
    {
      setflash("You are not an admin");
      $this->redirect("/filters/login");
    }
  }
  public function preload()
  {
    $this->classvar = "Preloaded for all methods";
  }

  public function adminonly()
  {
    $this->render_text("Nobody is an admin, so this cannot be seen");
  }
  public function alreadyloaded()
  {
    $this->render_text("Preloaded: ".$this->classvar);
  }
}

?>

