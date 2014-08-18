<?php

	class QuizController extends \BaseController {



		public function postCreate() {

	    $quiz = new Quiz();
	    $quiz->fill(Input::all());
	    $quiz->save();

	   return View::make('quiz/process')->with('id', $quiz->id);


	}

	public function postRead($id){
		return View::make('quiz/home')->with('id', $id);
		}  

}
