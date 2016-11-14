<!doctype html>
<html lang='en-gb'>
<head>
<meta charset="utf-8">
				<title> Blog | A look under the hood: Website performance and optimisation </title>

<!-- standard meta-->
				<meta name="description" content="Aaron talks about his web optimisation and performance methods">
				<meta name="keywords" content="SEO, optimisation, Performance, PageSpeed, Google Speed, Search engine optimisation, Google rankings ">
				<meta name="viewport" content="width=device-width,   maximum-scale=1.0,  initial-scale=1.0, user-scalable=yes" />
<!--  social media meta-->
				<meta property="og:type" content="website" />
				<meta property="og:title" content="A look under the hood: Website performance and optimisation " />
				<meta property="og:description" content="Aaron talks about his web optimisation and performance methods" />
				<meta property="og:image" content='http://aaronmcguire.co.uk/images/metaimages/underthehoodmetabg.jpg'/>
				<meta property="og:site_name" content="Aaron McGuire" />
<!--  Twitter meta -->
				<meta name="twitter:card" content="summary_large_image" />
				<meta name="twitter:site" content="@_aaronmcguire" />
				<meta name="twitter:title" content="A look under the hood: Website performance and optimisation" />
				<meta name="twitter:description" content="Aaron talks about his web optimisation and performance methods" />
				<meta name="twitter:image" content="http://aaronmcguire.co.uk/images/metaimages/underthehoodmetabg.jpg" />
<!-- Chrome frame color-->
				<meta name="theme-color" content="#ff425d">
				<meta name="msapplication-navbutton-color" content="#ff425d">
				<meta name="apple-mobile-web-app-status-bar-style" content="#ff425d">
<!--  fav icons APPLE | Android | PC -->
<link rel="apple-touch-icon" sizes="57x57" href="../images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
<link rel="manifest" href="../images/favicons/manifest.json">

<!-- Main stylesheet -->
				<link rel="stylesheet" type="text/css" href="../styles/stylesheet.min.css?v=3.3">
</head>
<!-- Include header -->
<?php include_once "../includes/header.php"; ?>
<!-- Include Google Analytics -->
<?php include_once("../includes/analyticstracking.php") ?>
<section class="hero small">
<div class='hero_content gradient'><h2>A look under the hood: Website performance and optimisation</h2>
<a href='#maincontent' title='go to main content on page'><span class='arrow bounce'></span></a>
</div>


</section>
<div class='breadcrumb'><div class='container'><ul>
<li><a href='../index.php' title='back to Aarons homepage.'>Home</a></li>
<li><span class='bread_arrow'></span></li>
<li><a href='../blog.php' title='See all of Aarons blog posts.'>Blog</a></li>
<li><span class='bread_arrow'></span></li>
<li>A look under the hood</li>
</ul></div></div>


<main id='maincontent'>
	<section class='blog_container clear '>
		<div class='container'>

<article class='full_article'><span class='new_tag'>New</span> <span class='timestamp'><time datetime="2016-10-30 20:53">Sunday, October 30, 2016</time></span>
<h2>A look under the hood: Website performance and optimisation</h2>
<span class='line'></span>

<h3>Code Validation</h3>
<p>Validation of code is one of the most common practices to follow – allowing the web to be truly available to all!  Yet there are still plenty of websites that have simple validation errors rendering the whole website a UX disaster. Every website I make, I try my utmost best to ensure every element is valid, semantic and accessible. A few ways I validated my code during the development of this website were as follows:</p>
<ul>
	<li><a href='http://csslint.net/' title='check the validity of your css code.'>CSS Lint</a></li>
		<li><a href='https://validator.w3.org/' title='check the validity of your html code.'>HTML Validator</a></li>
		<li><a href='http://www.jslint.com/' title='check the validity of your javascript.'>JS Validator</a></li>
</ul>
<p>All of these services are free to use and take little to no time to conduct a check on all of your code. </p>

<h4>“Well I just use grunt or gulp for that…”</h4>
<p>Great! Me too. It’s still always good practice to run your code through a manual service because you can actually see your getting the best output. In addition to it not only being the best it can be - you also get to check those boxes during your WCAG report.</p>
<figure>
<img src='../images/underthehood/htmlvalidator.jpg' alt='validator screen report on W3C validator.'>
<figcaption>Screenshot of W3C validator output for this website.</figcaption>
</figure>

<h3>Page optimisation</h3>
<p>There’s a range of things I’ve done to keep my page optimised. You too could implement these into your own personal website. One such optimisation technique comes straight from the <a href='https://developers.google.com/speed/pagespeed/' title='Analyze your site performance'>Google PageSpeed</a> website enabling Gzip compression. Now this may already be enabled on your server and therefore, wouldn’t make a difference. If it isn’t then Gzipping your website has the potential to bring down file sizes by 70%+. A server file like .htaccess has the power to make your website exceptionally fast.</p>
<figure>
<img src='../images/underthehood/googlepagespeed.jpg' alt='Google speed report showing 97 out of 100'>
<figcaption>Report taken from Google PageSpeed showing 97 out of 100 score.</figcaption>
</figure>
	<p>Be warned however, you shouldn’t go poking around if you haven’t read up on what you're doing.</p>

	<p> Another great optimisation technique in .htaccess is enabling expiry times on your content (e.g. images, icons etc.. ). Doing this enables content to be cached for a longer period of time and therefore regular visitors may not need to re-load certain assets.  There are also the standard optimisation techniques that are performed on every project but less attention is given to them as they’ve been automated using Grunt. These techniques include minifying CSS and Javascript, Concatenating files where possible and optimizing images to be a lower file size.</p>
<span class='code_example'>heres an example of some code in my .htaccess file:-</span>
<pre class='code code-js'><label>code:</label><code>
	AddOutputFilterByType DEFLATE text/plain
	AddOutputFilterByType DEFLATE text/html
	AddOutputFilterByType DEFLATE text/xml
	AddOutputFilterByType DEFLATE text/css
	AddOutputFilterByType DEFLATE application/xml
	AddOutputFilterByType DEFLATE application/xhtml+xml
	AddOutputFilterByType DEFLATE application/rss+xml
	AddOutputFilterByType DEFLATE application/javascript
	AddOutputFilterByType DEFLATE application/x-javascript
	AddOutputFilterByType DEFLATE image/x-icon image/svg+xml application/vnd.ms-fontobject application/x-font-ttf font/opentype
	AddOutputFilterByType DEFLATE application/x-font-ttf
	AddOutputFilterByType DEFLATE font/opentype font/truetype font/eot
</code></pre>

<h3>SEO Integration</h3>
<p>SEO is something I’m relatively new to myself but never the less I conducted some research and implemented some search engine optimisation techniques to the best of my ability. One such technique was the use of the <a href='http://ogp.me/' title='enabling any web page to become a rich object in a social graph'>Open Graph protocol</a>. This protocol enables websites such as Facebook to use content from your website that you pick, opposed to Facebook guessing which content to pick. By doing this you widen the scope for sharing articles and other shareable website content. I also used the Twitter cards Meta data to enable customisation in regards to Twitter. Google Analytics was attached to my website along with an <a href='http://seositecheckup.com/' title='Search Engine Optimization Made Easy'>SEOsitecheckup</a> to measure how well my website was performing. These tools however will be used for the long term maintenance of my SEO performance.</p>

<div class='share'>
	<h3>Like the article? Share it!</h3>
	<span class='line'></span>
<a href="https://twitter.com/share" class="twitter-share-button share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<div class="fb-share-button share-button" data-href="http://aaronmcguire.co.uk/blog/underthehood.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Faaronmcguire.co.uk%2Fblog%2Funderthehood.php&amp;src=sdkpreparse">Share</a></div>
</div>

</article>

</div>
</section>
<div class='comment_block'>
<div id="disqus_thread" class='post'>
<script>
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//aaronmcguire.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</div>
<section class='casestudy small_section '><div class='content subject'><p>Like this post? Head on over to my article about optimisation and performance</p><a href='../blog/keepupdigital.php' title='Keeping up in a digital industry' class='default_button'>Keeping up</a></div></section>
</main>


<!-- Include footer-->
<?php include_once "../includes/footer.php"; ?>
