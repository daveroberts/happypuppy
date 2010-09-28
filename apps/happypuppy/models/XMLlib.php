<?
class XMLlib
{
  public static function toXML($collection_name, $arr = array())
  {
    // There's probably a better way to do this
    $xml_output  = "<?xml version=\"1.0\"?>\n";
    $xml_output .= "<$collection_name>\n";
    foreach($arr as $obj)
    {
      $xml_output .= XMLlib::objToXML($obj);
    }
    $xml_output .= "</$collection_name>\n";
    return $xml_output;
  }
  public static function objToXML($obj)
  {
    $ro = new ReflectionObject($obj);
    $xml_output .= "<".$ro->getName().">\n";
    foreach($ro->getProperties() as $prop)
    {
      $name = $prop->name;
      $value = $obj->$name;
      $xml_output .= "<$prop->name>$value</$prop->name>\n";
    }
    $xml_output .= "</".$ro->getName().">\n";
    return $xml_output;
  }
}
?>
