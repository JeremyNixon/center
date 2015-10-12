<?php

	class LegislationController extends \BaseController {



		public function postCreate() {

	    $scam = new Legislation();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/issues-legislation');

	}

	public function postRead($id){
		return View::make('mcc/legislation')->with('id', $id);
		}  

}
