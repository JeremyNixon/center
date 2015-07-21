@extends('/blog/blog-base')
@section('body')

<script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>

<h2 class='post_title'>K-Nearest Neighbors Tutorial in Python</h2>
<p>
KNN takes the K-closest samples from a training set uses them to predict a new sample. It’s a non-parametric approach - it doesn’t make assumptions about the structure of the data like linearity or assume a particular probability distribution. 
</p>
<p>
What is distance?
</p>
<p>
The common definition of distance is Euclidean distance - the straight line distance between two standards. 
</p>
$$	\sqrt{\sum_{j=1}^p(x_{aj}-x_{bj})^2} $$
<p>
But there are other ways to measure distance. Manhattan Distance (or city block distance) is also a common metric. 
</p>

$$  {\sum_{j=1}^p|x_{aj}-x_{bj}|} $$

<p>
The generalized distance metric is called Minkowski distance, with q > 0. When q = 1, we get Manhattan Distance. When q = 2, we get Eucledian Distance. There are also several other distance metrics for different contexts, including Tanimoto, Hamming, and cosine.
</p>

$$	({\sum_{j=1}^p|x_{aj}-x_{bj}|^q})^{1/q} $$

Make sure to center and scale your predictors. To center, subtract the average preditor value from all the values. 
This will give the predictor zero mean. To scale the data, divide each value of the predictor by its standard deviation. This gives the values a standard deviation of one and improves the numerical stability of calculations. The upside to scaling is that KNN will weigh variables with the largest scales much more heavily than variables with lower scale. The downside is a loss of interpretability from the original units.

<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">import</span> <span style="color: #f8f8f2">math</span>
<span style="color: #f92672">import</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">np</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">minkowski_distance</span><span style="color: #f8f8f2">(sample1,</span> <span style="color: #f8f8f2">sample2,</span> <span style="color: #f8f8f2">dimensions,</span> <span style="color: #f8f8f2">q</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">):</span>
    <span style="color: #e6db74">&quot;&quot;&quot;</span>
<span style="color: #e6db74">    We will default to Eucledian Distance (q = 2), change q in order to </span>
<span style="color: #e6db74">    adapt to a different distance metric.</span>
<span style="color: #e6db74">    &quot;&quot;&quot;</span>
    
    <span style="color: #f8f8f2">distance</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
    <span style="color: #75715e"># Iterate over each dimension and add the difference to the sum.</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">dimension</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(dimensions):</span>
        <span style="color: #f8f8f2">distance</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">abs(sample1[dimension]</span> <span style="color: #f92672">-</span> <span style="color: #f8f8f2">sample2[dimension])</span><span style="color: #f92672">**</span><span style="color: #f8f8f2">q</span>
    
    <span style="color: #f8f8f2">minkowski_distance</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distance</span><span style="color: #f92672">**</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">1.0</span><span style="color: #f92672">/</span><span style="color: #f8f8f2">q)</span>
    
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">minkowski_distance</span>
</div>

I separated the functions.

<div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">neighbors</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">test_datapoint,</span> <span style="color: #f8f8f2">k,</span> <span style="color: #f8f8f2">q</span><span style="color: #f92672">=</span><span style="color: #ae81ff">2</span><span style="color: #f8f8f2">):</span>
    <span style="color: #75715e"># Calculate the distance from our test datapoint to every training datapoint.</span>
    <span style="color: #f8f8f2">distances</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">datapoint</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
        <span style="color: #f8f8f2">distance</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">minkowski_distance(x_train[datapoint],</span> <span style="color: #f8f8f2">test_datapoint,</span> <span style="color: #f8f8f2">len(test_datapoint)</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span> <span style="color: #f8f8f2">q)</span>
        <span style="color: #f8f8f2">distances</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append((x_train[datapoint],</span> <span style="color: #f8f8f2">distance,</span> <span style="color: #f8f8f2">datapoint))</span>
    
    <span style="color: #75715e"># Sort training datapoints based on distance</span>
    <span style="color: #f8f8f2">distances</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sort(key</span><span style="color: #f92672">=</span><span style="color: #66d9ef">lambda</span> <span style="color: #f8f8f2">x:</span> <span style="color: #f8f8f2">x[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span>
    
    <span style="color: #f8f8f2">neighbors</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">neighbor</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(k):</span>
        <span style="color: #f8f8f2">neighbors</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(distances[neighbor][</span><span style="color: #ae81ff">2</span><span style="color: #f8f8f2">])</span>
        
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">neighbors</span>
</div>

Hi
<div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">outcome</span><span style="color: #f8f8f2">(neighbors,</span> <span style="color: #f8f8f2">y_train):</span>
    <span style="color: #75715e"># Check the classes of the nearest neighbors, and choose the class that is most prevalent</span>
    <span style="color: #f8f8f2">neighbor_classes</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{}</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">neighbor</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(neighbors)):</span>
        <span style="color: #f8f8f2">response</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">y_train[neighbors[neighbor]]</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">item(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span>
        <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">response</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">neighbor_classes:</span>
            <span style="color: #f8f8f2">neighbor_classes[response]</span> <span style="color: #f92672">+=</span> <span style="color: #ae81ff">1</span>
        <span style="color: #66d9ef">else</span><span style="color: #f8f8f2">:</span>
            <span style="color: #f8f8f2">neighbor_classes[response]</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">1</span>
    <span style="color: #f8f8f2">votes</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">sorted(neighbor_classes</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">iteritems(),</span> <span style="color: #f8f8f2">key</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">lambda</span> <span style="color: #f8f8f2">x:</span> <span style="color: #f8f8f2">x[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">votes[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">][</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span>
</div>
Yo
<div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">KNN_Classifier</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">y_train,</span> <span style="color: #f8f8f2">x_test,</span> <span style="color: #f8f8f2">k,</span> <span style="color: #f8f8f2">q</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">):</span> 

    <span style="color: #f8f8f2">x_train</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(x_train)</span>
    <span style="color: #f8f8f2">y_train</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(y_train)</span>
    <span style="color: #f8f8f2">x_test</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(x_test)</span>
    <span style="color: #f8f8f2">predictions</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_test)):</span>
        <span style="color: #f8f8f2">nearest_neighbors</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">neighbors(x_train,</span> <span style="color: #f8f8f2">x_test[i],</span> <span style="color: #f8f8f2">k,</span> <span style="color: #f8f8f2">q)</span>
        <span style="color: #f8f8f2">result</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">outcome(nearest_neighbors,</span> <span style="color: #f8f8f2">y_train)</span>
        <span style="color: #f8f8f2">predictions</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(result)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">predictions</span>
</pre></div>


@stop