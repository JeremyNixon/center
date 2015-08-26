@extends('/blog/blog-base')
@section('body')

<h2 class='post_title'>k-means++ Tutorial From Scratch in Python</h2>

<p>
    This post assumes that you understand k-means already - learn about it <a href='/k-means'>here</a>!
</p>
<p>
On important determinant of k-means' results is the initial cluster means that it begins with. 
k-means optimizes an obiective function that comes out of our distance metric. Let the clusters be represented by K, labels be represented by l and the means by m. In the case of Eucledian Distance, this is our metric:
</p>
$$ \sum_{i=1}^N\sum_{k=1}^K l_{ik}||x_i - m_k||^2_2 $$
<p>
This metric is non-convex and has many local minima. One way to deal with this is to use random restarts to find a good solution. Or you could cut off a subset of the data, run k-means on that, and then use the final cluster centers as the initialization.
</p>
<p>
K-means++ initializes means intelligently, so that there is a distribution of cluster means that is roughly even relative to the data.
</p>

<p>
K-means++ accomplishes this by selecting a first clutster center at random, and then drawing the next sample from a distribution that puts a heavy probability weight where there is data and no close-by cluster center. The distribution wight close to any center is very low. 
</p>
<p>
    This way, points drawn from the distribution will be well dispersed in the space. This initialization can even serve well without running Lloyd's (k-means) at all. 
</p>
<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">import</span> <span style="color: #f8f8f2">random</span>
<span style="color: #f92672">import</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">np</span>
<span style="color: #f92672">import</span> <span style="color: #f8f8f2">pandas</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">pd</span>


<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">L2_norm</span><span style="color: #f8f8f2">(vector):</span>
    <span style="color: #f8f8f2">count</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">vector:</span>
        <span style="color: #f8f8f2">i</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">i</span><span style="color: #f92672">**</span><span style="color: #ae81ff">2</span>
        <span style="color: #f8f8f2">count</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">i</span>
    <span style="color: #f8f8f2">norm</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sqrt(count)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">norm</span>
</div>
<br>
The initialization code works as follows:
<ol>
<li>Choose first cluster center randomly.
</li><li>Calculate the distance from each datapoint to each mean, and add it to a distance sum for that point.
</li><li>Normalize the distance sums by dividing by the total distance between points and centers.
</li><li>Scale points' distances to go from 0 to 1, with the gaps sized by its relative distance from cluster centers.
</li><li>Choose the closest point below a randomly generated number between 0 and 1.
    </li>
</ol>

<div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">k_means_plus_plus_initialize</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">k):</span>
    <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">original_mean</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">list(np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sample(x_train,</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">))[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">])</span>
    <span style="color: #f8f8f2">means</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(original_mean)</span>

    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(k</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">):</span>
        
        <span style="color: #f8f8f2">distances</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
            <span style="color: #f8f8f2">distance_i</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
            <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">mean</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">means:</span>
                <span style="color: #f8f8f2">distance_i</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">L2_norm(x_train[i]</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">mean[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">])</span>
            <span style="color: #f8f8f2">distances</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([x_train[i],</span> <span style="color: #f8f8f2">distance_i])</span>

        <span style="color: #f8f8f2">count</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">distances:</span>
            <span style="color: #f8f8f2">count</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">i[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span>

        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(distances)):</span>
            <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span><span style="color: #f92672">/</span><span style="color: #f8f8f2">count</span>

        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(distances)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">:</span>
                <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span>
            <span style="color: #66d9ef">else</span><span style="color: #f8f8f2">:</span>
                <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distances[i</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">+</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span>

        <span style="color: #f8f8f2">rand</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">uniform(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">)</span>

        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(distances)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">rand</span> <span style="color: #f92672">&lt;</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]:</span>
                <span style="color: #f8f8f2">choice</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">i</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span>
                <span style="color: #66d9ef">break</span>

        <span style="color: #f8f8f2">new_mean</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(x_train[choice])</span>
        <span style="color: #f8f8f2">means</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(list(new_mean))</span>

    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">means</span>
</div>
<p>
This will return cluster means that we can use to initialize k-means: the k-means implementation is found below.
</p>
<div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">


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

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">converged</span><span style="color: #f8f8f2">(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
    <span style="color: #75715e"># Check to see if the new means are the same as the old means</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">(set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">means])</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">oldmeans]))</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">k_means_plus_plus</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">K):</span>
    <span style="color: #75715e"># Initialize Means</span>
    <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">k_means_plus_plus_initialize(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">k_means_plus_plus_initialize(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #66d9ef">while</span> <span style="color: #f92672">not</span> <span style="color: #f8f8f2">converged(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
        <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">means</span>
        
        <span style="color: #75715e"># Assign all points to a cluster</span>
        <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">cluster(x_train,</span> <span style="color: #f8f8f2">means)</span>
        
        <span style="color: #75715e"># Re-evaluate cluster centers</span>
        <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">reevaluate_cluster_centers(oldmeans,</span> <span style="color: #f8f8f2">clusters)</span>
        
    <span style="color: #f8f8f2">cluster_list</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i,</span> <span style="color: #f8f8f2">j</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">clusters</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">iteritems():</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">k</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">j:</span>
            <span style="color: #f8f8f2">cluster_list</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([i,</span> <span style="color: #f8f8f2">k])</span>

    <span style="color: #f8f8f2">final_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">dummy_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span><span style="color: #f92672">*</span><span style="color: #f8f8f2">len(cluster_list)</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(cluster_list)):</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">j</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(x_train[j]</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">all():</span>
                <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">dummy_array[j]</span> <span style="color: #f92672">!=</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">:</span>
                    <span style="color: #f8f8f2">final_array</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([cluster_list[i][</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">],</span> <span style="color: #f8f8f2">j,</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]])</span>
                <span style="color: #f8f8f2">dummy_array[j]</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">1</span>
                
    <span style="color: #66d9ef">return</span><span style="color: #f8f8f2">(final_array)</span>
</pre></div>

<p>
    The full algorithm is here:
</p>

<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">import</span> <span style="color: #f8f8f2">random</span>
<span style="color: #f92672">import</span> <span style="color: #f8f8f2">numpy</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">np</span>
<span style="color: #f92672">import</span> <span style="color: #f8f8f2">pandas</span> <span style="color: #f92672">as</span> <span style="color: #f8f8f2">pd</span>


<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">L2_norm</span><span style="color: #f8f8f2">(vector):</span>
    <span style="color: #f8f8f2">count</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">vector:</span>
        <span style="color: #f8f8f2">i</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">i</span><span style="color: #f92672">**</span><span style="color: #ae81ff">2</span>
        <span style="color: #f8f8f2">count</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">i</span>
    <span style="color: #f8f8f2">norm</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sqrt(count)</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">norm</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">k_means_plus_plus_initialize</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">k):</span>
    <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">original_mean</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">list(np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">sample(x_train,</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">))[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">])</span>
    <span style="color: #f8f8f2">means</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(original_mean)</span>

    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(k</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">):</span>
        
        <span style="color: #f8f8f2">distances</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
            <span style="color: #f8f8f2">distance_i</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
            <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">mean</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">means:</span>
                <span style="color: #f8f8f2">distance_i</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">L2_norm(x_train[i]</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">mean[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">])</span>
            <span style="color: #f8f8f2">distances</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([x_train[i],</span> <span style="color: #f8f8f2">distance_i])</span>

        <span style="color: #f8f8f2">count</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">distances:</span>
            <span style="color: #f8f8f2">count</span> <span style="color: #f92672">+=</span> <span style="color: #f8f8f2">i[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span>

        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(distances)):</span>
            <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span><span style="color: #f92672">/</span><span style="color: #f8f8f2">count</span>

        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(distances)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">:</span>
                <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span>
            <span style="color: #66d9ef">else</span><span style="color: #f8f8f2">:</span>
                <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">distances[i</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">+</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]</span>

        <span style="color: #f8f8f2">rand</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">random</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">uniform(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">)</span>

        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(distances)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">rand</span> <span style="color: #f92672">&lt;</span> <span style="color: #f8f8f2">distances[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]:</span>
                <span style="color: #f8f8f2">choice</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">i</span><span style="color: #f92672">-</span><span style="color: #ae81ff">1</span>
                <span style="color: #66d9ef">break</span>

        <span style="color: #f8f8f2">new_mean</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">np</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">array(x_train[choice])</span>
        <span style="color: #f8f8f2">means</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append(list(new_mean))</span>

    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">means</span>


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

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">converged</span><span style="color: #f8f8f2">(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
    <span style="color: #75715e"># Check to see if the new means are the same as the old means</span>
    <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">(set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">means])</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">set([tuple(a)</span> <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">a</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">oldmeans]))</span>

<span style="color: #66d9ef">def</span> <span style="color: #a6e22e">k_means_plus_plus</span><span style="color: #f8f8f2">(x_train,</span> <span style="color: #f8f8f2">K):</span>
    <span style="color: #75715e"># Initialize Means</span>
    <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">k_means_plus_plus_initialize(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">k_means_plus_plus_initialize(x_train,</span> <span style="color: #f8f8f2">K)</span>
    <span style="color: #66d9ef">while</span> <span style="color: #f92672">not</span> <span style="color: #f8f8f2">converged(means,</span> <span style="color: #f8f8f2">oldmeans):</span>
        <span style="color: #f8f8f2">oldmeans</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">means</span>
        
        <span style="color: #75715e"># Assign all points to a cluster</span>
        <span style="color: #f8f8f2">clusters</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">cluster(x_train,</span> <span style="color: #f8f8f2">means)</span>
        
        <span style="color: #75715e"># Re-evaluate cluster centers</span>
        <span style="color: #f8f8f2">means</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">reevaluate_cluster_centers(oldmeans,</span> <span style="color: #f8f8f2">clusters)</span>
        
    <span style="color: #f8f8f2">cluster_list</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i,</span> <span style="color: #f8f8f2">j</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">clusters</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">iteritems():</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">k</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">j:</span>
            <span style="color: #f8f8f2">cluster_list</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([i,</span> <span style="color: #f8f8f2">k])</span>

    <span style="color: #f8f8f2">final_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[]</span>
    <span style="color: #f8f8f2">dummy_array</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]</span><span style="color: #f92672">*</span><span style="color: #f8f8f2">len(cluster_list)</span>
    <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">i</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(cluster_list)):</span>
        <span style="color: #66d9ef">for</span> <span style="color: #f8f8f2">j</span> <span style="color: #f92672">in</span> <span style="color: #f8f8f2">range(len(x_train)):</span>
            <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(x_train[j]</span> <span style="color: #f92672">==</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">])</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">all():</span>
                <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">dummy_array[j]</span> <span style="color: #f92672">!=</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">:</span>
                    <span style="color: #f8f8f2">final_array</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">append([cluster_list[i][</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">],</span> <span style="color: #f8f8f2">j,</span> <span style="color: #f8f8f2">cluster_list[i][</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">]])</span>
                <span style="color: #f8f8f2">dummy_array[j]</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">1</span>
                
    <span style="color: #66d9ef">return</span><span style="color: #f8f8f2">(final_array)</span>
</pre></div>

<br>
Resources: <br>
Notes, K-Means Clustering and Related Algorithms, Ryan P. Adams
<br><a href='https://datasciencelab.wordpress.com/2013/12/12/clustering-with-k-means-in-python/'>Clustering With K-Means</a>, The Data Science Lab
<br><a href='http://statweb.stanford.edu/~tibs/ElemStatLearn/'>Elements of Statistical Learning: Hastie, Tibshirani, Friedman</a><br>

@stop
