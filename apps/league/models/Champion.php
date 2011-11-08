<?php

namespace league;
class Champion extends \HappyPuppy\Model
{
	private $stats = null;
	function __construct()
	{
		parent::__construct();
	}
	function __get($name)
	{
		if (is_equal($name, "avg_percent"))
		{
			$this->loadStats();
			return number_format(100 * $this->stats["average"] / 5, 2);
		}
		if (is_equal($name, "bads"))
		{
			$this->loadStats();
			return number_format(100*$this->stats["bads"] / $this->total_votes, 2);
		}
		if (is_equal($name, "mehs"))
		{
			$this->loadStats();
			return number_format(100*$this->stats["mehs"] / $this->total_votes, 2);
		}
		if (is_equal($name, "oks"))
		{
			$this->loadStats();
			return number_format(100*$this->stats["oks"] / $this->total_votes, 2);
		}
		if (is_equal($name, "goods"))
		{
			$this->loadStats();
			return number_format(100*$this->stats["goods"] / $this->total_votes, 2);
		}
		if (is_equal($name, "ops"))
		{
			$this->loadStats();
			return number_format(100*$this->stats["ops"] / $this->total_votes, 2);
		}
		if (is_equal($name, "total_votes"))
		{
			$this->loadStats();
			return
				$this->stats["bads"] +
				$this->stats["mehs"] +
				$this->stats["oks"] +
				$this->stats["goods"] +
				$this->stats["ops"];
		}
		return parent::__get($name);
		/*
			<tr>
		<td><?php echo $stats['average'] ?></td>
		<td><?php echo $stats['bads'] ?></td>
		<td><?php echo $stats['mehs'] ?></td>
		<td><?php echo $stats['oks'] ?></td>
		<td><?php echo $stats['goods'] ?></td>
		<td><?php echo $stats['ops'] ?></td>
	</tr>
	*/
	}
	function loadStats()
	{
		if ($this->stats == null)
		{
			$sql = "select avg(score) from ratings a where a.champion_id=".$this->id;
			$db_results = \HappyPuppy\DB::query($sql);
			$this->stats['average'] = end(end($db_results));
			$sql = "select count(score) from ratings a where a.champion_id=".$this->id." AND score=1";
			$db_results = \HappyPuppy\DB::query($sql);
			$this->stats['bads'] = end(end($db_results));
			$sql = "select count(score) from ratings a where a.champion_id=".$this->id." AND score=2";
			$db_results = \HappyPuppy\DB::query($sql);
			$this->stats['mehs'] = end(end($db_results));
			$sql = "select count(score) from ratings a where a.champion_id=".$this->id." AND score=3";
			$db_results = \HappyPuppy\DB::query($sql);
			$this->stats['oks'] = end(end($db_results));
			$sql = "select count(score) from ratings a where a.champion_id=".$this->id." AND score=4";
			$db_results = \HappyPuppy\DB::query($sql);
			$this->stats['goods'] = end(end($db_results));
			$sql = "select count(score) from ratings a where a.champion_id=".$this->id." AND score=5";
			$db_results = \HappyPuppy\DB::query($sql);
			$this->stats['ops'] = end(end($db_results));
		}
	}
}

?>