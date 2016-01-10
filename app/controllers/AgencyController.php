<?php

	class AgencyController extends \BaseController {



		public function postCreate() {

	    $scam = new Agency();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/agency-created');

	}

}
