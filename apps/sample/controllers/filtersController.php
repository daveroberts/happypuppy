<?php
namespace sample;
class filtersController extends \HappyPuppy\Controller
{
  var $classvar;
  
  function defaultAction(){ return "index"; }
  
  // Filter information
  var $before = array("validate"=>"*", "preload"=>array("alreadyloaded"));
  var $not_before = array("validate"=>array("", "index", "alreadyloaded", "login"));
  
  public function index(){}
  
  public function login(){}
  
  public function validate()
  {
    $admin = false;
    if (!$admin)
    {
      setflash("You are not an admin");
      $this->redirectToAction("login");
    }
  }
  public function preload()
  {
    $this->classvar = "Preloaded for all methods";
  }

  public function adminonly()
  {
    $this->renderText("Nobody is an admin, so this cannot be seen");
  }
  public function alreadyloaded()
  {
    $this->renderText("Preloaded: ".$this->classvar);
  }
}

?>