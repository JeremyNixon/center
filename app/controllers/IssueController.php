<?php

	class IssueController extends \BaseController {



		public function postCreate() {

	    $issue = new Issue();
	    $issue->fill(Input::all());
	    $issue->save();

	    return View::make('hammer/issue')->with('id', $issue->id);
	}

	public function postRead($id){
		return View::make('hammer/issue')->with('id', $id);
		}  

}
