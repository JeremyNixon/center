<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
# Blog ###############################################################

Route::get('/', function(){
    return View::make('/blog/landing');
});

Route::get('/post1', function(){
    return View::make('/blog/post1');
});

Route::get('/post2', function(){
    return View::make('/blog/post2');
});

Route::get('/post3', function(){
    return View::make('/blog/post3');
});

Route::get('/post4', function(){
    return View::make('/blog/post4');
});

Route::get('/post5', function(){
    return View::make('/blog/post5');
});

Route::get('/post6', function(){
    return View::make('/blog/post6');
});

Route::get('/growth-as-a-way-of-life', function(){
    return View::make('/blog/post7');
});

Route::get('/reading', function(){
    return View::make('blog/reading_list');
});

Route::get('/reading/poor-charlies-almanac', function(){
    return View::make('blog/reading/poor_charlies_almanac');
});

Route::get('/reading/poor-charlies-almanac1', function(){
    return View::make('blog/reading/poor-charlies-almanac');
});

Route::get('/reading/antifragile', function(){
    return View::make('blog/reading/antifragile');
});


# MISC ###############################################################


Route::get('bcs', function(){
	return View::make('bcs');
});

Route::get('user-form', function(){
    return View::make('user-form');
});

Route::post('/user-generate', function(){
    ?>
    <style>
    body{
        text-align: center;
        font-family: georgia;
    }
    </style>
    <?php $data = Input::all();
    $num = $data['num'];?>
<h2>Here are <?php echo $num; ?> users!</h2>
<a href="/user-form">Generate a Different Number of Users</a><br><br>
<?php

$faker = Faker\Factory::create();

for ($i=0; $i < $num; $i++) {
  echo $faker->name, "<br>";
}});

# Home ********************************************************************

Route::get('/home', function(){
    return View::make('/home/home');
});

Route::get('/home/reading-list', function(){
    return View::make('/home/reading-list');
});

Route::get('/home/contact', function(){
    return View::make('/home/contact');
});
# MCC *********************************************************************

Route::get('/mcc', function(){
    return View::make('/mcc/home');
});

Route::get('/mcc/about', function(){
    return View::make('/mcc/about');
});

Route::get('/mcc/consumer-information', function(){
    return View::make('/mcc/consumer-information');
});

Route::get('/mcc/consumer-resources', function(){
    return View::make('/mcc/consumer-resources');
});

Route::get('/mcc/issues-legislation', function(){
    return View::make('/mcc/issues-legislation');
});

Route::get('/mcc/scam-create', function(){
    return View::make('mcc/scam-create');
});

Route::post('/mcc/scam-create', 'ScamController@postCreate');

Route::get('/mcc/scam-created', function(){
    return View::make('mcc/scam-created');
});

Route::get('/mcc/scam/{id}', 'ScamController@postRead');

Route::get('/mcc/issue-create', function(){
    return View::make('mcc/issue-create');
});

Route::post('/mcc/issue-create', 'ProblemController@postCreate');

Route::get('/mcc/issue-created', function(){
    return View::make('mcc/issue-created');
});

Route::get('/mcc/issue/{id}', 'ProblemController@postRead');

# The Quiz ****************************************************************

Route::get('/quiz', function(){
    return View::make('/quiz/home');
});

Route::get('/quiz/take', function(){
    return View::make('/quiz/take');
});

Route::post('/quiz/take', 'QuizController@postCreate');


Route::get('/quiz/test', function(){
    return View::make('/quiz/test');
});

Route::get('/quiz/process', function(){
    return View::make('/quiz/process');
});

Route::get('/quiz/possibilities', function(){
    return View::make('/quiz/possibilities');
});

# The Hammer **************************************************************

Route::get('/hammer', function(){
    return View::make('/hammer/home');
});
Route::get('/hammer/issues', function(){
    return View::make('/hammer/issues');
});

Route::get('/hammer/create-essay', function() {
    return View::make('/hammer/create-essay');  
});

Route::post('/hammer/create-essay', 'EssayController@postCreate');

Route::get('/hammer/essay/{id}', 'EssayController@postRead');

Route::get('/hammer/create-issue', function() {
    return View::make('/hammer/create-issue');
});

Route::post('/hammer/create-issue', 'IssueController@postCreate');

Route::get('/hammer/issue/{id}', 'IssueController@postRead');

Route::get('/hammer/contact', function() {
    return View::make('/hammer/contact');
});

    # Behavioral Econ *********************************************************

Route::get('/behavior', function(){
	return View::make('/behavior/landing');
});

Route::get('/behavior/review', function(){
	return View::make('/behavior/book-reviews');
});

Route::get('/behavior/list', function(){
	return View::make('/behavior/reading-list');
});

Route::get('/behavior/forum', function(){
	return View::make('/behavior/forum');
});

Route::get('/behavior/signup', array('before' => 'guest', function() {
    return View::make('/behavior/signup');
}));

Route::post('/behavior/signup', array('before' => 'csrf', function() {

            $user = new User;
            $user->name = Input::get('name');
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/behavior/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/behavior');

        }
    )
);


Route::get('/behavior/login', array('before' => 'guest', function() {
    return View::make('/behavior/login');
}));

Route::post('/behavior/login', array('before' => 'csrf', function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/behavior')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/behavior/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('/behavior/login');
        }
    )
);

Route::get('/behavior/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/behavior');

});

Route::get('/behavior/post_create', function()
{
    return View::make('behavior/post_create');
});

Route::post('/behavior/create-post', 'PostController@postCreate');

Route::get('/behavior/book_create', function()
{
    return View::make('behavior/book_create');
});

Route::post('/behavior/create-book', 'BookController@postCreate');

Route::get('/behavior/post/{id}', 'PostController@postRead');

Route::get('/behavior/comment_create/{id}', array('before' => 'user', function($id){
    return View::make('behavior/comment_create')->with('id', $id);
}));

Route::post('/behavior/create-comment/{id}', 'CommentController@postCreate');

# Book Thoughts ********************************************************

Route::get('/book-thoughts', function(){
	return View::make('/book-thoughts/book-thoughts');
});

Route::get('/inquiry-on-human-understanding', function(){
	return View::make('/book-thoughts/inquiry-on-human-understanding')
;});

Route::get('/the-rules', function(){
	return View::make('/book-thoughts/the-rules');
});

Route::get('/your-lifestyle-has-already-been-designed', function(){
	return View::make('/book-thoughts/your-lifestyle-has-already-been-designed');
});

Route::get('/lean-in', function(){
	return View::make('/book-thoughts/lean-in');
});

Route::get('/what-every-body-is-saying', function(){
	return View::make('/book-thoughts/what-every-body-is-saying');
});

# Ultimate Video Online **************************************************

Route::get('/ultimate-video-online', function()
{
	return View::make('/ultimate-video-online/landing');
});

Route::get('/ultimate-video-online/open-club', function(){
	return View::make('/ultimate-video-online/open-club');
});

Route::get('/ultimate-video-online/mixed-club', function(){
	return View::make('/ultimate-video-online/mixed-club');
});

Route::get('/ultimate-video-online/women-club', function(){
	return View::make('/ultimate-video-online/women-club');
});

Route::get('/ultimate-video-online/open-college', function(){
	return View::make('/ultimate-video-online/open-college');
});

Route::get('/ultimate-video-online/women-college', function(){
	return View::make('/ultimate-video-online/women-college');
});

Route::get('/ultimate-video-online/triple-cripple', function(){
    return View::make('/ultimate-video-online/triple-cripple');
});



# Project Three *********************************************************

Route::get('/project-three', function(){
	return View::make('landing');
});


Route::get('/lorem-ipsum', function(){
	return View::make('lorem-ipsum');
});


Route::get('/lorem-ipsum/{num}', function($num)
{
    $data['num'] = $num;

    return View::make('lorem-ipsum', $data);
});



Route::get('/user-generate/{num}', function($num)
{
    $data['num'] = $num;

    return View::make('user-generate', $data);
});

Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    var_dump($results);

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});