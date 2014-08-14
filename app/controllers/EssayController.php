<?php

	class EssayController extends \BaseController {



		public function postCreate() {

	    $essay = new Essay();
	    $essay->fill(Input::all());
	    $essay->save();

	    return View::make('hammer');

	}

	public function postRead($id){
		return View::make('hammer/essay')->with('id', $id);
		}  

}
