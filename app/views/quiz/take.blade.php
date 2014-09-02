@extends('/quiz/base')
@section('body')
<title>Take the Quiz</title>
	<div id="container">
		<p id="heading"> Many answers to these questions may not be mutually exclusive.<br> Answer with the one that is most important to your beliefs.<p>
	{{ Form::open(array('url' => 'quiz/take', 'method' => 'POST')) }}

			<div class="section"><div class="question">
			<p>1. The underlying nature of all things is...<p>
			</div>
			<div class="answers">
			{{ Form::radio('q1', $value = 1) }} Either Physical or Mental. <br>
			{{ Form::radio('q1', $value = 2) }} Everything is a mental construction. It's immaterial. <br>
			{{ Form::radio('q1', $value = 3) }} Completely physical. Nothing more or less than physical processes. <br>
			{{ Form::radio('q1', $value = 4) }} Unimportant, as it does not influence our abliity to act and problem solve. <br>
			{{ Form::radio('q1', $value = 5) }} My view is significantly different from all of these options.</div>
			</div>

			
			<div class="section"><div class = "question"><p>2. At the core of knowledge are...<p></div>
			<div class="answers">
			{{ Form::radio('q2', $value = 1) }} Innate ideas (of thought, existence) in the mind. <br>
			{{ Form::radio('q2', $value = 2) }} Sensory experiences. <br>
			{{ Form::radio('q2', $value = 3) }} True knowledge is not possible, as reality is constructed by the mind.<br>
			{{ Form::radio('q2', $value = 4) }} An objective understanding of a real knowable world. <br>
			{{ Form::radio('q2', $value = 5) }} My view is significantly different from all of these options. </div>
			</div>
			
			<div class="section"><div class = "question"><p>3. Meaning in the world is dependent on...<p></div>
			<div class="answers">
			{{ Form::radio('q3', $value = 1) }} Our social environment, the people around us. <br>
			{{ Form::radio('q3', $value = 2) }} Our praise, reverence and service to God. <br>
			{{ Form::radio('q3', $value = 3) }} There is no meaning in the world beyond what meaning we give it. <br>
			{{ Form::radio('q3', $value = 4) }} There is no meaning in the world and attempting to impose meaning is futile. <br>
			{{ Form::radio('q3', $value = 5) }} My view is significantly different from all of these options.  </div></div>
			
			<div class="section"><div class = "question"><p>4. Beliefs are justified if...<p></div><div class="answers">
			{{ Form::radio('q4', $value = 1) }} They cohere with the system of other beliefs a person holds. <br>
			{{ Form::radio('q4', $value = 2) }} External sources of knowledge justify beliefs. <br>
			{{ Form::radio('q4', $value = 3) }} Self-evident beliefs justify other non-trivial beliefs. <br>
			{{ Form::radio('q4', $value = 4) }} Justified beliefs are not possible. <br>
			{{ Form::radio('q4', $value = 5) }} My view is significantly different from all of these options. </div></div>
			
			<div class="section"><div class = "question"><p>5. The proper function of thought is...<p></div><div class="answers">
			{{ Form::radio('q5', $value = 1) }} To accurately describe reality. <br>
			{{ Form::radio('q5', $value = 2) }} To solve problems and guide our actions toward our goals	. <br>
			{{ Form::radio('q5', $value = 3) }} Noise that fills in moments of mental silence between activity. <br>
			{{ Form::radio('q5', $value = 4) }} Thought has no proper function. <br>
			{{ Form::radio('q5', $value = 5) }} My view is significantly different from all of these options. <br></div></div>

			<!--
			<div class="section"><div class = "question"><p>. Question...<p></div><div class="answers">
			{{ Form::radio('q6', $value = 1) }} Option 1 <br>
			{{ Form::radio('q6', $value = 2) }} Option 2 <br>
			{{ Form::radio('q6', $value = 3) }} Option 3 <br>
			{{ Form::radio('q6', $value = 4) }} Option 4 <br>
			{{ Form::radio('q6', $value = 5) }} Option 5  </div></div>
			
			<div class="section"><div class = "question"><p>. Question...<p></div><div class="answers">
			{{ Form::radio('q7', $value = 1) }} Option 1 <br>
			{{ Form::radio('q7', $value = 2) }} Option 2 <br>
			{{ Form::radio('q7', $value = 3) }} Option 3 <br>
			{{ Form::radio('q7', $value = 4) }} Option 4 <br>
			{{ Form::radio('q7', $value = 5) }} Option 5  </div></div>
			
			<div class="section"><div class = "question"><p>. Question...<p></div><div class="answers">
			{{ Form::radio('q8', $value = 1) }} Option 1 <br>
			{{ Form::radio('q8', $value = 2) }} Option 2 <br>
			{{ Form::radio('q8', $value = 3) }} Option 3 <br>
			{{ Form::radio('q8', $value = 4) }} Option 4 <br>
			{{ Form::radio('q8', $value = 5) }} Option 5  </div></div>
			
			<div class="section"><div class = "question"><p>. Question...<p></div><div class="answers">
			{{ Form::radio('q9', $value = 1) }} Option 1 <br>
			{{ Form::radio('q9', $value = 2) }} Option 2 <br>
			{{ Form::radio('q9', $value = 3) }} Option 3 <br>
			{{ Form::radio('q9', $value = 4) }} Option 4 <br>
			{{ Form::radio('q9', $value = 5) }} Option 5  </div></div>
			
			<div class="section"><div class = "question"><p>. Question...<p></div><div class="answers">
			{{ Form::radio('q10', $value = 1) }} Option 1 <br>
			{{ Form::radio('q10', $value = 2) }} Option 2 <br>
			{{ Form::radio('q10', $value = 3) }} Option 3 <br>
			{{ Form::radio('q10', $value = 4) }} Option 4 <br>
			{{ Form::radio('q10', $value = 5) }} Option 5  </div></div>
			-->
		{{ Form::submit('See My Results') }}

	{{ Form::close() }}
	</div>
@stop