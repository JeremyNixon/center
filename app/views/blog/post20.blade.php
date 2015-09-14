@extends('/blog/blog-base')
@section('body')

<h2 class='post_title'>Practical 1: Predicting the Efficiency of Organic Photovoltaics</h2>
<h4 style='text-align: center'> Team Members: Jeremy Nixon, Brandon Sim, Lydia Chen</h4>

<h3 class='pdf_title'>Introduction</h3>

<p>
Original problem spec found <a href='https://drive.google.com/open?id=0B6ZCuzKox7YsMndzQnRTNU1ndlU'>here.</a>
</p>

<p>
	This paper describes our approach to predicting HOMO-LUMO gaps for photovoltaic molecules
using a machine-learning based approach, rather than traditional quantum chemical calculations,
which may be prohibitively expensive to run on a large set of molecules. We consider a variety of
regression techniques, and dive especially deeply into the random forest regressor. We also generate
a variety of additional features to improve the quality of our predictions, and report our results for
various feature sets and classifiers. We obtain a final RMSE of around 6.6%.
</p>

<h3 class='pdf_title'>Linear Regressors</h3>

<p>
We began our approach with a survey of various linear regressors, including various regularization
techniques (L1, L2, L1 and L2). We trained the default feature set using a ridge regression,
a LASSO regression, and a combination of these regularization techniques, the elastic net. We
performed 10-fold cross validation on a variety of alpha values for the ridge regression as well as the
LASSO regression. The results are summarized in the results section. However, because of limited
computational time, we decided to focus on one type of regressor, the random forest regressor, and
did not test linear regressors with any regularization type in depth. In the future, we would like
to consider elastic nets in particular due to their ability to generate sparse solutions (without the
drawbacks of pure LASSO) on the final feature set that we generated.
</p>

<h3 class='pdf_title'>Random Forest Regressor</h3>
<p>
Given the nature of the input data, a regression tree is an attractive method for this particular 
machine learning problem. Regression trees are invariant to transformations of the input data, which
in this case is largely binary with some exceptions in the features we selected later. At each node,
the tree considers a random sample K of the features. The node chooses, out of the K features
under consideration, the feature that minimizes the sum of squared errors in splitting the data into
two more nodes. This process is repeated at each node until each node contains one data point.
The decision tree is resilient to features with poor predictive power because even if all K features
considered at a particular node are useless in predicting the target value, the tree will simply make
a split as described above and the resulting subtrees will (likely) be split on critical predictors as
the tree grows deeper [5]. This allows us to focus on generating and testing groups of dierent types
of features, rather than selecting for or excluding individual features. For most purposes 
\(K = \sqrt{M}\)
where M is the number of features is a computationally efficient and sufficiently large number for
N [5]. </p><p>We performed a cross-validation test and actually found that considering a random sample
of \(\sqrt{M}\) features slightly outperformed the default of considering all M features at each node, both
in runtime and accuracy.
However, a single tree is rarely accurate, since there is the chance that a tree just happens to
consider poor predictors at every node, or that certain predictors overt particular subsets of the
data. To address the problem of overtting we used a random forest, which trains N trees on
samples of the training data and then averages the predictions from each of the N trees, which
decreases the bias that often occurs in one tree. Part of the improvement that comes from using
random forests instead of single regression trees is that each tree is trained on random bootstrapped
samples of the training data, allowing for randomness that will be averaged out over the complete
forest. Our final prediction \(\hat{y}\) can be expressed as the average of the predictions of N regression
trees \(\hat{y}_n\).
</p>

$$ \hat{y} = \frac{1}{N}\sum_{n=0}^{N}\hat{y}_n $$

<p>
As expected, the number of trees N is a particularly important parameter to tune for random
forests. Two few trees can result in high variance and less accuracy on predictions. Too many trees
can signicantly slow down computing. On average, the runtime of a random forest is quasilinear in
the number of trees, O(NM log(N)) [3]. In practice, however, running the forests on larger features
sets showed a more than linear increase in runtime. We tuned this parameter by cross-validating
random forests of varying sizes on the original feature set.

</p>

<p>
Ignoring the slight noise due to randomness, the marginal improvement in predictive power
from adding trees to the random forest 
attens out around 30 trees, although mean absolute error
continues to decrease as the number of trees increases.
</p>

@stop