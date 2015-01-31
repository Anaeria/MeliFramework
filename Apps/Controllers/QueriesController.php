<?php

namespace Apps\Controllers;

use System\Helpers\Profiler;
use System\Helpers\Input;
use Apps\Models\World;


class QueriesController extends ApplicationController{

	// Exécussion du controller pour un appel en GET à /welcome/index
	public function getIndex(){
        $this->outputMode = 'json';
        $this->layout = 'none';

        $queries = Input::get('queries');
        if(!$queries || !is_int($queries) || $queries<1) {
        	$queries = 1;
        } elseif ($queries > 500) {
        	$queries = 500;
        }

        $tab = [];

        for($n=0;$n<$queries;$n++) {
        	$tab[] = World::find(rand(1,10000))->toRow();
        }


        $this->data['output'] = json_encode($tab);

        //Profiler::enable();
	}
}