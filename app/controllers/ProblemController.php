<?php

	class ProblemController extends \BaseController {



		public function postCreate() {

	    $problem = new Problem();
	    $problem->fill(Input::all());
	    $problem->save();

	    return View::make('mcc/issue-created');

	}

	public function postRead($id){
		return View::make('mcc/issue')->with('id', $id);
		}  

}
