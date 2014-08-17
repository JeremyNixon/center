@extends('/quiz/base')
	<?php $collection = Quiz::findOrFail($id); ?>

@section('body')

<?php
	
		$rationalism = 0;
		$empiricism = 0;
		$idealism = 0;
		$existentialism = 0;
		$pragmatism = 0;
		$outside = 0;

		// Cheap Definitions
		/*
		Rationalism: We can use innate ideas and objective rationality to draw conclusions
		Empiricism: We can only rely on sense experience to understand reality
		Idealism: Realitiy as we can know it is constructed mentally
		Existentialism - A human individiual's confusion in an absurd, meanignless world
		Pragmatism: Purpose of thought is not truth, is is a a tool for practical use
		*/


		// Question 1
		
		if($collection->q1 == 1){
			$rationalism += 5;
			$empiricism += 0;
			$idealism += 0;
			$existentialism += 1;
			$pragmatism += 2;
		}
		elseif($collection->q1 == 2){
			$rationalism += 1;
			$empiricism += 3;
			$idealism += 5;
			$existentialism += 1;
			$pragmatism += 1;
		}
		elseif($collection->q1 == 3){
			$rationalism += 1;
			$empiricism += 3;
			$idealism += 1;
			$existentialism += 3;
			$pragmatism += 2;
		}
		elseif($collection->q1 == 4){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 5;
		}
		elseif($collection->q1 == 5){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 1;
			$outside += 5;
		}

		// Question 2
		
		if($collection->q2 == 1){
			$rationalism += 5;
			$empiricism += 0;
			$idealism += 3;
			$existentialism += 1;
			$pragmatism += 0;
		}
		elseif($collection->q2 == 2){
			$rationalism += 0;
			$empiricism += 5;
			$idealism += 3;
			$existentialism += 1;
			$pragmatism += 1;
		}
		elseif($collection->q2 == 3){
			$rationalism += 0;
			$empiricism += 3;
			$idealism += 5;
			$existentialism += 5;
			$pragmatism += 0;
		}
		elseif($collection->q2 == 4){
			$rationalism += 0;
			$empiricism += 1;
			$idealism += 0;
			$existentialism += 0;
			$pragmatism += 5;
		}
		elseif($collection->q2 == 5){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 1;
			$outside += 5;
		}

		// Question 3
		
		if($collection->q3 == 1){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 3;
		}
		elseif($collection->q3 == 2){
			$rationalism += 0;
			$empiricism += 0;
			$idealism += 0;
			$existentialism += 0;
			$pragmatism += 2;
			$outside += 3;
		}
		elseif($collection->q3 == 3){
			$rationalism += 2;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 5;
			$pragmatism += 3;
		}
		elseif($collection->q3 == 4){
			$rationalism += 0;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 5;
			$pragmatism += 0;
		}
		elseif($collection->q3 == 5){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 1;
			$outside += 5;
		}

		// Question 4
		

		if($collection->q4 == 1){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 0;
			$pragmatism += 5;
		}
		elseif($collection->q4 == 2){
			$rationalism += 0;
			$empiricism += 5;
			$idealism += 0;
			$existentialism += 0;
			$pragmatism += 2;
		}
		elseif($collection->q4 == 3){
			$rationalism += 5;
			$empiricism += 0;
			$idealism += 1;
			$existentialism += 5;
			$pragmatism += 3;
		}
		elseif($collection->q4 == 4){
			$rationalism += 0;
			$empiricism += 1;
			$idealism += 3;
			$existentialism += 5;
			$pragmatism += 0;
		}
		elseif($collection->q4 == 5){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 1;
			$outside += 5;
		}

		// Question 5

		

		if($collection->q5 == 1){
			$rationalism += 5;
			$empiricism += 1;
			$idealism += 0;
			$existentialism += 1;
			$pragmatism += 1;
		}
		elseif($collection->q5 == 2){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 5;
		}
		elseif($collection->q5 == 3){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 3;
			$pragmatism += 0;
		}
		elseif($collection->q5 == 4){
			$rationalism += 0;
			$empiricism += 1;
			$idealism += 3;
			$existentialism += 5;
			$pragmatism += 0;
		}
		elseif($collection->q5 == 5){
			$rationalism += 1;
			$empiricism += 1;
			$idealism += 1;
			$existentialism += 1;
			$pragmatism += 1;
			$outside += 5;
		}

		// Evaluate
			// Has bug, if two are equivalent and higher than the rest decides by order

		if($rationalism >= $empiricism && $rationalism >= $idealism && $rationalism >= $existentialism && $rationalism >= $pragmatism && $rationalism >= $outside){
			$selection = "Rationalism";
		}
		elseif($empiricism >= $rationalism && $empiricism >= $idealism && $empiricism >= $existentialism && $empiricism >= $pragmatism && $empiricism >= $outside){
			$selection = "Empiricism";
		}
		elseif($idealism >= $empiricism && $idealism >= $rationalism && $idealism >= $existentialism && $idealism >= $pragmatism && $idealism >= $outside){
			$selection = "Idealism";
		}
		elseif($existentialism >= $empiricism && $existentialism >= $idealism && $existentialism >= $rationalism && $existentialism >= $pragmatism && $existentialism >= $outside){
			$selection = "Existentialism";
		}
		elseif($pragmatism >= $empiricism && $pragmatism >= $idealism && $pragmatism >= $existentialism && $pragmatism >= $rationalism && $pragmatism >= $outside){
			$selection = "Pragmatism";
		}
		elseif($outside >= $empiricism && $outside >= $idealism && $outside >= $existentialism && $outside >= $rationalism && $outside >= $pragmatism){
			$selection = "Outside";
		}


		// Result Display

		
		?><div class="explaination"><div class="explaination-title"><?php
		echo $selection . "<br>";
		?></div><div class="explaination-text"><?php
	if($selection == "Rationalism"){
		echo "In epistemology, rationalism is the view that \"regards reason as the chief source and test of knowledge\" or \"any view appealing to reason as a source of knowledge or justification\". More formally, rationalism is defined as a methodology or a theory \"in which the criterion of the truth is not sensory but intellectual and deductive\". Rationalists believe reality has an intrinsically logical structure. Because of this, rationalists argue that certain truths exist and that the intellect can directly grasp these truths. That is to say, rationalists assert that certain rational principles exist in logic, mathematics, ethics, and metaphysics that are so fundamentally true that denying them causes one to fall into contradiction. Rationalists have such a high confidence in reason that proof and physical evidence are unnecessary to ascertain truth – in other words, \"there are significant ways in which our concepts and knowledge are gained independently of sense experience\". Because of this belief, empiricism is one of rationalism's greatest rivals.";
	}
	elseif($selection == "Empiricism"){
		echo "Empiricism is a theory which states that knowledge comes only or primarily from sensory experience. One of several views of epistemology, the study of human knowledge, along with rationalism and skepticism, empiricism emphasizes the role of experience and evidence, especially sensory experience, in the formation of ideas, over the notion of innate ideas or traditions; empiricists may argue however that traditions (or customs) arise due to relations of previous sense experiences.";
	}
	elseif($selection == "Idealism"){
		echo "Idealism (from root \"Ideal\" / \"idea\") is the group of philosophies which assert that reality, or reality as we can know it, is fundamentally mental, mentally constructed, or otherwise immaterial. Epistemologically, idealism manifests as a skepticism about the possibility of knowing any mind-independent thing. In a sociological sense, idealism emphasizes how human ideas—especially beliefs and values—shape society. As an ontological doctrine, idealism goes further, asserting that all entities are composed of mind or spirit. Idealism thus rejects physicalist and dualist theories that fail to ascribe priority to the mind.";
	}
	elseif($selection == "Existentialism"){
		echo "Existentialists share the belief that philosophical thinking begins with the human subject—not merely the thinking subject, but the acting, feeling, living human individual. In existentialism, the individual's starting point is characterized by what has been called \"the existential attitude\", or a sense of disorientation and confusion in the face of an apparently meaningless or absurd world. Many existentialists have also regarded traditional systematic or academic philosophies, in both style and content, as too abstract and remote from concrete human experience.";
	}
	elseif($selection == "Pragmatism"){
		echo "Pragmatism is a rejection of the idea that the function of thought is to describe, represent, or mirror reality. Instead, pragmatists develop their philosophy around the idea that the function of thought is as an instrument or tool for prediction, action, and problem solving. Pragmatists contend that most philosophical topics—such as the nature of knowledge, language, concepts, meaning, belief, and science—are all best viewed in terms of their practical uses and successes rather than in terms of representative accuracy";
	}
	elseif($selection == "Outside"){
		echo "Your philosophy may lie outside Modern Philosophy. You may want to try exploring Religious Philosophy or Eastern Philosophy to identify with a school a thought.";
	}
		?></div></div><div class="ratings"><div class="ratings-title">Ratings:</div><br>
		<?php
		echo "Rationalism: $rationalism <br> Empiricism: $empiricism <br> Idealism: $idealism <br> Existentialism: $existentialism <br> Pragmatism: $pragmatism <br> Outside: $outside <br>";
		?></div><?php
?>
@stop