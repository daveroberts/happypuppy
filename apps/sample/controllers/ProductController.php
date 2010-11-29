<?php

namespace sample;
class ProductController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }

	function _list()
	{
		$this->products = Product::All();
		$this->page = 1;
		$num_per_page = 3;
		$this->s = '';
		if (isset($_REQUEST["search"]) && $_REQUEST["search"] != '')
		{
			$this->s = $_REQUEST["search"];
			$this->products = Product::Search($this->products, $this->s);
		}
		if (isset($_REQUEST["sort_col"])){
			$this->sort_col = $_REQUEST["sort_col"];
			$this->sort_dir = "DESC";
			if (isset($_REQUEST["sort_dir"])){ $this->sort_dir = $_REQUEST["sort_dir"]; }
			osort($this->products, $this->sort_col);
			if ($this->sort_dir == 'ASC'){ $this->products = array_reverse($this->products, true); }
		}
		if (isset($_REQUEST["page"])){
			$this->page = $_REQUEST["page"];
		}
		$this->total = count($this->products);
		$this->products = Product::Page($this->products, $this->page, $num_per_page);
		$this->total_pages = ceil($this->total / $num_per_page);
	}
}

?>