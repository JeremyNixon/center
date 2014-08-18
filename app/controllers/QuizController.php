<?php

	class QuizController extends \BaseController {



		public function postCreate() {

	    $quiz = new Quiz();
	    $quiz->q6 = 0;
	    $quiz->q7 = 0;
	    $quiz->q8 = 0;
	    $quiz->q9 = 0;
	    $quiz->q10 = 0;
	    $quiz->fill(Input::all());
	    $quiz->save();

	   return View::make('quiz/process')->with('id', $quiz->id);


	}

	public function postRead($id){
		return View::make('quiz/home')->with('id', $id);
		}  

}
