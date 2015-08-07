
<br>@extends('/blog/blog-base')
<br>@section('body')
<br><h2 class='post_title'>Systematized Predictive Modeling</h2>
<br><p>
<br>Preprocessing
<br></p></p>
<br>Zero mean (subtract the mean from each predictor) to center the data.
<br>Divide by standard deviation to scale the data.
<br>DateTime
<br>One-Hot Code
<br>Look For skewness, log/sqrt/Box Cox transform if necessary
<br>Resolve Outliers (and understand their meaning) (apply spatial sign if model is sensitive to outliers)
<br>Eliminate Missing Data (Can be problematic if missingness is predictive. Tree Based Models can deal with missing data)
<br>Imputation/Interpolation (KNN or intermediate regression model)
<br></p></p>
<br>Exploratory Data Analysis
<br></p></p>
<br>Correlation Matrix
<br>Box-Chart Everything
<br>Scatter Every Combination of Features
<br>Histogram Everything
<br>Transform Variables and Plot
<br>Summary (Mean, Mode, Minimum, Maximum, Upper/Lower Quartiles, Identify Outliers)
<br></p></p>
<br>Data Reduction
<br></p></p>
<br>Principal Component Analysis 
<br>Linear Discriminant Analysis (For Classification)
<br>Feature Selection (Only use the components that account for a majority of the information when Modeling
<br>Remove Low/Zero Variance Predictors
<br>Remove multicollinear heavily coorelated features
<br>Isomap
<br>
<br></p></p>
<br>Algorithms for Regression
<br></p></p>
<br>Linear Regression
<br>Ridge Regression / Lasso / Elastic Net 
<br>Best Subset Selection, Forward and Backward Stepwise and Stagewise
<br>Partial Least Squares
<br>Principal Components Regression
<br>Neural Networks
<br>Multivariate Adaptive Regression Splines
<br>Support Vector Regressor
<br>K-Nearest Neighbors
<br>Regression Trees
<br>Bagged Trees
<br>Random Forests
<br>Extremely Random Forests
<br>Boosting
<br>Cubist
<br>Generalized Additive Model
<br></p></p>
<br>Evaluating Regression
<br></p></p>
<br>RMSE
<br>MAE
<br>R2
<br>Visualization
<br></p></p>
<br>Algorithms for Classification
<br></p></p>
<br>Logistic Regression (Regularized)
<br>Linear Discriminant Analysis
<br>Quadratic Discriminant Analysis
<br>Nonlinear Discriminant Analysis
<br>Flexible Discriminant Analysis
<br>Partial Least Squares Discriminant Analysis
<br>Neural Networks
<br>Support Vector Classifier
<br>K-Nearest Neighbors
<br>Naive Bayes
<br>Classification Trees
<br>Bagged Trees
<br>Random Forests
<br>Extremely Random Forests
<br>Bosting
<br>C5.0
<br>Mixture Models
<br>Generalized Additive Model
<br></p></p>
<br>Evaluating Classification
<br></p></p>
<br>ROC Curve
<br>Confusion Matrix
<br>Heat Map
<br>Overall accuracy rate
<br>Kappa Statistic
<br>Sensitivity
<br>Specificity
<br>AUC
<br></p></p>
<br>Unsupervised Learning
<br></p></p>
<br>K-Means
<br>K-Means++
<br>K-Medoids
<br>Hierarchical Agglomerative Clustering
<br>Single Linkage, Complete Linkage, Average Linkage, Centroid Criterion
<br>Spectral Clustering
<br>Affinity Propagation
<br>Biclustering
<br>Gaussian Mixture Model
<br></p></p>
<br>Parameter Tuning
<br></p></p>
<br>Cross Validation
<br>Bootstrap
<br>Grid Search
<br></p></p>
<br>Text Features
<br>n-Grams
<br>Word Vector Representations (Word 2 Vec)
<br>Bag of words
<br></p></p>
<br>Modeling Techniques
<br></p></p>
<br>Feature Engineering
<br>Basis Expansions
<br>Stacking
<br>Internal Prediction
<br>Blending (Especially with differentiated models)
<br>Account For Missing Data (It can be information)
<br>External Data
<br>Acquire Domain Knowledge for Feature Engineering
<br>Random Forest Importances for Feature Exploration
<br>Clustering for feature creation
<br></p></p>
<br>@stop