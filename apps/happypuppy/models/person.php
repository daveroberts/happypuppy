<?

class person
{
  var $id;
  var $name;

  public function person($params = array())
  {
    $this->id = $params['id'];
    $this->name = $params['name'];
  }
  public static function getFakePerson()
  {
    $p = new person(array('id'=>123, "name"=>"Fake Person"));
    return $p;
  }
  /*public static function getAll()
  {
    $query = "SELECT g.*, s.name as system FROM Game g ".
      "LEFT JOIN System s ON g.system_id = s.id ".
      "ORDER BY s.name, g.name" ;
    return DB::query($query);
  }*/
  public static function getAll()
  {
    return array(
      new Person(array('id'=>1, "name"=>"Aiden")),
      new Person(array('id'=>2, "name"=>"Jacob")),
      new Person(array('id'=>3, "name"=>"Michael")),
      new Person(array('id'=>4, "name"=>"Christopher")),
      new Person(array('id'=>5, "name"=>"Ethan")),
      new Person(array('id'=>6, "name"=>"Joshua")),
      new Person(array('id'=>7, "name"=>"Daniel")),
      new Person(array('id'=>8, "name"=>"Anthony")),
      new Person(array('id'=>9, "name"=>"Dave")),
      new Person(array('id'=>10, "name"=>"Jennifer")),
      new Person(array('id'=>11, "name"=>"Matthew")),
      new Person(array('id'=>12, "name"=>"Tiago")),
      new Person(array('id'=>13, "name"=>"Beth")),
      new Person(array('id'=>14, "name"=>"Carl")),
      new Person(array('id'=>15, "name"=>"Ethan")),
      new Person(array('id'=>16, "name"=>"Derrick")),
      new Person(array('id'=>17, "name"=>"Fred")),
      new Person(array('id'=>18, "name"=>"Jamie")),
      new Person(array('id'=>19, "name"=>"Katie")),
      new Person(array('id'=>20, "name"=>"Greg")),
      new Person(array('id'=>21, "name"=>"Holly")),
      new Person(array('id'=>22, "name"=>"Ivan")),
      new Person(array('id'=>23, "name"=>"Kramer")),
      new Person(array('id'=>24, "name"=>"Laura")),
      new Person(array('id'=>25, "name"=>"Marissa")),
      new Person(array('id'=>26, "name"=>"Nelly")),
      new Person(array('id'=>27, "name"=>"Polly")),
      new Person(array('id'=>28, "name"=>"Robert")),
      new Person(array('id'=>29, "name"=>"Nick")),
      new Person(array('id'=>30, "name"=>"Sarah")),
      new Person(array('id'=>31, "name"=>"Vin Diesel")),
      new Person(array('id'=>32, "name"=>"George")),
               );
  }
  /*public static function create($game)
  {
    return DB::insert('Game', $game);
  }
  public static function get($id)
  {
    $query = "SELECT g.*, s.name as system FROM Game g ".
      "LEFT JOIN System s ON g.system_id = s.id ".
      "WHERE g.id=".addslashes($id);
    return DB::getRow($query);
  }
  public static function destroy($id)
  {
    return DB::destroy('Game', $id);
  }
  public static function update($game)
  {
    return DB::update('Game', $game);
  }*/
  public function searchby($search)
  {
    // More than likely you would call the database here to search
    $people = person::getAll();
    $partial_matches = array();
    foreach($people as $person)
    {
      if (count($partial_matches) >= 10){ break; }
      if (strlen($search) > strlen($person->name)){ continue; }
      if (strncasecmp($search, $person->name, strlen($search)) == 0)
      {
        $partial_matches[] = $person->name;
        continue;
      }
    }
    return $partial_matches;
  }
}

?>
