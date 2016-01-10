<?php

	class SecretaryController extends \BaseController {



		public function postCreate() {

	    $scam = new Secretary();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/secretary-created');

	}

}
