<?php

	class MemberController extends \BaseController {



		public function postCreate() {

	    $scam = new Member();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/member-created');

	}

}
