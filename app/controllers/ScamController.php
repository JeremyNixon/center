<?php

	class ScamController extends \BaseController {



		public function postCreate() {

	    $scam = new Scam();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/scam-created');

	}

	public function postRead($id){
		return View::make('mcc/scam')->with('id', $id);
		}  

}
