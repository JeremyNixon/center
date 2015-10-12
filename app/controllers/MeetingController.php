<?php

	class MeetingController extends \BaseController {



		public function postCreate() {

	    $meeting = new Meeting();
	    $meeting->fill(Input::all());
	    $meeting->save();

	    return View::make('mcc/meeting-created');

	}

	public function postRead($id){
		return View::make('mcc/meeting')->with('id', $id);
		}  

}
