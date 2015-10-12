<?php

	class BlogController extends \BaseController {



		public function postCreate() {

	    $scam = new Blog();
	    $scam->fill(Input::all());
	    $scam->save();

	    return View::make('mcc/blog-created');

	}

	public function postRead($id){
		return View::make('mcc/blog')->with('id', $id);
		}  

}
