<?php

namespace sample;
class ProductAjaxController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }

	function _list()
	{
		$this->products = Product::All();
		$num_per_page = 3;
		$this->pg = new \HappyPuppy\Pagination("");
		$this->s = '';
		if ($this->pg->isSearchSet())
		{
			$this->s = $this->pg->search();
			$this->products = Product::Search($this->products, $this->s);
		}
		if ($this->pg->isSortColSet()){
			osort($this->products, $this->pg->sortCol());
			if ($this->pg->isSortDirSet() && $this->pg->sortDir() == 'ASC'){ $this->products = array_reverse($this->products, true); }
		}
		$this->total = count($this->products);
		$this->products = array_slice($this->products, ($this->pg->page()-1)*$num_per_page, $num_per_page);
		$this->pg->setTotalPages(ceil($this->total / $num_per_page));
		
		// ajax request
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$this->layout = false;
			$this->view_template = "ProductAjax/_products";
		}
	}
}

?>