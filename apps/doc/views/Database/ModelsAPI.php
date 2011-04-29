<pre>db models

The bread and butter of your application!

How to implement: add extends \happypuppy\model...



tablename
__description
pk
pkval
field get and set
relation get and set (setRelation)

All(sort_by, debug)
public static function Get($pk_id){

caching system will pull from memory if object has already been retrieved
public static function Find($args, $debug = false){
FindBy{Field}
public static function All($sort_by = '', $debug = false){
public static function FindBySQL($sql){
public function First(){

public static function collectionToXML($collection, $includes = array(), $excludes = array(), $name = '')

public function prettyPrint(){

public function save(&$error_msg = '', $debug = false){

public function delete(){

public function destroy($destroy_dependents = false){

public function loadRelation($sql, $relation_name){

public static function Count($args, $debug = false){

public function buildAll($db_results){

public function buildFromDB($arr){

public static function buildFromPost($arr){

public function build($arr){

public function isUniqueField($field_name, $scope_by = array(), &$error_msg = ''){

public function setDescription($value){

public function setTablename($value){

link to: relations
</pre>