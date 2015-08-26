
@extends('/blog/blog-base')
@section('body')

<h2 class='post_title'>k-means Algorithm From Scratch in Python</h2>
<h4 style='text-align: center'>(Lloyd's Algorithm)</h4>
<p>
For clustering, we need a notion of distance beween datapoints. What is distance? It depends on our context. For DNA we may use edit distance. For bit vectors, we use Hamming Distance.
</p>
<p>
But the classic definition of distance is Euclidean distance - the straight line distance between two points. 
</p>
$$	\sqrt{\sum_{i=1}^N(x_{i}-x_{i})^2} $$
<p>
But there are other ways to measure distance. Manhattan Distance (or city block distance) is also a common metric. 
</p>

$$  {\sum_{i=1}^N|x_{i}-x_{i}|} $$

<p>
The generalized distance metric is called Minkowski distance, with q > 0. </p>

$$	({\sum_{i=1}^N|x_{i}-x_{i}|^q})^{1/q} $$
<p>
When q = 1, we get Manhattan Distance. When q = 2, we get Eucledian Distance. There are also several other distance metrics for different contexts, including Tanimoto, Hamming, and cosine.
<p>

k-means optimizes an obiective function that comes out of our distance metric. Let the clusters be represented by K, labels be represented by l and the means by m. In the case of Eucledian Distance, this is our metric:

$$ \sum_{i=1}^N\sum_{k=1}^K l_{ik}||x_i - m_k||^2_2 $$

<p>
Before you apply k-means, make sure to center and scale your predictors. [1] 
We'll be using one library for this algorithm: Numpy. 
</p>

<p>
	We open up with the L2 norm, the generalized verson of euclidean distance.
</p>

<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto; border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">import</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">np</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">L2_norm</span><span style="color: #f8f8f2">(vector):</span>
    <span style="color: #f8f8f2">count</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">vector:</span>
        <span style="color: #f8f8f2">i</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">i</span><span style="color: #f92672">**</span><span style="color: #ae81ff">2</span>
        <span style="color: #f8f8f2">count</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">i</span>
    <span style="color: #f8f8f2">norm</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sqrt(count)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">norm</span>
</div>
<p>
	k-means clusters by taking a set of cluster means and assigning points to the clusters based on their distance from the cluster center.
	Then, with points assigned to the closest centers, the means are adiusted. They become the mean of the points currently assigned to that cluster.
</p>

<p>
	This cluster function will take a set of means and assign each point in our dataset to the closest mean.
</p>
<div style="background: #272822; overflow:auto;width:auto; border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">cluster</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">means):</span>
    <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{}</span>
    <span style="color: #75715e"># Assign each datapiont to a cluster based on L2 distance to cluster center</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">datapoint</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">x_train:</span>
        <span style="color: #f8f8f2">best_mean_key</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">min([(i[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">],</span> <span style="color: #f8f8f2">L2_norm(datapoint</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">means[i[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]]))</span> \
                        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">enumerate(means)],</span> <span style="color: #f8f8f2">key</span><span style="color: #f92672">=</span><span style="color: #66d9ef">lambda</span> <span style="color: #f8f8f2">t:t[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span>
        <span style="color: #66d9ef">try</span><span style="color: #f8f8f2">:</span>
            <span style="color: #f8f8f2">clusters[best_mean_key]</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(datapoint)</span>
        <span style="color: #66d9ef">except</span> <span style="color: #a6e22e">KeyError</span><span style="color: #f8f8f2">:</span>
            <span style="color: #f8f8f2">clusters[best_mean_key]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[datapoint]</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">clusters</span>
</div>

<p>
	Now that we've assigned points to means, we want to adiust the means to become the center of the points attached to them.
</p>
<div style="background: #272822; overflow:auto;width:auto; border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">reevaluate_cluster_centers</span><span style="color: #f8f8f2">(means,</span> <span style="color: #f8f8f2">clusters):</span>
    <span style="color: #75715e"># Calculate the new cluster means with the updated cluster assignments</span>
    <span style="color: #f8f8f2">newmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">keys</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">sorted(clusters</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">keys())</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">k</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">keys:</span>
        <span style="color: #f8f8f2">newmeans</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">mean(clusters[k],</span> <span style="color: #f8f8f2">axis</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">))</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">newmeans</span>
</div>

<p>
	The termination condition for this algorithm occurs when the means are the same before and after points are reassigned. As we've gone back to the same means, the algorithm can make no more progress. And so we check for termination.
</p>

<div style="background: #272822; overflow:auto;width:auto; border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">terminated</span><span style="color: #f8f8f2">(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
    <span style="color: #75715e"># Check to see if the new means are the same as the old means</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">(set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">means])</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">oldmeans]))</span>
</div>
<p>
	Our k_means function will initialize the algorithm with random means and iterate until the means converge. See <a href='/k-means++'>k-means++</a> for a better initialization.
	We apply the indices from our dataset and return a final list with cluster, index and datapoint.
</p>
<div style="background: #272822; overflow:auto;width:auto; border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">k_means</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">K):</span>
    <span style="color: #75715e"># Initialize Means</span>
    <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sample(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sample(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #66d9ef">while</span> <span style="color: #f92672">not</span> <span style="color: #f8f8f2">terminated(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
        <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">means</span>
        
        <span style="color: #75715e"># Assign all points to a cluster</span>
        <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">cluster(x_train,</span> <span style="color: #f8f8f2">means)</span>
        
        <span style="color: #75715e"># Re-evaluate cluster centers</span>
        <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">reevaluate_cluster_centers(oldmeans,</span> <span style="color: #f8f8f2">clusters)</span>
        
    <span style="color: #f8f8f2">cluster_list</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i,</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">clusters</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">iteritems():</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">k</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">i:</span>
            <span style="color: #f8f8f2">cluster_list</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([i,</span> <span style="color: #f8f8f2">k])</span>

    <span style="color: #f8f8f2">final_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">dummy_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span><span style="color: #f92672">*</span><span style="color: #f8f8f2">len(cluster_list)</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(cluster_list)):</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(x_train[i]</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">all():</span>
                <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">dummy_array[i]</span> <span style="color: #f92672">!=</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">:</span>
                    <span style="color: #f8f8f2">final_array</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([cluster_list[i][</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">],</span> <span style="color: #f8f8f2">i,</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]])</span>
                <span style="color: #f8f8f2">dummy_array[i]</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">1</span>
                
    <span style="color: #66d9ef">return</span><span style="color: #f8f8f2">(final_array)</span>
</pre></div>

<p>Finally, all together:</p>

<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto; border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">import</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">np</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">L2_norm</span><span style="color: #f8f8f2">(vector):</span>
    <span style="color: #f8f8f2">count</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">vector:</span>
        <span style="color: #f8f8f2">i</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">i</span><span style="color: #f92672">**</span><span style="color: #ae81ff">2</span>
        <span style="color: #f8f8f2">count</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">i</span>
    <span style="color: #f8f8f2">norm</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sqrt(count)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">norm</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">cluster</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">means):</span>
    <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{}</span>
    <span style="color: #75715e"># Assign each datapiont to a cluster based on L2 distance to cluster center</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">datapoint</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">x_train:</span>
        <span style="color: #f8f8f2">best_mean_key</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">min([(i[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">],</span> <span style="color: #f8f8f2">L2_norm(datapoint</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">means[i[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]]))</span> \
                        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">enumerate(means)],</span> <span style="color: #f8f8f2">key</span><span style="color: #f92672">=</span><span style="color: #66d9ef">lambda</span> <span style="color: #f8f8f2">t:t[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span>
        <span style="color: #66d9ef">try</span><span style="color: #f8f8f2">:</span>
            <span style="color: #f8f8f2">clusters[best_mean_key]</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(datapoint)</span>
        <span style="color: #66d9ef">except</span> <span style="color: #a6e22e">KeyError</span><span style="color: #f8f8f2">:</span>
            <span style="color: #f8f8f2">clusters[best_mean_key]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[datapoint]</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">clusters</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">reevaluate_cluster_centers</span><span style="color: #f8f8f2">(means,</span> <span style="color: #f8f8f2">clusters):</span>
    <span style="color: #75715e"># Calculate the new cluster means with the updated cluster assignments</span>
    <span style="color: #f8f8f2">newmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">keys</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">sorted(clusters</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">keys())</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">k</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">keys:</span>
        <span style="color: #f8f8f2">newmeans</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">mean(clusters[k],</span> <span style="color: #f8f8f2">axis</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">))</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">newmeans</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">terminated</span><span style="color: #f8f8f2">(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
    <span style="color: #75715e"># Check to see if the new means are the same as the old means</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">(set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">means])</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">oldmeans]))</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">k_means</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">K):</span>
    <span style="color: #75715e"># Initialize Means</span>
    <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sample(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sample(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #66d9ef">while</span> <span style="color: #f92672">not</span> <span style="color: #f8f8f2">terminated(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
        <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">means</span>
        
        <span style="color: #75715e"># Assign all points to a cluster</span>
        <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">cluster(x_train,</span> <span style="color: #f8f8f2">means)</span>
        
        <span style="color: #75715e"># Re-evaluate cluster centers</span>
        <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">reevaluate_cluster_centers(oldmeans,</span> <span style="color: #f8f8f2">clusters)</span>
        
    <span style="color: #f8f8f2">cluster_list</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i,</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">clusters</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">iteritems():</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">k</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">i:</span>
            <span style="color: #f8f8f2">cluster_list</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([i,</span> <span style="color: #f8f8f2">k])</span>

    <span style="color: #f8f8f2">final_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">dummy_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span><span style="color: #f92672">*</span><span style="color: #f8f8f2">len(cluster_list)</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(cluster_list)):</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(x_train[i]</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">all():</span>
                <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">dummy_array[i]</span> <span style="color: #f92672">!=</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">:</span>
                    <span style="color: #f8f8f2">final_array</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([cluster_list[i][</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">],</span> <span style="color: #f8f8f2">i,</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]])</span>
                <span style="color: #f8f8f2">dummy_array[i]</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">1</span>
                
    <span style="color: #66d9ef">return</span><span style="color: #f8f8f2">(final_array)</span>
</pre></div>



<br><br>
1: To center, subtract the average preditor value from all the values. 
This will give the predictor zero mean. To scale the data, 
divide each value of the predictor by its standard deviation. 
This gives the values a standard deviation of one and improves the numerical stability 
of calculations. The upside to scaling is that KNN will weigh variables 
with the largest scales much more heavily than variables with lower scale. The downside 
is a loss of interpretability from the original units.
You can also remove distributional skewness, using log/sqare root scaling or Box cox transformations. <br>
<br>
2: Resources<br>
<a href='http://statweb.stanford.edu/~tibs/ElemStatLearn/'>Elements of Statistical Learning: Hastie, Tibshirani, Friedman</a><br>
<a href='http://appliedpredictivemodeling.com/'>Applied Predictive Modeling: Kuhn, iohnson</a><br>
<a href='https://datasciencelab.wordpress.com/2013/12/12/clustering-with-k-means-in-python/'>Clustering With K-Means</a>, The Data Science Lab

@stop