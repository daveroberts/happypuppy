<?php

namespace league;
/**  
 * !DefaultAction list
 * !Before is_admin, logged_in
 * */
class StatsController extends \HappyPuppy\Controller
{
	function __init()
	{
	}
	/**
	 * !NotRoute
	 **/
	function logged_in()
	{
		LoginController::logged_in();
	}
	/**
	 * !NotRoute
	 **/
	function is_admin()
	{
		LoginController::is_admin();
	}
	function _list()
	{
		$this->redirectTo("/survey/list");
	}
	function view($survey_id)
	{
		$this->survey = Survey::Get($survey_id);
		if ($this->survey == null)
		{
			setflash("Could not find survey with ID: ".$survey_id);
			$this->redirectTo("list");
		}
	}
	function champion($champion_id)
	{
		$champion = Champion::Get($champion_id);
		$max = 100;
		$data = array();
		$data[] = $champion->bads;
		$data[] = $champion->mehs;
		$data[] = $champion->oks;
		$data[] = $champion->goods;
		$data[] = $champion->ops;
		
		$bar1 = new \bar_outline( 50, '#FF0000', '#FF0000' );
		$bar1->key( 'Needs Major Nerfs', 10 );
		$bar1->data = array($champion->bads);
		
		$bar2 = new \bar_outline( 50, '#FFAA00', '#FFAA00' );
		$bar2->key( 'Needs Minor Nerfs', 10 );
		$bar2->data = array($champion->mehs);
		
		$bar3 = new \bar_outline( 50, '#0000FF', '#0000FF' );
		$bar3->key( 'Well Balanced', 10 );
		$bar3->data = array($champion->oks);
		
		$bar4 = new \bar_outline( 50, '#FFAA00', '#FFAA00' );
		$bar4->key( 'Needs Minor Nerfs', 10 );
		$bar4->data = array($champion->goods);
		
		$bar5 = new \bar_outline( 50, '#FF0000', '#FF0000' );
		$bar5->key( 'Needs Major Nerfs', 10 );
		$bar5->data = array($champion->ops);

		$g = new \graph();
		$g->title($champion->name, '{font-size: 26px;}' );
		$g->bg_colour = '#FFFFFF';
		
		$g->data_sets[] = $bar1;
		$g->data_sets[] = $bar2;
		$g->data_sets[] = $bar3;
		$g->data_sets[] = $bar4;
		$g->data_sets[] = $bar5;

		//$g->set_data( $data );
		// label each point with its value
		/*$g->set_x_labels( array(
			'Needs Major Buffs',
			'Needs Minor Buffs',
			'Well Balanced',
			'Needs Minor Nerfs',
			'Needs Major Nerfs'));*/

		// set the Y max
		$g->set_y_max( 100 );
		// label every 20 (0,20,40,60)
		$g->y_label_steps( 4 );

		// display the data
		$this->renderText($g->render());
	}
}

?>