@extends('/blog/blog-base')
@section('body')

<h2 class='post_title'>Logistic Regression</h2>
<!-- <p>
Regularization allows us to take control of the bias-variance tradeoff. Linear regression finds parameter estimates that have extremely low bias, but often high variance. Ridge regression finds estimates with lower variance.
</p><p>
In our error term, Ridge regression adds a penalty to the sum of squared regression parameter:
</p>
$$ SSE_{L_2} = \sum_{i=1}^n(y_i - \hat{y}_i)^2 + \lambda \sum_{j=1}^p \beta_j^2 $$
<p>
Ridge regression has a closed form solution. This allows us to simply calculate our optimzed parameters. 
</p>
<p>
Let our predictors be represented by matrix X, our training targets by vector y, let I be the identity matrix,
 p be the number of predictors, and lambda control the tradeoff we would like to make between bias and variance. In matrix notation, this solution is:
</p>
$$ \hat{\beta}_{\lambda}^{ridge} = (X^TX + \lambda I_p)^{-1}X^Ty $$
<p>
Let's instantiate this equation in python code. lam is our lambda parameter. 
</p> -->
<!-- HTML generated using hilite.me --><!-- <div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">import</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">np</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">ridge_regression</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">y_train,</span> <span style="color: #f8f8f2">lam):</span>
    
    <span style="color: #f8f8f2">X</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(x_train)</span>
    <span style="color: #f8f8f2">ones</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">ones(len(X))</span>
    <span style="color: #f8f8f2">X</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">column_stack((ones,X))</span>
    <span style="color: #f8f8f2">y</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(y_train)</span>
    
    <span style="color: #f8f8f2">Xt</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">transpose(X)</span>
    <span style="color: #f8f8f2">lambda_identity</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">lam</span><span style="color: #f92672">*</span><span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">identity(len(Xt))</span>
    <span style="color: #f8f8f2">theInverse</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">linalg</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">inv(np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">dot(Xt,</span> <span style="color: #f8f8f2">X)</span><span style="color: #f92672">+</span><span style="color: #f8f8f2">lambda_identity)</span>
    <span style="color: #f8f8f2">w</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">dot(np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">dot(theInverse,</span> <span style="color: #f8f8f2">Xt),</span> <span style="color: #f8f8f2">y)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">w,</span> <span style="color: #66d9ef">lambda</span> <span style="color: #f8f8f2">x:</span> <span style="color: #f8f8f2">dot(w,x)</span>
</pre></div>
 -->
<br><br>
1: Resources:<br>



@stop