class GenerateController extends \BaseController {



		public function generate() {

	    $post = new Post();
	    $post->user_id = Auth::user()->id;
	    $post->rating = 0;
	    $post->fill(Input::all());
	    $post->save();
	    $id = $post->id;

	    return View::make('post')->with('id', $id);

	}