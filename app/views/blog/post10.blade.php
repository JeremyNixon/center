@extends('/blog/blog-base')
@section('body')

<h2 class='post_title'>KNN Tutorial in Python</h2>
<p>
KNN takes the K-closest samples from a training set uses them to predict a new sample. It’s a non-parametric approach - it doesn’t make assumptions about the structure of the data like linearity or assume a particular probability distribution. 
</p>
<p>
What is distance?
</p>
<p>
The common definition of distance is Euclidean distance - the straight line distance between two standards. 
</p>
<!-- <MATH>
	\sum_j=1^p
</MATH> -->
<p>
But there are other ways to measure distance. Manhattan Distance (or city block distance) is also a common metric. 
</p>

<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">math</span>
<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">numpy</span> <span style="color: #008800; font-weight: bold">as</span> <span style="color: #0e84b5; font-weight: bold">np</span>
<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">operator</span> 

<span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">eucledian_distance</span>(instance1, instance2, length):
    distance <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>
    <span style="color: #008800; font-weight: bold">for</span> x <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(length):
        distance <span style="color: #333333">+=</span> (instance1[x] <span style="color: #333333">-</span> instance2[x])<span style="color: #333333">**</span><span style="color: #0000DD; font-weight: bold">2</span>
        eucledian_distance <span style="color: #333333">=</span> math<span style="color: #333333">.</span>sqrt(distance)
    <span style="color: #008800; font-weight: bold">return</span> eucledian_distance
</div>


<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">get_neighbors</span>(trainingSet, testInstance, k):
    distances <span style="color: #333333">=</span> []
    length <span style="color: #333333">=</span> <span style="color: #007020">len</span>(testInstance)<span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">1</span>
    <span style="color: #008800; font-weight: bold">for</span> x <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(<span style="color: #007020">len</span>(trainingSet)):
        dist <span style="color: #333333">=</span> eucledian_distance(testInstance, trainingSet[x], length)
        distances<span style="color: #333333">.</span>append((trainingSet[x], dist, x))
    distances<span style="color: #333333">.</span>sort(key<span style="color: #333333">=</span>operator<span style="color: #333333">.</span>itemgetter(<span style="color: #0000DD; font-weight: bold">1</span>))
    neighbors <span style="color: #333333">=</span> []
    <span style="color: #008800; font-weight: bold">for</span> x <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(k):
        neighbors<span style="color: #333333">.</span>append(distances[x][<span style="color: #0000DD; font-weight: bold">2</span>])
    <span style="color: #008800; font-weight: bold">return</span> neighbors
</div>


<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #888888"># Change the get_response function to allow KNN regression</span>
<span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">get_response</span>(neighbors, y_train):
    class_votes <span style="color: #333333">=</span> {}
    <span style="color: #008800; font-weight: bold">for</span> x <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(<span style="color: #007020">len</span>(neighbors)):
        response <span style="color: #333333">=</span> y_train[neighbors[x]]<span style="color: #333333">.</span>item(<span style="color: #0000DD; font-weight: bold">0</span>)
        <span style="color: #008800; font-weight: bold">if</span> response <span style="color: #000000; font-weight: bold">in</span> class_votes:
            class_votes[response] <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">1</span>
        <span style="color: #008800; font-weight: bold">else</span>:
            class_votes[response] <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>
    sorted_votes <span style="color: #333333">=</span> <span style="color: #007020">sorted</span>(class_votes<span style="color: #333333">.</span>iteritems(), key<span style="color: #333333">=</span>operator<span style="color: #333333">.</span>itemgetter(<span style="color: #0000DD; font-weight: bold">1</span>), reverse<span style="color: #333333">=</span><span style="color: #007020">True</span>)
    <span style="color: #008800; font-weight: bold">return</span> sorted_votes[<span style="color: #0000DD; font-weight: bold">0</span>][<span style="color: #0000DD; font-weight: bold">0</span>]
 </div>


<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">   
<span style="color: #008800; font-weight: bold">def</span> <span style="color: #0066BB; font-weight: bold">KNN_Classifier</span>(x_train, y_train, x_test, k):

    x_train <span style="color: #333333">=</span> np<span style="color: #333333">.</span>array(x_train)
    y_train <span style="color: #333333">=</span> np<span style="color: #333333">.</span>array(y_train)
    x_test <span style="color: #333333">=</span> np<span style="color: #333333">.</span>array(x_test)
    predictions <span style="color: #333333">=</span> []
    <span style="color: #008800; font-weight: bold">for</span> i <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(<span style="color: #007020">len</span>(x_test)):
        neighbors <span style="color: #333333">=</span> get_neighbors(x_train, x_test[i], k)
        response <span style="color: #333333">=</span> get_response(neighbors, y_train)
        predictions<span style="color: #333333">.</span>append(response)
    <span style="color: #008800; font-weight: bold">return</span> predictions
</pre></div>

@stop