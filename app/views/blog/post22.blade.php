
<br>@extends('/blog/blog-base')
<br>@section('body')
<br><h2 class='post_title'>Systematized Predictive Modeling</h2>
I wanted to compile a curated list of modeling techniques that have been helpful to me in the past. This list is meant to be a brainstorming source and to check that the search for techniques to capture relationships in the data has been exhaustive. 
<br><p>
<br>Preprocessing
<br></p></p>
<ol>
<li>Zero mean (subtract the mean from each predictor) to center the data.
</li><li>Divide by standard deviation to scale the data.
</li><li>DateTime
</li><li>One-Hot Code
</li><li>Look For skewness, log/sqrt/Box Cox transform if necessary
</li><li>Resolve Outliers (and understand their meaning) (apply spatial sign if model is sensitive to outliers)
</li><li>Eliminate Missing Data (Can be problematic if missingness is predictive. Tree Based Models can deal with missing data)
</li><li>Imputation/Interpolation (KNN or intermediate regression model)</li>
</ol>
</p></p>
<br>Exploratory Data Analysis
<br></p></p>
<ol>
<li>Correlation Matrix
</li><li>Box-Chart Everything
</li><li>Scatter Every Combination of Features
</li><li>Histogram Everything
</li><li>Transform Variables and Plot
</li><li>Summary (Mean, Mode, Minimum, Maximum, Upper/Lower Quartiles, Identify Outliers)
</ol>
</p></p>
<br>Data Reduction
<br></p></p>
<ol>
</li><li>Principal Component Analysis 
</li><li>Linear Discriminant Analysis (For Classification)
</li><li>Feature Selection (Only use the components that account for a majority of the information when Modeling
</li><li>Remove Low/Zero Variance Predictors
</li><li>Remove multicollinear heavily coorelated features
</li><li>Isomap</li>
</ol>
</p></p>
<br>Algorithms for Regression
<br></p></p>
<ol>
<li>Linear Regression
</li><li>Ridge Regression / Lasso / Elastic Net 
</li><li>Best Subset Selection, Forward and Backward Stepwise and Stagewise
</li><li>Partial Least Squares
</li><li>Principal Components Regression
</li><li>Neural Networks
</li><li>Multivariate Adaptive Regression Splines
</li><li>Support Vector Regressor
</li><li>K-Nearest Neighbors
</li><li>Regression Trees
</li><li>Bagged Trees
</li><li>Random Forests
</li><li>Extremely Random Forests
</li><li>Boosting
</li><li>Cubist
</li><li>Generalized Additive Model</li>
</ol>
<br></p></p>
<br>Evaluating Regression
<br></p></p>
</ol>
<li>RMSE
</li><li>MAE
</li><li>R2
</li><li>Visualization</li>
</ol>
<br></p></p>
<br>Algorithms for Classification
<br></p></p>
<ol>
<li>Logistic Regression (Regularized)
</li><li>Linear Discriminant Analysis
</li><li>Quadratic Discriminant Analysis
</li><li>Nonlinear Discriminant Analysis
</li><li>Flexible Discriminant Analysis
</li><li>Partial Least Squares Discriminant Analysis
</li><li>Neural Networks
</li><li>Support Vector Classifier
</li><li>K-Nearest Neighbors
</li><li>Naive Bayes
</li><li>Classification Trees
</li><li>Bagged Trees
</li><li>Random Forests
</li><li>Extremely Random Forests
</li><li>Bosting
</li><li>C5.0
</li><li>Mixture Models
</li><li>Generalized Additive Model</li>
</ol>
<br></p></p>
<br>Evaluating Classification
<br></p></p>
<ol>
</li><li>ROC Curve
</li><li>Confusion Matrix
</li><li>Heat Map
</li><li>Overall accuracy rate
</li><li>Kappa Statistic
</li><li>Sensitivity
</li><li>Specificity
</li><li>AUC
</ol>
<br></p></p>
<br>Unsupervised Learning
<br></p></p>
<ol>
<li>K-Means
</li><li>K-Means++
</li><li>K-Medoids
</li><li>Hierarchical Agglomerative Clustering
</li><li>Single Linkage, Complete Linkage, Average Linkage, Centroid Criterion
</li><li>Spectral Clustering
</li><li>Affinity Propagation
</li><li>Biclustering
</li><li>Gaussian Mixture Model</li>
</ol>
<br></p></p>
<br>Parameter Tuning
<br></p></p>
<ol>
</li><li>Cross Validation
</li><li>Bootstrap
</li><li>Grid Search
</li><li></p></p>
</li><li>Text Features
</li><li>n-Grams
</li><li>Word Vector Representations (Word 2 Vec)
</li><li>Bag of words
</ol>
<br></p></p>
<br>Modeling Techniques
<br></p></p>
<ol>
<li>Feature Engineering
</li><li>Basis Expansions
</li><li>Stacking
</li><li>Internal Prediction
</li><li>Blending (Especially with differentiated models)
</li><li>Account For Missing Data (It can be information)
</li><li>External Data
</li><li>Acquire Domain Knowledge for Feature Engineering
</li><li>Random Forest Importances for Feature Exploration
</li><li>Clustering for feature creation</li>
</ol>
<br></p></p>
<br>@stop