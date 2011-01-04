<?php

namespace sample;
class Product // normally extends \HappyPuppy\Model, but this is a non-database example
{
	var $name;
	var $price;
	function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	static function All()
	{
		$products = array();
		//$products[] = new Product("Video Game System", "299.95");
		//$products[] = new Product("Video Game", "59.95");
		$products[] = new Product("aa", "310");
		$products[] = new Product("ba", "320");
		$products[] = new Product("ca", "330");
		$products[] = new Product("da", "340");
		$products[] = new Product("ea", "350");
		$products[] = new Product("fa", "360");
		$products[] = new Product("ga", "70");
		$products[] = new Product("ha", "480");
		$products[] = new Product("ia", "490");
		$products[] = new Product("jb", "100");
		$products[] = new Product("kb", "110");
		$products[] = new Product("lb", "120");
		$products[] = new Product("mb", "130");
		$products[] = new Product("nb", "140");
		$products[] = new Product("ob", "150");
		$products[] = new Product("pb", "160");
		$products[] = new Product("qb", "170");
		$products[] = new Product("rb", "180");
		$products[] = new Product("sb", "190");
		$products[] = new Product("tb", "200");
		$products[] = new Product("uk", "210");
		return $products;
	}
	static function Search($all_products, $s)
	{
		$products = array();
		foreach($all_products as $product)
		{
			if (strpos(strtolower($product->name),strtolower($s)) !== false)
			{
				$products[] = $product;
			}
		}
		return $products;
	}
}

?>