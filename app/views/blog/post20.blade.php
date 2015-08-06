



<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Arial,serif;font-size:11.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Arial,serif;font-size:11.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Arial,serif;font-size:9.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Arial,serif;font-size:9.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Arial,serif;font-size:14.4px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:14.4px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_005{font-family:Times,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:Arial,serif;font-size:8.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:Arial,serif;font-size:8.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_010{font-family:Arial,serif;font-size:11.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: line-through}
div.cls_010{font-family:Arial,serif;font-size:11.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:Arial,serif;font-size:11.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
div.cls_011{font-family:Arial,serif;font-size:11.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:Arial,serif;font-size:9.2px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:Arial,serif;font-size:9.2px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_008{font-family:Arial,serif;font-size:6.7px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_008{font-family:Arial,serif;font-size:6.7px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_012{font-family:Arial,serif;font-size:9.2px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: line-through}
div.cls_012{font-family:Arial,serif;font-size:9.2px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_013{font-family:Arial,serif;font-size:6.7px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: line-through}
div.cls_013{font-family:Arial,serif;font-size:6.7px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_009{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background1.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:85.20px;top:127.53px" class="cls_004"><span class="cls_004">Practical 1: Predicting the Efficiency of Organic Photovoltaics</span></div>
<div style="position:absolute;left:192.88px;top:156.57px" class="cls_002"><span class="cls_002">Team Name:</span><span class="cls_005"> 999</span><span class="cls_002"> DRAGON ARMY</span><span class="cls_005"> 999</span></div>
<div style="position:absolute;left:166.30px;top:170.12px" class="cls_002"><span class="cls_002">Team Members: Brandon Sim, Jeremy Nixon, Lydia Chen</span></div>
<div style="position:absolute;left:72.00px;top:211.96px" class="cls_004"><span class="cls_004">Introduction</span></div>
<div style="position:absolute;left:72.00px;top:239.75px" class="cls_002"><span class="cls_002">This paper describes our approach to predicting HOMO-LUMO gaps for photovoltaic molecules</span></div>
<div style="position:absolute;left:72.00px;top:253.30px" class="cls_002"><span class="cls_002">using a machine-learning based approach, rather than traditional quantum chemical calculations,</span></div>
<div style="position:absolute;left:72.00px;top:266.85px" class="cls_002"><span class="cls_002">which may be prohibitively expensive to run on a large set of molecules. We consider a variety of</span></div>
<div style="position:absolute;left:72.00px;top:280.40px" class="cls_002"><span class="cls_002">regression techniques, and dive especially deeply into the random forest regressor. We also generate</span></div>
<div style="position:absolute;left:72.00px;top:293.95px" class="cls_002"><span class="cls_002">a variety of additional features to improve the quality of our predictions, and report our results for</span></div>
<div style="position:absolute;left:72.00px;top:307.50px" class="cls_002"><span class="cls_002">various feature sets and classifiers. We obtain a final RMSE of around 6.6%.</span></div>
<div style="position:absolute;left:72.00px;top:338.43px" class="cls_004"><span class="cls_004">Linear Regressors</span></div>
<div style="position:absolute;left:72.00px;top:366.22px" class="cls_002"><span class="cls_002">We began our approach with a survey of various linear regressors, including various regularization</span></div>
<div style="position:absolute;left:72.00px;top:379.77px" class="cls_002"><span class="cls_002">techniques (L1, L2, L1 and L2).  We trained the default feature set using a ridge regression,</span></div>
<div style="position:absolute;left:72.00px;top:393.32px" class="cls_002"><span class="cls_002">a LASSO regression, and a combination of these regularization techniques, the elastic net.  We</span></div>
<div style="position:absolute;left:72.00px;top:406.87px" class="cls_002"><span class="cls_002">performed 10-fold cross validation on a variety of α values for the ridge regression as well as the</span></div>
<div style="position:absolute;left:72.00px;top:420.42px" class="cls_002"><span class="cls_002">LASSO regression. The results are summarized in the results section. However, because of limited</span></div>
<div style="position:absolute;left:72.00px;top:433.97px" class="cls_002"><span class="cls_002">computational time, we decided to focus on one type of regressor, the random forest regressor, and</span></div>
<div style="position:absolute;left:72.00px;top:447.52px" class="cls_002"><span class="cls_002">did not test linear regressors with any regularization type in depth.  In the future, we would like</span></div>
<div style="position:absolute;left:72.00px;top:461.07px" class="cls_002"><span class="cls_002">to consider elastic nets in particular due to their ability to generate sparse solutions (without the</span></div>
<div style="position:absolute;left:72.00px;top:474.61px" class="cls_002"><span class="cls_002">drawbacks of pure LASSO) on the final feature set that we generated.</span></div>
<div style="position:absolute;left:72.00px;top:505.55px" class="cls_004"><span class="cls_004">Random Forest Regressor</span></div>
<div style="position:absolute;left:72.00px;top:533.34px" class="cls_002"><span class="cls_002">Given the nature of the input data, a regression tree is an attractive method for this particular ma-</span></div>
<div style="position:absolute;left:72.00px;top:546.89px" class="cls_002"><span class="cls_002">chine learning problem. Regression trees are invariant to transformations of the input data, which</span></div>
<div style="position:absolute;left:72.00px;top:560.44px" class="cls_002"><span class="cls_002">in this case is largely binary with some exceptions in the features we selected later. At each node,</span></div>
<div style="position:absolute;left:72.00px;top:573.99px" class="cls_002"><span class="cls_002">the tree considers a random sample K of the features.  The node chooses, out of the K features</span></div>
<div style="position:absolute;left:72.00px;top:587.54px" class="cls_002"><span class="cls_002">under consideration, the feature that minimizes the sum of squared errors in splitting the data into</span></div>
<div style="position:absolute;left:72.00px;top:601.08px" class="cls_002"><span class="cls_002">two more nodes.  This process is repeated at each node until each node contains one data point.</span></div>
<div style="position:absolute;left:72.00px;top:614.63px" class="cls_002"><span class="cls_002">The decision tree is resilient to features with poor predictive power because even if all K features</span></div>
<div style="position:absolute;left:72.00px;top:628.18px" class="cls_002"><span class="cls_002">considered at a particular node are useless in predicting the target value, the tree will simply make</span></div>
<div style="position:absolute;left:72.00px;top:641.73px" class="cls_002"><span class="cls_002">a split as described above and the resulting subtrees will (likely) be split on critical predictors as</span></div>
<div style="position:absolute;left:72.00px;top:655.28px" class="cls_002"><span class="cls_002">the tree grows deeper [5]. This allows us to focus on generating and testing groups of different types</span></div>
<div style="position:absolute;left:519.14px;top:659.59px" class="cls_002"><span class="cls_002">√</span></div>
<div style="position:absolute;left:72.00px;top:668.83px" class="cls_002"><span class="cls_002">of features, rather than selecting for or excluding individual features. For most purposes K =</span></div>
<div style="position:absolute;left:528.23px;top:668.83px" class="cls_002"><span class="cls_002">M</span></div>
<div style="position:absolute;left:72.00px;top:682.38px" class="cls_002"><span class="cls_002">where M is the number of features is a computationally efficient and sufficiently large number for</span></div>
<div style="position:absolute;left:72.00px;top:695.93px" class="cls_002"><span class="cls_002">N [5]. We performed a cross-validation test and actually found that considering a random sample</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">1</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:802px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background2.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:84.29px;top:121.73px" class="cls_002"><span class="cls_002">√</span></div>
<div style="position:absolute;left:72.00px;top:130.96px" class="cls_002"><span class="cls_002">of</span></div>
<div style="position:absolute;left:93.38px;top:130.96px" class="cls_002"><span class="cls_002">M features slightly outperformed the default of considering all M features at each node, both</span></div>
<div style="position:absolute;left:72.00px;top:144.51px" class="cls_002"><span class="cls_002">in runtime and accuracy.</span></div>
<div style="position:absolute;left:72.00px;top:171.61px" class="cls_002"><span class="cls_002">However, a single tree is rarely accurate, since there is the chance that a tree just happens to</span></div>
<div style="position:absolute;left:72.00px;top:185.16px" class="cls_002"><span class="cls_002">consider poor predictors at every node, or that certain predictors overfit particular subsets of the</span></div>
<div style="position:absolute;left:72.00px;top:198.71px" class="cls_002"><span class="cls_002">data.  To address the problem of overfitting we used a random forest, which trains N trees on</span></div>
<div style="position:absolute;left:72.00px;top:212.26px" class="cls_002"><span class="cls_002">samples of the training data and then averages the predictions from each of the N trees, which</span></div>
<div style="position:absolute;left:72.00px;top:225.81px" class="cls_002"><span class="cls_002">decreases the bias that often occurs in one tree. Part of the improvement that comes from using</span></div>
<div style="position:absolute;left:72.00px;top:239.36px" class="cls_002"><span class="cls_002">random forests instead of single regression trees is that each tree is trained on random bootstrapped</span></div>
<div style="position:absolute;left:72.00px;top:252.91px" class="cls_002"><span class="cls_002">samples of the training data, allowing for randomness that will be averaged out over the complete</span></div>
<div style="position:absolute;left:72.00px;top:266.46px" class="cls_002"><span class="cls_002">forest.  Our final prediction ŷ can be expressed as the average of the predictions of N regression</span></div>
<div style="position:absolute;left:72.00px;top:280.00px" class="cls_002"><span class="cls_002">trees ŷ</span><span class="cls_006"><sub>n</sub></span><span class="cls_002">.</span></div>
<div style="position:absolute;left:308.94px;top:292.93px" class="cls_002"><span class="cls_002">∑</span></div>
<div style="position:absolute;left:275.14px;top:295.92px" class="cls_002"><span class="cls_002">ŷ=</span><span class="cls_010"><sup>1</sup></span></div>
<div style="position:absolute;left:327.37px;top:303.30px" class="cls_002"><span class="cls_002">ŷ</span><span class="cls_006">n</span></div>
<div style="position:absolute;left:295.88px;top:310.78px" class="cls_002"><span class="cls_002">N</span></div>
<div style="position:absolute;left:308.84px;top:319.19px" class="cls_006"><span class="cls_006">n=0</span></div>
<div style="position:absolute;left:72.00px;top:332.39px" class="cls_002"><span class="cls_002">As expected, the number of trees N is a particularly important parameter to tune for random</span></div>
<div style="position:absolute;left:72.00px;top:345.94px" class="cls_002"><span class="cls_002">forests. Two few trees can result in high variance and less accuracy on predictions. Too many trees</span></div>
<div style="position:absolute;left:72.00px;top:359.49px" class="cls_002"><span class="cls_002">can significantly slow down computing. On average, the runtime of a random forest is quasilinear in</span></div>
<div style="position:absolute;left:72.00px;top:373.04px" class="cls_002"><span class="cls_002">the number of trees, O(N M log N ) [3]. In practice, however, running the forests on larger features</span></div>
<div style="position:absolute;left:72.00px;top:386.59px" class="cls_002"><span class="cls_002">sets showed a more than linear increase in runtime. We tuned this parameter by cross-validating</span></div>
<div style="position:absolute;left:72.00px;top:400.13px" class="cls_002"><span class="cls_002">random forests of varying sizes on the original feature set. The results can be seen in Figure 1.</span></div>
<div style="position:absolute;left:107.45px;top:676.68px" class="cls_002"><span class="cls_002">Figure 1: Mean absolute error for 256 features with different sizes of random forest</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">2</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:1604px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background3.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:88.94px;top:130.96px" class="cls_002"><span class="cls_002">Ignoring the slight noise due to randomness, the marginal improvement in predictive power</span></div>
<div style="position:absolute;left:72.00px;top:144.51px" class="cls_002"><span class="cls_002">from adding trees to the random forest flattens out around 30 trees, although mean absolute error</span></div>
<div style="position:absolute;left:72.00px;top:158.06px" class="cls_002"><span class="cls_002">continues to decrease as the number of trees increases.</span></div>
<div style="position:absolute;left:72.00px;top:189.00px" class="cls_004"><span class="cls_004">Feature Selection</span></div>
<div style="position:absolute;left:72.00px;top:216.79px" class="cls_002"><span class="cls_002">Using rdkit, we generated several new sets of features, which are summarized in Table 1.</span></div>
<div style="position:absolute;left:77.98px;top:240.75px" class="cls_002"><span class="cls_002">Feature Type</span></div>
<div style="position:absolute;left:203.32px;top:240.75px" class="cls_002"><span class="cls_002">Description</span></div>
<div style="position:absolute;left:442.05px;top:240.75px" class="cls_002"><span class="cls_002">Parameters</span></div>
<div style="position:absolute;left:77.98px;top:254.69px" class="cls_002"><span class="cls_002">Morgan/Circular</span></div>
<div style="position:absolute;left:203.32px;top:254.69px" class="cls_002"><span class="cls_002">Uses the Morgan algorithm to generate a bit</span></div>
<div style="position:absolute;left:442.05px;top:254.69px" class="cls_002"><span class="cls_002">Radius, Number of Bits,</span></div>
<div style="position:absolute;left:77.98px;top:268.24px" class="cls_002"><span class="cls_002">Fingerprint</span></div>
<div style="position:absolute;left:203.32px;top:268.24px" class="cls_002"><span class="cls_002">vector for each atom and its surrounding</span></div>
<div style="position:absolute;left:442.05px;top:268.24px" class="cls_002"><span class="cls_002">Features Invariant</span></div>
<div style="position:absolute;left:203.32px;top:281.79px" class="cls_002"><span class="cls_002">neighborhood (defined by parameter radius)</span></div>
<div style="position:absolute;left:77.98px;top:295.74px" class="cls_002"><span class="cls_002">Topological Fingerprint</span></div>
<div style="position:absolute;left:203.32px;top:295.74px" class="cls_002"><span class="cls_002">Identifies and hashes bond paths to generate a</span></div>
<div style="position:absolute;left:442.05px;top:295.74px" class="cls_002"><span class="cls_002">Number of Bits</span></div>
<div style="position:absolute;left:203.32px;top:309.29px" class="cls_002"><span class="cls_002">bit vector</span></div>
<div style="position:absolute;left:77.98px;top:323.24px" class="cls_002"><span class="cls_002">MACCS Keys</span></div>
<div style="position:absolute;left:203.32px;top:323.24px" class="cls_002"><span class="cls_002">166 pre-identified substructures used to generate</span></div>
<div style="position:absolute;left:442.05px;top:323.24px" class="cls_002"><span class="cls_002">None</span></div>
<div style="position:absolute;left:203.32px;top:336.79px" class="cls_002"><span class="cls_002">a fingerprint</span></div>
<div style="position:absolute;left:77.98px;top:350.73px" class="cls_002"><span class="cls_002">Chemical Properties</span></div>
<div style="position:absolute;left:203.32px;top:350.73px" class="cls_002"><span class="cls_002">Various binary and nonbinary chemical descrip-</span></div>
<div style="position:absolute;left:442.05px;top:350.73px" class="cls_002"><span class="cls_002">Features</span></div>
<div style="position:absolute;left:203.32px;top:364.28px" class="cls_002"><span class="cls_002">tors for molecules</span></div>
<div style="position:absolute;left:151.58px;top:393.25px" class="cls_002"><span class="cls_002">Table 1: Summary of various fingerprints and features generated</span></div>
<div style="position:absolute;left:72.00px;top:434.02px" class="cls_002"><span class="cls_002">General Strategy</span></div>
<div style="position:absolute;left:72.00px;top:454.62px" class="cls_002"><span class="cls_002">Our general strategy with feature selection was to generate a large variety of features, then decide</span></div>
<div style="position:absolute;left:72.00px;top:468.17px" class="cls_002"><span class="cls_002">quantitatively through cross-validation which features would be most useful for inclusion in our</span></div>
<div style="position:absolute;left:72.00px;top:481.72px" class="cls_002"><span class="cls_002">final model.  Below we discuss several classes of features that we generated and considered; our</span></div>
<div style="position:absolute;left:72.00px;top:495.27px" class="cls_002"><span class="cls_002">final submission, as discussed more in depth in our results section, uses a combination of the</span></div>
<div style="position:absolute;left:72.00px;top:508.81px" class="cls_002"><span class="cls_002">Morgan (with and without features) fingerprints and the chemical descriptor features.</span></div>
<div style="position:absolute;left:72.00px;top:537.63px" class="cls_002"><span class="cls_002">Morgan/Circular Fingerprint</span></div>
<div style="position:absolute;left:72.00px;top:558.22px" class="cls_002"><span class="cls_002">The Morgan algorithm generates a bit vector in a given radius around each atom of a molecule.</span></div>
<div style="position:absolute;left:72.00px;top:571.77px" class="cls_002"><span class="cls_002">The generated vectors are then hashed to a vector of a user-specified length.</span></div>
<div style="position:absolute;left:72.00px;top:598.87px" class="cls_011"><span class="cls_011">Radius</span><span class="cls_002">:  The radius parameter defines the size of the atom environment that the algorithm con-</span></div>
<div style="position:absolute;left:72.00px;top:612.42px" class="cls_002"><span class="cls_002">siders when considering each individual atom. A radius of 1, for example, considers the atom and</span></div>
<div style="position:absolute;left:72.00px;top:625.97px" class="cls_002"><span class="cls_002">atoms one chemical bond away. Literature suggests that a radius of 2-3 is standard, and through</span></div>
<div style="position:absolute;left:72.00px;top:639.52px" class="cls_002"><span class="cls_002">our own cross-validation tests we found that radii above 5 did not significantly improve predictive</span></div>
<div style="position:absolute;left:72.00px;top:653.07px" class="cls_002"><span class="cls_002">power.</span></div>
<div style="position:absolute;left:72.00px;top:680.17px" class="cls_011"><span class="cls_011">Number of bits</span><span class="cls_002">:  Since the Morgan algorithm hashes the results of the analysis of each atom to</span></div>
<div style="position:absolute;left:72.00px;top:693.72px" class="cls_002"><span class="cls_002">a bit vector of a specified length, the probability of collision will decrease with a larger number</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">3</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:2406px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background4.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:72.00px;top:130.96px" class="cls_002"><span class="cls_002">of bits, meaning that we will get a more descriptive fingerprint.  We tried vectors of length 256</span></div>
<div style="position:absolute;left:72.00px;top:144.51px" class="cls_002"><span class="cls_002">(as given), 512, and 1024, with cross-validation tests confirming that more bits resulted in better</span></div>
<div style="position:absolute;left:72.00px;top:158.06px" class="cls_002"><span class="cls_002">predictions (albeit with decreasing marginal returns). The limiting factor on tuning this parameter</span></div>
<div style="position:absolute;left:72.00px;top:171.61px" class="cls_002"><span class="cls_002">was computing power.</span></div>
<div style="position:absolute;left:72.00px;top:198.71px" class="cls_011"><span class="cls_011">Feature-invariant versus atom-invariant</span><span class="cls_002">:  A parameter that ended up being key to our predictive</span></div>
<div style="position:absolute;left:72.00px;top:212.26px" class="cls_002"><span class="cls_002">power was toggling the feature-invariant parameter in rdkit. The first runs we did had the feature-</span></div>
<div style="position:absolute;left:72.00px;top:225.81px" class="cls_002"><span class="cls_002">invariant turned on, meaning that the Morgan algorithm looked for pre-defined features based on</span></div>
<div style="position:absolute;left:72.00px;top:239.36px" class="cls_002"><span class="cls_002">chemical standards that have proven, in general, to be useful at differentiating molecules. On the</span></div>
<div style="position:absolute;left:72.00px;top:252.91px" class="cls_002"><span class="cls_002">other hand, the atom-invariant approach looks for different connectivity information for each atom</span></div>
<div style="position:absolute;left:72.00px;top:266.46px" class="cls_002"><span class="cls_002">being considered-number of rings, number of attached hydrogens, etc.</span></div>
<div style="position:absolute;left:72.00px;top:293.55px" class="cls_002"><span class="cls_002">As noted in the rdkit documentation [2], these two approaches (feature-invariant, atom-invariant)</span></div>
<div style="position:absolute;left:72.00px;top:307.10px" class="cls_002"><span class="cls_002">can sometimes lead to very different similarity scores between the same molecules, and we found</span></div>
<div style="position:absolute;left:72.00px;top:320.65px" class="cls_002"><span class="cls_002">that in this case the features that were generated were at least partially orthogonal; in cross-</span></div>
<div style="position:absolute;left:72.00px;top:334.20px" class="cls_002"><span class="cls_002">validation tests we saw a marked improvement by concatenating both sets of features and using</span></div>
<div style="position:absolute;left:72.00px;top:347.75px" class="cls_002"><span class="cls_002">them as our predictors as opposed to either set alone. The results suggest that the HOMO-LUMO</span></div>
<div style="position:absolute;left:72.00px;top:361.30px" class="cls_002"><span class="cls_002">gap is best predicted by some combination of feature and atom invariant features.</span></div>
<div style="position:absolute;left:72.00px;top:390.11px" class="cls_002"><span class="cls_002">Topological Fingerprint</span></div>
<div style="position:absolute;left:72.00px;top:410.71px" class="cls_002"><span class="cls_002">Topological fingerprints identify and hash topological paths to bit vectors.  Therefore, as with</span></div>
<div style="position:absolute;left:72.00px;top:424.26px" class="cls_002"><span class="cls_002">Morgan Fingerprints, longer bit vectors decrease the probability of collision and allow for more</span></div>
<div style="position:absolute;left:72.00px;top:437.81px" class="cls_002"><span class="cls_002">useful fingerprints. The topological features that were identified did not end up outperforming the</span></div>
<div style="position:absolute;left:72.00px;top:451.36px" class="cls_002"><span class="cls_002">Morgan features and also did not seem to add any additional predictive power when concatenated</span></div>
<div style="position:absolute;left:72.00px;top:464.91px" class="cls_002"><span class="cls_002">with the Morgan feature sets.</span></div>
<div style="position:absolute;left:72.00px;top:493.72px" class="cls_002"><span class="cls_002">MACCS Keys</span></div>
<div style="position:absolute;left:72.00px;top:514.31px" class="cls_002"><span class="cls_002">Much like the feature-invariant approach in the Morgan Fingerprint, MACCS Keys uses a set of</span></div>
<div style="position:absolute;left:72.00px;top:527.86px" class="cls_002"><span class="cls_002">166 pre-identified substructures as features [1]. As it turns out, the rdkit documentation notes that</span></div>
<div style="position:absolute;left:72.00px;top:541.41px" class="cls_002"><span class="cls_002">the MACCS Keys and the Morgan feature invariants are based on similar sets of substructures,</span></div>
<div style="position:absolute;left:72.00px;top:554.96px" class="cls_002"><span class="cls_002">and so it is not surprising that MACCS failed to outperform even when concatenated with other</span></div>
<div style="position:absolute;left:72.00px;top:568.51px" class="cls_002"><span class="cls_002">feature sets.</span></div>
<div style="position:absolute;left:72.00px;top:597.33px" class="cls_002"><span class="cls_002">Chemical Properties</span></div>
<div style="position:absolute;left:72.00px;top:617.92px" class="cls_002"><span class="cls_002">We considered a variety of chemical descriptors, which includes properties calculated about a</span></div>
<div style="position:absolute;left:72.00px;top:631.47px" class="cls_002"><span class="cls_002">molecule based on its molecular structure.  Some of these descriptors may have been partially</span></div>
<div style="position:absolute;left:72.00px;top:645.02px" class="cls_002"><span class="cls_002">or completely encoded in hashed form via some of the other fingerprint-based methods that we</span></div>
<div style="position:absolute;left:72.00px;top:658.57px" class="cls_002"><span class="cls_002">tried, and this correlation may have led to some bias; however, overall, we found that the addition</span></div>
<div style="position:absolute;left:72.00px;top:672.12px" class="cls_002"><span class="cls_002">of these chemical descriptor features yielded improvements to our model. The full list of chemical</span></div>
<div style="position:absolute;left:72.00px;top:685.67px" class="cls_002"><span class="cls_002">descriptors we considered is listed in this </span><A HREF="http://www.rdkit.org/docs/GettingStartedInPython.html#list-of-available-descriptors">RDKit documentation link</A>. From this list, we extracted</div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">4</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:3208px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background5.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:72.00px;top:130.96px" class="cls_002"><span class="cls_002">183 features, some of which include molecular weight, number of rings, and various other surface</span></div>
<div style="position:absolute;left:72.00px;top:144.51px" class="cls_002"><span class="cls_002">area-related features, such as approximate van der Waals surface area and topological polar surface</span></div>
<div style="position:absolute;left:72.00px;top:158.06px" class="cls_002"><span class="cls_002">area. A full list of the features we used can be found in the appendix. The types of data in this</span></div>
<div style="position:absolute;left:72.00px;top:171.61px" class="cls_002"><span class="cls_002">feature set, as seen in the appendix, took on a range of values, ranging from binary to integer (such</span></div>
<div style="position:absolute;left:72.00px;top:185.16px" class="cls_002"><span class="cls_002">as number of rings, etc.) to continuous variables (such as molecular mass or VSA).</span></div>
<div style="position:absolute;left:72.00px;top:212.26px" class="cls_002"><span class="cls_002">Because the rest of our data was binary, we performed LASSO regressions in an attempt to perform</span></div>
<div style="position:absolute;left:72.00px;top:225.81px" class="cls_002"><span class="cls_002">feature selection, although we were somewhat confident that our random forest regressor would not</span></div>
<div style="position:absolute;left:72.00px;top:239.36px" class="cls_002"><span class="cls_002">overfit or run into huge problems with a mix of continuous and binary data.  We also performed</span></div>
<div style="position:absolute;left:72.00px;top:252.91px" class="cls_002"><span class="cls_002">this analysis to attempt to see if the most important features as chosen by regularization were</span></div>
<div style="position:absolute;left:72.00px;top:266.46px" class="cls_002"><span class="cls_002">reasonable, as these chemical descriptors were more easily mapped to quantities that could be intu-</span></div>
<div style="position:absolute;left:72.00px;top:280.00px" class="cls_002"><span class="cls_002">itively understood to have some effect on the HOMO-LUMO gap (unlike the fingerprinting results,</span></div>
<div style="position:absolute;left:72.00px;top:293.55px" class="cls_002"><span class="cls_002">where the hash made it difficult to tell which feature was impacting which bit).  We performed</span></div>
<div style="position:absolute;left:72.00px;top:307.10px" class="cls_002"><span class="cls_002">regularization at various α levels, using LASSO due to its shrinkage properties, and found various</span></div>
<div style="position:absolute;left:72.00px;top:320.65px" class="cls_002"><span class="cls_002">subsets of the features which seemed to be most important. Specifically, we found a certain subset</span></div>
<div style="position:absolute;left:72.00px;top:334.20px" class="cls_002"><span class="cls_002">of features to be useful at the α = 0.01 level, which is found in the appendix here. We see that some</span></div>
<div style="position:absolute;left:72.00px;top:347.75px" class="cls_002"><span class="cls_002">of the most indicative features are the various van der Waals surface area calculations, which make</span></div>
<div style="position:absolute;left:72.00px;top:361.30px" class="cls_002"><span class="cls_002">sense intuitively as the size of the surface area in a van der Waals sense help govern the bonding</span></div>
<div style="position:absolute;left:72.00px;top:374.85px" class="cls_002"><span class="cls_002">properties and thus the HOMO-LUMO gap.  However, as we are not chemists, we simply accept</span></div>
<div style="position:absolute;left:72.00px;top:388.40px" class="cls_002"><span class="cls_002">this preliminary eyeball test; in our final run, however, we ended up using all 183 features, as the</span></div>
<div style="position:absolute;left:72.00px;top:401.95px" class="cls_002"><span class="cls_002">random forest regressor seemed to be adequately not overfitting the data, even with extraneous</span></div>
<div style="position:absolute;left:72.00px;top:415.50px" class="cls_002"><span class="cls_002">features (seen in the table below). We include this discussion of features anyway because the selec-</span></div>
<div style="position:absolute;left:72.00px;top:429.05px" class="cls_002"><span class="cls_002">tion of these features as important may lead to some chemical understanding of important features</span></div>
<div style="position:absolute;left:72.00px;top:442.59px" class="cls_002"><span class="cls_002">to look at, or may inspire further generation of other similar features which may prove useful even</span></div>
<div style="position:absolute;left:72.00px;top:456.14px" class="cls_002"><span class="cls_002">in machine learning approaches.</span></div>
<div style="position:absolute;left:130.50px;top:481.10px" class="cls_002"><span class="cls_002">RMSE (100k training)</span></div>
<div style="position:absolute;left:277.15px;top:487.89px" class="cls_002"><span class="cls_002">Number of Trees</span></div>
<div style="position:absolute;left:130.50px;top:494.65px" class="cls_002"><span class="cls_002">(Mean over 5 runs each)</span></div>
<div style="position:absolute;left:130.50px;top:508.60px" class="cls_002"><span class="cls_002">Chem Features</span></div>
<div style="position:absolute;left:277.15px;top:508.60px" class="cls_002"><span class="cls_002">30</span></div>
<div style="position:absolute;left:330.32px;top:508.60px" class="cls_002"><span class="cls_002">40</span></div>
<div style="position:absolute;left:383.49px;top:508.60px" class="cls_002"><span class="cls_002">50</span></div>
<div style="position:absolute;left:436.65px;top:508.60px" class="cls_002"><span class="cls_002">60</span></div>
<div style="position:absolute;left:130.50px;top:522.54px" class="cls_002"><span class="cls_002">None</span></div>
<div style="position:absolute;left:277.15px;top:522.54px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:330.32px;top:522.54px" class="cls_002"><span class="cls_002">0.120441</span></div>
<div style="position:absolute;left:383.49px;top:522.54px" class="cls_002"><span class="cls_002">0.119135</span></div>
<div style="position:absolute;left:436.65px;top:522.54px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:130.50px;top:536.49px" class="cls_002"><span class="cls_002">α = 0 (all)</span></div>
<div style="position:absolute;left:277.15px;top:536.49px" class="cls_002"><span class="cls_002">0.116613</span></div>
<div style="position:absolute;left:330.32px;top:536.49px" class="cls_002"><span class="cls_002">0.115653</span></div>
<div style="position:absolute;left:383.49px;top:536.49px" class="cls_002"><span class="cls_002">0.114607</span></div>
<div style="position:absolute;left:436.65px;top:536.49px" class="cls_002"><span class="cls_002">0.114128</span></div>
<div style="position:absolute;left:130.50px;top:550.44px" class="cls_002"><span class="cls_002">α = 0.001</span></div>
<div style="position:absolute;left:277.15px;top:550.44px" class="cls_002"><span class="cls_002">0.116864</span></div>
<div style="position:absolute;left:330.32px;top:550.44px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:383.49px;top:550.44px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:436.65px;top:550.44px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:130.50px;top:564.39px" class="cls_002"><span class="cls_002">α = 0.01</span></div>
<div style="position:absolute;left:277.15px;top:564.39px" class="cls_002"><span class="cls_002">0.117339</span></div>
<div style="position:absolute;left:330.32px;top:564.39px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:383.49px;top:564.39px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:436.65px;top:564.39px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:130.50px;top:578.34px" class="cls_002"><span class="cls_002">α = 0.1</span></div>
<div style="position:absolute;left:277.15px;top:578.34px" class="cls_002"><span class="cls_002">0.117965</span></div>
<div style="position:absolute;left:330.32px;top:578.34px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:383.49px;top:578.34px" class="cls_002"><span class="cls_002">n/an</span></div>
<div style="position:absolute;left:436.65px;top:578.34px" class="cls_002"><span class="cls_002">n/a</span></div>
<div style="position:absolute;left:79.15px;top:601.33px" class="cls_002"><span class="cls_002">Table 2: RMSE results for various regularization parameters on chemical descriptor feature set</span></div>
<div style="position:absolute;left:72.00px;top:634.39px" class="cls_004"><span class="cls_004">Results</span></div>
<div style="position:absolute;left:72.00px;top:662.18px" class="cls_002"><span class="cls_002">Below we present a comprehensive table which document some (but not all) of the training and</span></div>
<div style="position:absolute;left:72.00px;top:675.73px" class="cls_002"><span class="cls_002">validation that we considered when deciding which paths to pursue during this practical. Of key</span></div>
<div style="position:absolute;left:72.00px;top:689.28px" class="cls_002"><span class="cls_002">importance was the lack of computing power of our team; processing took place on two laptop</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">5</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:4010px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background6.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:72.00px;top:130.96px" class="cls_002"><span class="cls_002">machines throughout the practical (only two of the laptops owned had sufficient RAM to load the</span></div>
<div style="position:absolute;left:72.00px;top:144.51px" class="cls_002"><span class="cls_002">data necessary).  Given this constraint, many entries in the testing matrix below are blank due</span></div>
<div style="position:absolute;left:72.00px;top:158.06px" class="cls_002"><span class="cls_002">to time constraints. Because of theoretical reasons discussed above, we decided to hone in on one</span></div>
<div style="position:absolute;left:72.00px;top:171.61px" class="cls_002"><span class="cls_002">regression model, the random forest regressor, and focus on feature engineering and selection.</span></div>
<div style="position:absolute;left:72.00px;top:198.71px" class="cls_002"><span class="cls_002">Here, we present RMSE results in tabular form:  across we have various feature sets, and verti-</span></div>
<div style="position:absolute;left:72.00px;top:212.26px" class="cls_002"><span class="cls_002">cally we used various types of regressors.  The feature set letters correspond to the following list</span></div>
<div style="position:absolute;left:72.00px;top:225.81px" class="cls_002"><span class="cls_002">(separated for readability):</span></div>
<div style="position:absolute;left:72.38px;top:250.81px" class="cls_002"><span class="cls_002">A: Morgan fingerprints, radius 1, 256-bit, with features</span></div>
<div style="position:absolute;left:72.83px;top:273.16px" class="cls_002"><span class="cls_002">B: Topological fingerprinting, 1024 bits</span></div>
<div style="position:absolute;left:72.68px;top:295.50px" class="cls_002"><span class="cls_002">C: Morgan fingerprints, radius 2, 512-bit, with features</span></div>
<div style="position:absolute;left:72.23px;top:317.85px" class="cls_002"><span class="cls_002">D: Morgan fingerprints, radius 3, 512-bit, with features</span></div>
<div style="position:absolute;left:73.14px;top:340.20px" class="cls_002"><span class="cls_002">E: Morgan fingerprints, radius 3, 1024-bit, with features</span></div>
<div style="position:absolute;left:73.44px;top:362.55px" class="cls_002"><span class="cls_002">F: Morgan fingerprints, radius 3, 512-bit, no features</span></div>
<div style="position:absolute;left:72.00px;top:384.89px" class="cls_002"><span class="cls_002">G: Combination: Morgan fingerprints, radius 3, 512-bit, features and no features</span></div>
<div style="position:absolute;left:72.38px;top:407.24px" class="cls_002"><span class="cls_002">H: Combination:  Morgan fingerprints, radius 3, 512-bit, features and no features; and</span></div>
<div style="position:absolute;left:499.09px;top:407.24px" class="cls_002"><span class="cls_002">chemical</span></div>
<div style="position:absolute;left:89.04px;top:420.79px" class="cls_002"><span class="cls_002">features</span></div>
<div style="position:absolute;left:125.81px;top:455.08px" class="cls_007"><span class="cls_007">Results</span></div>
<div style="position:absolute;left:335.10px;top:455.08px" class="cls_007"><span class="cls_007">Feature Set (across)</span></div>
<div style="position:absolute;left:77.00px;top:466.74px" class="cls_007"><span class="cls_007">Method (down)</span></div>
<div style="position:absolute;left:218.38px;top:466.74px" class="cls_007"><span class="cls_007">A</span></div>
<div style="position:absolute;left:258.26px;top:466.74px" class="cls_007"><span class="cls_007">B</span></div>
<div style="position:absolute;left:298.14px;top:466.74px" class="cls_007"><span class="cls_007">C</span></div>
<div style="position:absolute;left:338.01px;top:466.74px" class="cls_007"><span class="cls_007">D</span></div>
<div style="position:absolute;left:377.89px;top:466.74px" class="cls_007"><span class="cls_007">E</span></div>
<div style="position:absolute;left:417.77px;top:466.74px" class="cls_007"><span class="cls_007">F</span></div>
<div style="position:absolute;left:457.65px;top:466.74px" class="cls_007"><span class="cls_007">G</span></div>
<div style="position:absolute;left:497.53px;top:466.74px" class="cls_007"><span class="cls_007">H</span></div>
<div style="position:absolute;left:77.00px;top:478.39px" class="cls_007"><span class="cls_007">Mean</span></div>
<div style="position:absolute;left:218.38px;top:478.39px" class="cls_007"><span class="cls_007">0.40682</span></div>
<div style="position:absolute;left:77.00px;top:490.05px" class="cls_007"><span class="cls_007">OLS Regression</span></div>
<div style="position:absolute;left:218.38px;top:490.05px" class="cls_007"><span class="cls_007">0.29845</span></div>
<div style="position:absolute;left:77.00px;top:501.71px" class="cls_007"><span class="cls_007">SGD Regression (out of the box)</span></div>
<div style="position:absolute;left:218.38px;top:501.71px" class="cls_007"><span class="cls_007">0.29857</span></div>
<div style="position:absolute;left:77.00px;top:513.37px" class="cls_007"><span class="cls_007">SGD Elastic Net (L1+L2)</span></div>
<div style="position:absolute;left:218.38px;top:513.37px" class="cls_007"><span class="cls_007">0.29863</span></div>
<div style="position:absolute;left:77.00px;top:525.02px" class="cls_007"><span class="cls_007">Support Vector Regression</span></div>
<div style="position:absolute;left:218.38px;top:525.02px" class="cls_007"><span class="cls_007">0.29728</span></div>
<div style="position:absolute;left:77.00px;top:536.68px" class="cls_007"><span class="cls_007">Random Forest Regression</span></div>
<div style="position:absolute;left:77.00px;top:548.01px" class="cls_007"><span class="cls_007">(K = n</span><span class="cls_008"><sub>features</sub></span><span class="cls_007">),</span></div>
<div style="position:absolute;left:218.38px;top:548.02px" class="cls_007"><span class="cls_007">0.27213</span></div>
<div style="position:absolute;left:77.00px;top:559.33px" class="cls_007"><span class="cls_007">30 trees</span></div>
<div style="position:absolute;left:77.00px;top:570.99px" class="cls_007"><span class="cls_007">Random Forest Regression</span></div>
<div style="position:absolute;left:77.00px;top:576.49px" class="cls_007"><span class="cls_007">(K =√</span><span class="cls_012">n</span><span class="cls_013"><sub>features</sub></span><span class="cls_007">),</span></div>
<div style="position:absolute;left:218.38px;top:582.33px" class="cls_007"><span class="cls_007">0.27205</span></div>
<div style="position:absolute;left:258.26px;top:582.33px" class="cls_007"><span class="cls_007">0.13009</span></div>
<div style="position:absolute;left:298.14px;top:582.33px" class="cls_007"><span class="cls_007">0.11343</span></div>
<div style="position:absolute;left:338.01px;top:582.33px" class="cls_007"><span class="cls_007">0.10152</span></div>
<div style="position:absolute;left:377.89px;top:582.33px" class="cls_007"><span class="cls_007">0.09896</span></div>
<div style="position:absolute;left:417.77px;top:582.33px" class="cls_007"><span class="cls_007">0.08201</span></div>
<div style="position:absolute;left:457.65px;top:582.33px" class="cls_007"><span class="cls_007">0.07056</span></div>
<div style="position:absolute;left:497.53px;top:582.33px" class="cls_007"><span class="cls_007">0.06765</span></div>
<div style="position:absolute;left:77.00px;top:593.64px" class="cls_007"><span class="cls_007">30 trees</span></div>
<div style="position:absolute;left:77.00px;top:605.30px" class="cls_007"><span class="cls_007">Random Forest Regression</span></div>
<div style="position:absolute;left:77.00px;top:610.80px" class="cls_007"><span class="cls_007">(K =√</span><span class="cls_012">n</span><span class="cls_013"><sub>features</sub></span><span class="cls_007">),</span></div>
<div style="position:absolute;left:497.53px;top:616.64px" class="cls_007"><span class="cls_007">0.06566*</span></div>
<div style="position:absolute;left:77.00px;top:627.94px" class="cls_007"><span class="cls_007">60 trees</span></div>
<div style="position:absolute;left:72.00px;top:654.39px" class="cls_002"><span class="cls_002">Table 3: Matrix of RMSE results for various feature sets and regressors; (*) is the final submission</span></div>
<div style="position:absolute;left:88.94px;top:682.46px" class="cls_002"><span class="cls_002">As can be seen in the above table, we tried various regressors, but decided to focus on the</span></div>
<div style="position:absolute;left:72.00px;top:696.00px" class="cls_002"><span class="cls_002">random forest regressor and tuning parameters for that regressor due to limited computational</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">6</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:4812px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background7.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:72.00px;top:130.96px" class="cls_002"><span class="cls_002">power and due to the attractive features of the random forest as discussed in the body of the</span></div>
<div style="position:absolute;left:72.00px;top:144.51px" class="cls_002"><span class="cls_002">paper. Through feature selection improvements, we make gains and eventually come to an RMSE</span></div>
<div style="position:absolute;left:72.00px;top:158.06px" class="cls_002"><span class="cls_002">of around 6.6%. This result held up in the test set, lending credence to our belief about random</span></div>
<div style="position:absolute;left:72.00px;top:171.61px" class="cls_002"><span class="cls_002">forests being resilient to overfitting.</span></div>
<div style="position:absolute;left:72.00px;top:202.55px" class="cls_004"><span class="cls_004">References</span></div>
<div style="position:absolute;left:72.00px;top:230.34px" class="cls_002"><span class="cls_002">[1] Dalke, Andrew. MACCS key 44. Scientific AB, 2013.</span></div>
<div style="position:absolute;left:72.00px;top:252.85px" class="cls_002"><span class="cls_002">[2] Landrum, Greg. The RDKit Documentation. 2014.</span></div>
<div style="position:absolute;left:72.00px;top:275.37px" class="cls_002"><span class="cls_002">[3] Loupe, Gilles. Understanding Random Forest:  From Theory to Practice. University of Liege,</span></div>
<div style="position:absolute;left:83.51px;top:288.92px" class="cls_002"><span class="cls_002">2014.</span></div>
<div style="position:absolute;left:72.00px;top:311.43px" class="cls_002"><span class="cls_002">[4] Pedregosa, Fabian, et al. Scikit-learn: Machine Learning in Python. JMLR 12 pp. 2825-2830,</span></div>
<div style="position:absolute;left:83.51px;top:324.98px" class="cls_002"><span class="cls_002">2011.</span></div>
<div style="position:absolute;left:72.00px;top:347.50px" class="cls_002"><span class="cls_002">[5] Steinberg, Dan, Mikhail Golovnya, and N. Scott Cardell. A Brief Overview to Random Forests.</span></div>
<div style="position:absolute;left:83.51px;top:361.05px" class="cls_002"><span class="cls_002">Salford Systems, 2004.</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">7</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:5614px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background8.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:72.00px;top:127.53px" class="cls_004"><span class="cls_004">Appendix</span></div>
<div style="position:absolute;left:76.39px;top:167.37px" class="cls_009"><span class="cls_009">BalabanJ</span></div>
<div style="position:absolute;left:178.46px;top:167.37px" class="cls_009"><span class="cls_009">NumAromaticHeterocycles</span></div>
<div style="position:absolute;left:282.55px;top:167.37px" class="cls_009"><span class="cls_009">SlogP VSA5</span></div>
<div style="position:absolute;left:356.11px;top:167.37px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:167.37px" class="cls_009"><span class="cls_009">alkyl halide</span></div>
<div style="position:absolute;left:445.49px;top:167.37px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:167.37px" class="cls_009"><span class="cls_009">phenol noOrthoHbond</span></div>
<div style="position:absolute;left:76.39px;top:177.32px" class="cls_009"><span class="cls_009">BertzCT</span></div>
<div style="position:absolute;left:178.46px;top:177.32px" class="cls_009"><span class="cls_009">NumAromaticRings</span></div>
<div style="position:absolute;left:282.56px;top:177.32px" class="cls_009"><span class="cls_009">SlogP VSA6</span></div>
<div style="position:absolute;left:356.11px;top:177.32px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:177.32px" class="cls_009"><span class="cls_009">allylic oxid</span></div>
<div style="position:absolute;left:445.49px;top:177.32px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:177.32px" class="cls_009"><span class="cls_009">phos acid</span></div>
<div style="position:absolute;left:76.39px;top:187.27px" class="cls_009"><span class="cls_009">Chi0</span></div>
<div style="position:absolute;left:178.46px;top:187.27px" class="cls_009"><span class="cls_009">NumHAcceptors</span></div>
<div style="position:absolute;left:282.56px;top:187.27px" class="cls_009"><span class="cls_009">SlogP VSA7</span></div>
<div style="position:absolute;left:356.11px;top:187.27px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:187.27px" class="cls_009"><span class="cls_009">amide</span></div>
<div style="position:absolute;left:445.49px;top:187.27px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:187.27px" class="cls_009"><span class="cls_009">phos ester</span></div>
<div style="position:absolute;left:76.39px;top:197.21px" class="cls_009"><span class="cls_009">Chi0n</span></div>
<div style="position:absolute;left:178.46px;top:197.21px" class="cls_009"><span class="cls_009">NumHDonors</span></div>
<div style="position:absolute;left:282.55px;top:197.21px" class="cls_009"><span class="cls_009">SlogP VSA8</span></div>
<div style="position:absolute;left:356.11px;top:197.21px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:197.21px" class="cls_009"><span class="cls_009">amidine</span></div>
<div style="position:absolute;left:445.50px;top:197.21px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:197.21px" class="cls_009"><span class="cls_009">piperdine</span></div>
<div style="position:absolute;left:76.39px;top:207.16px" class="cls_009"><span class="cls_009">Chi0v</span></div>
<div style="position:absolute;left:178.46px;top:207.16px" class="cls_009"><span class="cls_009">NumHeteroatoms</span></div>
<div style="position:absolute;left:282.56px;top:207.16px" class="cls_009"><span class="cls_009">SlogP VSA9</span></div>
<div style="position:absolute;left:356.11px;top:207.16px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:207.16px" class="cls_009"><span class="cls_009">aniline</span></div>
<div style="position:absolute;left:445.49px;top:207.16px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:207.16px" class="cls_009"><span class="cls_009">piperzine</span></div>
<div style="position:absolute;left:76.39px;top:217.11px" class="cls_009"><span class="cls_009">Chi1</span></div>
<div style="position:absolute;left:178.46px;top:217.11px" class="cls_009"><span class="cls_009">NumRotatableBonds</span></div>
<div style="position:absolute;left:282.56px;top:217.11px" class="cls_009"><span class="cls_009">TPSA</span></div>
<div style="position:absolute;left:356.11px;top:217.11px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:217.11px" class="cls_009"><span class="cls_009">aryl methyl</span></div>
<div style="position:absolute;left:445.49px;top:217.11px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:217.11px" class="cls_009"><span class="cls_009">priamide</span></div>
<div style="position:absolute;left:76.39px;top:227.06px" class="cls_009"><span class="cls_009">Chi1n</span></div>
<div style="position:absolute;left:178.46px;top:227.06px" class="cls_009"><span class="cls_009">NumSaturatedCarbocycles</span></div>
<div style="position:absolute;left:282.56px;top:227.06px" class="cls_009"><span class="cls_009">VSA EState1</span></div>
<div style="position:absolute;left:356.11px;top:227.06px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:227.06px" class="cls_009"><span class="cls_009">azide</span></div>
<div style="position:absolute;left:445.49px;top:227.06px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:227.06px" class="cls_009"><span class="cls_009">prisulfonamd</span></div>
<div style="position:absolute;left:76.39px;top:237.01px" class="cls_009"><span class="cls_009">Chi1v</span></div>
<div style="position:absolute;left:178.46px;top:237.01px" class="cls_009"><span class="cls_009">NumSaturatedHeterocycles</span></div>
<div style="position:absolute;left:282.55px;top:237.01px" class="cls_009"><span class="cls_009">VSA EState10</span></div>
<div style="position:absolute;left:356.11px;top:237.01px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:237.01px" class="cls_009"><span class="cls_009">azo</span></div>
<div style="position:absolute;left:445.49px;top:237.01px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:237.01px" class="cls_009"><span class="cls_009">pyridine</span></div>
<div style="position:absolute;left:76.39px;top:246.96px" class="cls_009"><span class="cls_009">Chi2n</span></div>
<div style="position:absolute;left:178.46px;top:246.96px" class="cls_009"><span class="cls_009">NumSaturatedRings</span></div>
<div style="position:absolute;left:282.55px;top:246.96px" class="cls_009"><span class="cls_009">VSA EState2</span></div>
<div style="position:absolute;left:356.11px;top:246.96px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:246.96px" class="cls_009"><span class="cls_009">barbitur</span></div>
<div style="position:absolute;left:445.49px;top:246.96px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:246.96px" class="cls_009"><span class="cls_009">quatN</span></div>
<div style="position:absolute;left:76.39px;top:256.91px" class="cls_009"><span class="cls_009">Chi2v</span></div>
<div style="position:absolute;left:178.46px;top:256.91px" class="cls_009"><span class="cls_009">PEOE VSA1</span></div>
<div style="position:absolute;left:282.56px;top:256.91px" class="cls_009"><span class="cls_009">VSA EState3</span></div>
<div style="position:absolute;left:356.11px;top:256.91px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:256.91px" class="cls_009"><span class="cls_009">benzene</span></div>
<div style="position:absolute;left:445.49px;top:256.91px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:256.91px" class="cls_009"><span class="cls_009">sulfide</span></div>
<div style="position:absolute;left:76.39px;top:266.85px" class="cls_009"><span class="cls_009">Chi3n</span></div>
<div style="position:absolute;left:178.46px;top:266.85px" class="cls_009"><span class="cls_009">PEOE VSA10</span></div>
<div style="position:absolute;left:282.56px;top:266.85px" class="cls_009"><span class="cls_009">VSA EState4</span></div>
<div style="position:absolute;left:356.11px;top:266.85px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:266.85px" class="cls_009"><span class="cls_009">benzodiazepine</span></div>
<div style="position:absolute;left:445.49px;top:266.85px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:266.85px" class="cls_009"><span class="cls_009">sulfonamd</span></div>
<div style="position:absolute;left:76.39px;top:276.80px" class="cls_009"><span class="cls_009">Chi3v</span></div>
<div style="position:absolute;left:178.46px;top:276.80px" class="cls_009"><span class="cls_009">PEOE VSA11</span></div>
<div style="position:absolute;left:282.56px;top:276.80px" class="cls_009"><span class="cls_009">VSA EState5</span></div>
<div style="position:absolute;left:356.11px;top:276.80px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:276.80px" class="cls_009"><span class="cls_009">bicyclic</span></div>
<div style="position:absolute;left:445.49px;top:276.80px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:276.80px" class="cls_009"><span class="cls_009">sulfone</span></div>
<div style="position:absolute;left:76.39px;top:286.75px" class="cls_009"><span class="cls_009">Chi4n</span></div>
<div style="position:absolute;left:178.46px;top:286.75px" class="cls_009"><span class="cls_009">PEOE VSA12</span></div>
<div style="position:absolute;left:282.56px;top:286.75px" class="cls_009"><span class="cls_009">VSA EState6</span></div>
<div style="position:absolute;left:356.11px;top:286.75px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:286.75px" class="cls_009"><span class="cls_009">diazo</span></div>
<div style="position:absolute;left:445.49px;top:286.75px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:286.75px" class="cls_009"><span class="cls_009">term acetylene</span></div>
<div style="position:absolute;left:76.39px;top:296.70px" class="cls_009"><span class="cls_009">Chi4v</span></div>
<div style="position:absolute;left:178.46px;top:296.70px" class="cls_009"><span class="cls_009">PEOE VSA13</span></div>
<div style="position:absolute;left:282.56px;top:296.70px" class="cls_009"><span class="cls_009">VSA EState7</span></div>
<div style="position:absolute;left:356.11px;top:296.70px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:296.70px" class="cls_009"><span class="cls_009">dihydropyridine</span></div>
<div style="position:absolute;left:445.49px;top:296.70px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:296.70px" class="cls_009"><span class="cls_009">tetrazole</span></div>
<div style="position:absolute;left:76.39px;top:306.65px" class="cls_009"><span class="cls_009">EState VSA1</span></div>
<div style="position:absolute;left:178.46px;top:306.65px" class="cls_009"><span class="cls_009">PEOE VSA14</span></div>
<div style="position:absolute;left:282.56px;top:306.65px" class="cls_009"><span class="cls_009">VSA EState8</span></div>
<div style="position:absolute;left:356.11px;top:306.65px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:306.65px" class="cls_009"><span class="cls_009">epoxide</span></div>
<div style="position:absolute;left:445.49px;top:306.65px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:306.65px" class="cls_009"><span class="cls_009">thiazole</span></div>
<div style="position:absolute;left:76.39px;top:316.60px" class="cls_009"><span class="cls_009">EState VSA10</span></div>
<div style="position:absolute;left:178.46px;top:316.60px" class="cls_009"><span class="cls_009">PEOE VSA2</span></div>
<div style="position:absolute;left:282.56px;top:316.60px" class="cls_009"><span class="cls_009">VSA EState9</span></div>
<div style="position:absolute;left:356.11px;top:316.60px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:316.60px" class="cls_009"><span class="cls_009">ester</span></div>
<div style="position:absolute;left:445.49px;top:316.60px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:316.60px" class="cls_009"><span class="cls_009">thiocyan</span></div>
<div style="position:absolute;left:76.39px;top:326.54px" class="cls_009"><span class="cls_009">EState VSA11</span></div>
<div style="position:absolute;left:178.46px;top:326.54px" class="cls_009"><span class="cls_009">PEOE VSA3</span></div>
<div style="position:absolute;left:282.56px;top:326.54px" class="cls_009"><span class="cls_009">fr Al COO</span></div>
<div style="position:absolute;left:356.11px;top:326.54px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:326.54px" class="cls_009"><span class="cls_009">ether</span></div>
<div style="position:absolute;left:445.49px;top:326.54px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:326.54px" class="cls_009"><span class="cls_009">thiophene</span></div>
<div style="position:absolute;left:76.39px;top:336.49px" class="cls_009"><span class="cls_009">EState VSA2</span></div>
<div style="position:absolute;left:178.46px;top:336.49px" class="cls_009"><span class="cls_009">PEOE VSA4</span></div>
<div style="position:absolute;left:282.56px;top:336.49px" class="cls_009"><span class="cls_009">fr Al OH</span></div>
<div style="position:absolute;left:356.11px;top:336.49px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:336.49px" class="cls_009"><span class="cls_009">furan</span></div>
<div style="position:absolute;left:445.50px;top:336.49px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:336.49px" class="cls_009"><span class="cls_009">unbrch alkane</span></div>
<div style="position:absolute;left:76.39px;top:346.44px" class="cls_009"><span class="cls_009">EState VSA3</span></div>
<div style="position:absolute;left:178.46px;top:346.44px" class="cls_009"><span class="cls_009">PEOE VSA5</span></div>
<div style="position:absolute;left:282.56px;top:346.44px" class="cls_009"><span class="cls_009">fr Al OH noTert</span></div>
<div style="position:absolute;left:356.11px;top:346.44px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:346.44px" class="cls_009"><span class="cls_009">guanido</span></div>
<div style="position:absolute;left:445.49px;top:346.44px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:453.96px;top:346.44px" class="cls_009"><span class="cls_009">urea</span></div>
<div style="position:absolute;left:76.39px;top:356.39px" class="cls_009"><span class="cls_009">EState VSA4</span></div>
<div style="position:absolute;left:178.46px;top:356.39px" class="cls_009"><span class="cls_009">PEOE VSA6</span></div>
<div style="position:absolute;left:282.56px;top:356.39px" class="cls_009"><span class="cls_009">fr ArN</span></div>
<div style="position:absolute;left:356.11px;top:356.39px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:356.39px" class="cls_009"><span class="cls_009">halogen</span></div>
<div style="position:absolute;left:76.39px;top:366.34px" class="cls_009"><span class="cls_009">EState VSA5</span></div>
<div style="position:absolute;left:178.46px;top:366.34px" class="cls_009"><span class="cls_009">PEOE VSA7</span></div>
<div style="position:absolute;left:282.56px;top:366.34px" class="cls_009"><span class="cls_009">fr Ar COO</span></div>
<div style="position:absolute;left:356.11px;top:366.34px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:366.34px" class="cls_009"><span class="cls_009">hdrzine</span></div>
<div style="position:absolute;left:76.39px;top:376.29px" class="cls_009"><span class="cls_009">EState VSA6</span></div>
<div style="position:absolute;left:178.46px;top:376.29px" class="cls_009"><span class="cls_009">PEOE VSA8</span></div>
<div style="position:absolute;left:282.56px;top:376.29px" class="cls_009"><span class="cls_009">fr Ar N</span></div>
<div style="position:absolute;left:356.11px;top:376.29px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:376.29px" class="cls_009"><span class="cls_009">hdrzone</span></div>
<div style="position:absolute;left:76.39px;top:386.23px" class="cls_009"><span class="cls_009">EState VSA7</span></div>
<div style="position:absolute;left:178.46px;top:386.23px" class="cls_009"><span class="cls_009">PEOE VSA9</span></div>
<div style="position:absolute;left:282.56px;top:386.23px" class="cls_009"><span class="cls_009">fr Ar NH</span></div>
<div style="position:absolute;left:356.11px;top:386.23px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:386.23px" class="cls_009"><span class="cls_009">imidazole</span></div>
<div style="position:absolute;left:76.39px;top:396.18px" class="cls_009"><span class="cls_009">EState VSA8</span></div>
<div style="position:absolute;left:178.46px;top:396.18px" class="cls_009"><span class="cls_009">RingCount</span></div>
<div style="position:absolute;left:282.55px;top:396.18px" class="cls_009"><span class="cls_009">fr Ar OH</span></div>
<div style="position:absolute;left:356.11px;top:396.18px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:396.18px" class="cls_009"><span class="cls_009">imide</span></div>
<div style="position:absolute;left:76.39px;top:406.13px" class="cls_009"><span class="cls_009">EState VSA9</span></div>
<div style="position:absolute;left:178.46px;top:406.13px" class="cls_009"><span class="cls_009">SMR VSA1</span></div>
<div style="position:absolute;left:282.56px;top:406.13px" class="cls_009"><span class="cls_009">fr COO</span></div>
<div style="position:absolute;left:356.11px;top:406.13px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:406.13px" class="cls_009"><span class="cls_009">isocyan</span></div>
<div style="position:absolute;left:76.39px;top:416.08px" class="cls_009"><span class="cls_009">FractionCSP3</span></div>
<div style="position:absolute;left:178.46px;top:416.08px" class="cls_009"><span class="cls_009">SMR VSA10</span></div>
<div style="position:absolute;left:282.56px;top:416.08px" class="cls_009"><span class="cls_009">fr COO2</span></div>
<div style="position:absolute;left:356.11px;top:416.08px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:416.08px" class="cls_009"><span class="cls_009">isothiocyan</span></div>
<div style="position:absolute;left:76.39px;top:426.03px" class="cls_009"><span class="cls_009">HallKierAlpha</span></div>
<div style="position:absolute;left:178.46px;top:426.03px" class="cls_009"><span class="cls_009">SMR VSA2</span></div>
<div style="position:absolute;left:282.56px;top:426.03px" class="cls_009"><span class="cls_009">fr C O</span></div>
<div style="position:absolute;left:356.11px;top:426.03px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:426.03px" class="cls_009"><span class="cls_009">ketone</span></div>
<div style="position:absolute;left:76.39px;top:435.98px" class="cls_009"><span class="cls_009">HeavyAtomCount</span></div>
<div style="position:absolute;left:178.46px;top:435.98px" class="cls_009"><span class="cls_009">SMR VSA3</span></div>
<div style="position:absolute;left:282.56px;top:435.98px" class="cls_009"><span class="cls_009">fr C O noCOO</span></div>
<div style="position:absolute;left:356.11px;top:435.98px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:435.98px" class="cls_009"><span class="cls_009">ketone Topliss</span></div>
<div style="position:absolute;left:76.39px;top:445.92px" class="cls_009"><span class="cls_009">Ipc</span></div>
<div style="position:absolute;left:178.46px;top:445.92px" class="cls_009"><span class="cls_009">SMR VSA4</span></div>
<div style="position:absolute;left:282.56px;top:445.92px" class="cls_009"><span class="cls_009">fr C S</span></div>
<div style="position:absolute;left:356.10px;top:445.92px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:445.92px" class="cls_009"><span class="cls_009">lactam</span></div>
<div style="position:absolute;left:76.39px;top:455.87px" class="cls_009"><span class="cls_009">Kappa1</span></div>
<div style="position:absolute;left:178.46px;top:455.87px" class="cls_009"><span class="cls_009">SMR VSA5</span></div>
<div style="position:absolute;left:282.56px;top:455.87px" class="cls_009"><span class="cls_009">fr HOCCN</span></div>
<div style="position:absolute;left:356.11px;top:455.87px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:455.87px" class="cls_009"><span class="cls_009">lactone</span></div>
<div style="position:absolute;left:76.39px;top:465.82px" class="cls_009"><span class="cls_009">Kappa2</span></div>
<div style="position:absolute;left:178.46px;top:465.82px" class="cls_009"><span class="cls_009">SMR VSA6</span></div>
<div style="position:absolute;left:282.56px;top:465.82px" class="cls_009"><span class="cls_009">fr Imine</span></div>
<div style="position:absolute;left:356.11px;top:465.82px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:465.82px" class="cls_009"><span class="cls_009">methoxy</span></div>
<div style="position:absolute;left:76.39px;top:475.77px" class="cls_009"><span class="cls_009">Kappa3</span></div>
<div style="position:absolute;left:178.46px;top:475.77px" class="cls_009"><span class="cls_009">SMR VSA7</span></div>
<div style="position:absolute;left:282.56px;top:475.77px" class="cls_009"><span class="cls_009">fr NH0</span></div>
<div style="position:absolute;left:356.10px;top:475.77px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:475.77px" class="cls_009"><span class="cls_009">morpholine</span></div>
<div style="position:absolute;left:76.39px;top:485.72px" class="cls_009"><span class="cls_009">LabuteASA</span></div>
<div style="position:absolute;left:178.46px;top:485.72px" class="cls_009"><span class="cls_009">SMR VSA8</span></div>
<div style="position:absolute;left:282.56px;top:485.72px" class="cls_009"><span class="cls_009">fr NH1</span></div>
<div style="position:absolute;left:356.10px;top:485.72px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:485.72px" class="cls_009"><span class="cls_009">nitrile</span></div>
<div style="position:absolute;left:76.39px;top:495.67px" class="cls_009"><span class="cls_009">MolLogP</span></div>
<div style="position:absolute;left:178.46px;top:495.67px" class="cls_009"><span class="cls_009">SMR VSA9</span></div>
<div style="position:absolute;left:282.56px;top:495.67px" class="cls_009"><span class="cls_009">fr NH2</span></div>
<div style="position:absolute;left:356.10px;top:495.67px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:495.67px" class="cls_009"><span class="cls_009">nitro</span></div>
<div style="position:absolute;left:76.39px;top:505.61px" class="cls_009"><span class="cls_009">MolMR</span></div>
<div style="position:absolute;left:178.46px;top:505.61px" class="cls_009"><span class="cls_009">SlogP VSA1</span></div>
<div style="position:absolute;left:282.55px;top:505.61px" class="cls_009"><span class="cls_009">fr N O</span></div>
<div style="position:absolute;left:356.11px;top:505.61px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:505.61px" class="cls_009"><span class="cls_009">nitro arom</span></div>
<div style="position:absolute;left:76.39px;top:515.56px" class="cls_009"><span class="cls_009">NHOHCount</span></div>
<div style="position:absolute;left:178.46px;top:515.56px" class="cls_009"><span class="cls_009">SlogP VSA10</span></div>
<div style="position:absolute;left:282.55px;top:515.56px" class="cls_009"><span class="cls_009">fr Ndealkylation1</span></div>
<div style="position:absolute;left:356.11px;top:515.56px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:515.56px" class="cls_009"><span class="cls_009">nitro arom nonortho</span></div>
<div style="position:absolute;left:76.39px;top:525.51px" class="cls_009"><span class="cls_009">NOCount</span></div>
<div style="position:absolute;left:178.46px;top:525.51px" class="cls_009"><span class="cls_009">SlogP VSA11</span></div>
<div style="position:absolute;left:282.55px;top:525.51px" class="cls_009"><span class="cls_009">fr Ndealkylation2</span></div>
<div style="position:absolute;left:356.11px;top:525.51px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:525.51px" class="cls_009"><span class="cls_009">nitroso</span></div>
<div style="position:absolute;left:76.39px;top:535.46px" class="cls_009"><span class="cls_009">NumAliphaticCarbocycles</span></div>
<div style="position:absolute;left:178.46px;top:535.46px" class="cls_009"><span class="cls_009">SlogP VSA12</span></div>
<div style="position:absolute;left:282.55px;top:535.46px" class="cls_009"><span class="cls_009">fr Nhpyrrole</span></div>
<div style="position:absolute;left:356.11px;top:535.46px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:535.46px" class="cls_009"><span class="cls_009">oxazole</span></div>
<div style="position:absolute;left:76.39px;top:545.41px" class="cls_009"><span class="cls_009">NumAliphaticHeterocycles</span></div>
<div style="position:absolute;left:178.46px;top:545.41px" class="cls_009"><span class="cls_009">SlogP VSA2</span></div>
<div style="position:absolute;left:282.55px;top:545.41px" class="cls_009"><span class="cls_009">fr SH</span></div>
<div style="position:absolute;left:356.11px;top:545.41px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:545.41px" class="cls_009"><span class="cls_009">oxime</span></div>
<div style="position:absolute;left:76.39px;top:555.36px" class="cls_009"><span class="cls_009">NumAliphaticRings</span></div>
<div style="position:absolute;left:178.46px;top:555.36px" class="cls_009"><span class="cls_009">SlogP VSA3</span></div>
<div style="position:absolute;left:282.55px;top:555.36px" class="cls_009"><span class="cls_009">fr aldehyde</span></div>
<div style="position:absolute;left:356.11px;top:555.36px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:555.36px" class="cls_009"><span class="cls_009">para hydroxylation</span></div>
<div style="position:absolute;left:76.39px;top:565.30px" class="cls_009"><span class="cls_009">NumAromaticCarbocycles</span></div>
<div style="position:absolute;left:178.46px;top:565.30px" class="cls_009"><span class="cls_009">SlogP VSA4</span></div>
<div style="position:absolute;left:282.55px;top:565.30px" class="cls_009"><span class="cls_009">fr alkyl carbamate</span></div>
<div style="position:absolute;left:356.11px;top:565.30px" class="cls_009"><span class="cls_009">fr</span></div>
<div style="position:absolute;left:364.58px;top:565.30px" class="cls_009"><span class="cls_009">phenol</span></div>
<div style="position:absolute;left:213.70px;top:589.90px" class="cls_002"><span class="cls_002">Table</span></div>
<div style="position:absolute;left:243.70px;top:589.90px" class="cls_002"><span class="cls_002">4:</span></div>
<div style="position:absolute;left:257.03px;top:589.90px" class="cls_002"><span class="cls_002">List of chemical features used</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">8</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-306px;top:6416px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="f7a150fc-3be7-11e5-9555-002590d31986_id_f7a150fc-3be7-11e5-9555-002590d31986_files/background9.jpg" width=612 height=792></div>
<div style="position:absolute;left:72.00px;top:91.03px" class="cls_002"><span class="cls_002">Computer Science 181</span><span class="cls_003"> (Spring 2015)</span></div>
<div style="position:absolute;left:191.87px;top:129.49px" class="cls_002"><span class="cls_002">BertzCT</span></div>
<div style="position:absolute;left:271.84px;top:129.49px" class="cls_002"><span class="cls_002">PEOE VSA14</span></div>
<div style="position:absolute;left:351.81px;top:129.49px" class="cls_002"><span class="cls_002">SlogP VSA1</span></div>
<div style="position:absolute;left:191.87px;top:143.04px" class="cls_002"><span class="cls_002">EState VSA2</span></div>
<div style="position:absolute;left:271.84px;top:143.04px" class="cls_002"><span class="cls_002">PEOE VSA3</span></div>
<div style="position:absolute;left:351.81px;top:143.04px" class="cls_002"><span class="cls_002">SlogP VSA12</span></div>
<div style="position:absolute;left:191.87px;top:156.59px" class="cls_002"><span class="cls_002">EState VSA3</span></div>
<div style="position:absolute;left:271.84px;top:156.59px" class="cls_002"><span class="cls_002">PEOE VSA4</span></div>
<div style="position:absolute;left:351.81px;top:156.59px" class="cls_002"><span class="cls_002">SlogP VSA2</span></div>
<div style="position:absolute;left:191.87px;top:170.14px" class="cls_002"><span class="cls_002">EState VSA4</span></div>
<div style="position:absolute;left:271.84px;top:170.14px" class="cls_002"><span class="cls_002">PEOE VSA5</span></div>
<div style="position:absolute;left:351.81px;top:170.14px" class="cls_002"><span class="cls_002">SlogP VSA3</span></div>
<div style="position:absolute;left:191.87px;top:183.69px" class="cls_002"><span class="cls_002">EState VSA5</span></div>
<div style="position:absolute;left:271.84px;top:183.69px" class="cls_002"><span class="cls_002">PEOE VSA7</span></div>
<div style="position:absolute;left:351.81px;top:183.69px" class="cls_002"><span class="cls_002">SlogP VSA5</span></div>
<div style="position:absolute;left:191.87px;top:197.23px" class="cls_002"><span class="cls_002">EState VSA6</span></div>
<div style="position:absolute;left:271.84px;top:197.23px" class="cls_002"><span class="cls_002">PEOE VSA8</span></div>
<div style="position:absolute;left:351.81px;top:197.23px" class="cls_002"><span class="cls_002">SlogP VSA6</span></div>
<div style="position:absolute;left:191.87px;top:210.78px" class="cls_002"><span class="cls_002">EState VSA8</span></div>
<div style="position:absolute;left:271.84px;top:210.78px" class="cls_002"><span class="cls_002">PEOE VSA9</span></div>
<div style="position:absolute;left:351.81px;top:210.78px" class="cls_002"><span class="cls_002">TPSA</span></div>
<div style="position:absolute;left:191.87px;top:224.33px" class="cls_002"><span class="cls_002">EState VSA9</span></div>
<div style="position:absolute;left:271.84px;top:224.33px" class="cls_002"><span class="cls_002">SMR VSA10</span></div>
<div style="position:absolute;left:351.81px;top:224.33px" class="cls_002"><span class="cls_002">VSA EState9</span></div>
<div style="position:absolute;left:191.87px;top:237.88px" class="cls_002"><span class="cls_002">MolMR</span></div>
<div style="position:absolute;left:271.84px;top:237.88px" class="cls_002"><span class="cls_002">SMR VSA3</span></div>
<div style="position:absolute;left:351.81px;top:237.88px" class="cls_002"><span class="cls_002">fr allylic oxid</span></div>
<div style="position:absolute;left:191.87px;top:251.43px" class="cls_002"><span class="cls_002">PEOE VSA1</span></div>
<div style="position:absolute;left:271.84px;top:251.43px" class="cls_002"><span class="cls_002">SMR VSA7</span></div>
<div style="position:absolute;left:351.81px;top:251.43px" class="cls_002"><span class="cls_002">fr bicyclic</span></div>
<div style="position:absolute;left:191.87px;top:264.98px" class="cls_002"><span class="cls_002">PEOE VSA11</span></div>
<div style="position:absolute;left:271.84px;top:264.98px" class="cls_002"><span class="cls_002">SMR VSA9</span></div>
<div style="position:absolute;left:351.81px;top:264.98px" class="cls_002"><span class="cls_002">fr pyridine</span></div>
<div style="position:absolute;left:173.78px;top:287.58px" class="cls_002"><span class="cls_002">Table 5: Features selected by LASSO at α = 0.01 level.</span></div>
<div style="position:absolute;left:303.27px;top:725.89px" class="cls_002"><span class="cls_002">9</span></div>
</div>

</body>
</html>
