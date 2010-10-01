Test
<pre>
<?php
$array['BankAccount']  = array(
	"table"=>"bank_accounts",
	"plural"=>"BankAccounts",
	"pk"=>"id",
	"fields"=>array(
		"id"=>"int",
		"name"=>"string",
		"beginning_balance"=>"string",
		"person_id"=>"int"),
	"has_one"=>array(
		"owner"=>array(
			"field"=>"person_id",
			"table"=>"people"
		)
	)
);
$array["Entry"] = array(
	"table"=>"entries",
	"plural"=>"Entries",
	"pk"=>"id",
	"fields"=>array(
		"id"=>"int",
		"charged_to"=>"int",
		"description"=>"string",
		"amount"=>"string",
		"date"=>"date",
		"tag_id"=>"int",
		"intra_transfer"=>"bool"
	),
	"has_one"=>array(
		"tag"=>array(
			"field"=>"tag_id"
		)
	)
);
$yaml = Spyc::YAMLDump($array, true);
print($yaml);
$yaml = "---
BankAccount: 
  table: bank_accounts
  plural: BankAccounts
  pk: id
  fields: 
    id: int
    name: string
    beginning_balance: string
    person_id: int
  has_one: 
    owner: 
      field: person_id
      table: people
Entry: 
  table: entries
  plural: Entries
  pk: id
  fields: 
    id: int
    charged_to: int
    description: string
    amount: string
    date: date
    tag_id: int
    intra_transfer: bool
  has_one: 
    tag: 
      field: tag_id";
$array = Spyc::YAMLLoad($yaml);
print_r($array);
?>
</pre>