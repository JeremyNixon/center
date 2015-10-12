<?php

	class OfficerController extends \BaseController {



		public function postCreate() {

	    $scam = new Officer();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/members');

	}

}
