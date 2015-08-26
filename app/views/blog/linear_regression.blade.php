@extends('/blog/blog-base')
@section('body')

<h2 class='post_title'>Linear Regression Tutorial From Scratch in Python - Closed Form Solution</h2>
<p>
	There's a closed form solution that makes it easy to implement Linear Regression in python. 
</p>
<p>
Let our predictors be represented by matrix X, our training targets by vector y,
 p be the number of predictors. In matrix notation, this solution is:
</p>
$$ \hat{\beta} = (X^TX)^{-1}X^Ty $$
<p>

<p>
	We can instantiate this in Python using a few linear algebra functions from Numpy:
</p>

<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">from</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">import</span> <span style="color: #f8f8f2">array,</span> <span style="color: #f8f8f2">dot,</span> <span style="color: #f8f8f2">transpose</span>
<span style="color: #f92672">from</span> <span style="color: #f8f8f2">numpy.linalg</span> <span style="color: #f92672">import</span> <span style="color: #f8f8f2">inv</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">linear_regression</span><span style="color: #f8f8f2">(points):</span>
    <span style="color: #f8f8f2">X</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">array(points)</span>
    <span style="color: #f8f8f2">X</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">array([[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">+</span> <span style="color: #f8f8f2">list(p[:</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">p</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">X])</span>
    <span style="color: #f8f8f2">y</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">array([p[</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">p</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">X])</span>
    
    <span style="color: #75715e">#print X</span>
    <span style="color: #75715e">#print y</span>
    
    <span style="color: #f8f8f2">Xt</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">transpose(X)</span>
    <span style="color: #f8f8f2">theInverse</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">inv(dot(Xt,</span> <span style="color: #f8f8f2">X))</span>
    <span style="color: #f8f8f2">w</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">dot(dot(theInverse,</span> <span style="color: #f8f8f2">Xt),</span> <span style="color: #f8f8f2">y)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">w,</span> <span style="color: #66d9ef">lambda</span> <span style="color: #f8f8f2">x:</span> <span style="color: #f8f8f2">dot(w,x)</span>
</pre></div>


@stop