db relations

protected function has_many($relation_name, $sort_by='', $foreign_class = '', $foreign_table = '', $foreign_key = ''){

protected function has_one($relation_name, $foreign_class = '', $foreign_table = '', $foreign_key = ''){

protected function habtm($relation_name, $sort_by='', $foreign_class = '', $foreign_table = '', $foreign_table_pk = '', $link_table = '', $link_table_fk_here = '', $link_table_fk_foreigntable = ''){


public function setRelationIDs($relation_name, $ids){

public function addIntoRelation($relation_name, $key, $value, $fromDB = false){