<pre>&lt;?

namespace <?=$appname?>;

class <?= $hpmodel->dbtablename ?> extends \HappyPuppy\dbobject
{
	function __construct(){
		parent::__construct("<?= $hpmodel->dbtablename ?>");
		//parent::has_many($relation_name, $sort_by, $foreign_class, $foreign_table, $foreign_key);
		//parent::has_one($relation_name, $foreign_class, $foreign_table, $foreign_key);
		//parent::habtm($relation_name, $sort_by, $foreign_class, $foreign_table, $foreign_table_pk, $link_table, $link_table_fk_here, $link_table_fk_foreigntable);
		//parent::isUniqueField($field_name, $scope_by, &$error_msg);
		//parent::setDescription("name");
	}
}
?&gt;
</pre>