<?

namespace HappyPuppy;
class DB
{
	static function query($sql)
	{
		global $db;
		//print("RUNNING: ".$sql."\n");
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$arr = array();
		while($row = $stmt->fetch(\PDO::FETCH_ASSOC))
		{
			$arr[] = $row;
		}
		return stripslashes_deep($arr);
	}
	static function exec($sql)
	{
		global $db;
		$db->exec($sql);
		return true; // $db->exec incorrectly returns 0 when 1 row is affected
	}
	static function lastInsertId()
	{
		global $db;
		return $db->lastInsertId();
	}
	static function assoc($sql, $key, $value)
	{
		global $db;
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$arr = array();
		while($row = stripslashes_deep($stmt->fetch(\PDO::FETCH_ASSOC)))
		{
			$arr[$row[$key]] = $row[$value];
		}
		return $arr;
	}
	static function get_field_structure($tablename)
	{
		global $__field_structure;
		if (!isset($__field_structure[$tablename]))
		{
			DB::build_field_structure($tablename);
		}
		return $__field_structure[$tablename];
	}
	static function build_field_structure($tablename)
	{
		global $__field_structure;
		$__field_structure[$tablename] = array();
		$sql = "DESCRIBE ".$tablename;
		$db_results = DB::query($sql);
		$rows = 0;
		foreach($db_results as $db_row)
		{
			$rows++;
			$__field_structure[$tablename]["fields"][$db_row["Field"]] = $db_row["Type"];
			if ($db_row["Key"] == "PRI")
			{
				$__field_structure[$tablename]["pk"] = $db_row["Field"];
			}
		}
		if ($rows == 0){ throw new \Exception("No table named $tablename found in database"); }
	}
}
function stripslashes_deep($value)
{
	$value = is_array($value) ?
		array_map('\HappyPuppy\stripslashes_deep', $value) :
		stripslashes($value);
	return $value;
}
?>
