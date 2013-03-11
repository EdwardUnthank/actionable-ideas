<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Actionable ideas.</title>
        <meta name="description" content="Bringing the idea-people together with the follow-through people. Half of users submit the great ideas, the other half work on them.">
        <meta name="viewport" content="width=device-width">
        <meta name="robots" content="noindex,nofollow">

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
        	<hgroup>
	        	<h1>Actionable Ideas</h1>
	        	<h3>Bringing the idea-people together with the follow-through people.</h3>
        	</hgroup>
        </header>
        
        <?php // Area to submit idea. At the top for easy access, as simple as possible ?>
        <section class="submit-idea">
	        <form><!-- Submits to DB, immediately available. -->
	        	<input type="text" placeholder="short title" name="ideaTitle">
	        	<input type="text" placeholder="submit an idea" name="ideaContent">
	        	<input type="text" placeholder="category" name="ideaCategory">
	        	<input type="submit">
	        </form>
        </section>
        
        <?php // Content of the ideas go here ?>
        <article>
	        <ul class="ideas">
	        	<?php // Loop through DB to display results. ?>
	        	<li class="idea-1 popularity-10 <?php //popularity-# pulled from DB ?>"><!-- popularity: upvoting functionality? request count? -->
	        		<h5>Website for submission of great ideas so others can act on them</h5>
	        		<p>A simple website where users can jot down their good ideas, even if they don't have the time/skills to act on them. A kind of "feature request" but for anything at all. No good idea should die just because its creator could not act on it.</p>
	        		<span>Web Development</span>
	        	</li>
	        	<li class="idea-2 popularity-5">
	        		<h5>Algorithm-based/Incremental "Forward" browser button</h5>
	        		<p>On browsers, add functionality to the "Forward" button that sees the pattern of browsing and predicts your next step. E.g., if you're on a website and going to the next page of the site, increment the url in the page by one. ?page-id=($page-id+1)</p>
	        		<span>Software</span>
	        	</li>
	        	<li class="idea-3 popularity-4">
	        		<h5>Teaming up with CodePen.io for tracking individual ActionableIdea progress</h5>
	        		<p>If there's an easy website coding request, set up a public CodePen that people can work on and view to see the progress. Doesn't have to be complex as a full GitHub repo, just a few lines of code kind of thing. Have the CodePen expandable underneath the idea, see the contributors.</p>
	        		<span>Web Development</span>
	        	</li>
	        </ul>
        </article>
        
        <footer>
        	<p>An open-source work in progress. Primarily <a href="http://edwardunthank.com" target="_blank">Edward Unthank</a>'s work. Please contribute! Our GitHub repo is here: <a href="https://github.com/EdwardUnthank/actionable-ideas" target="_blank">https://github.com/EdwardUnthank/actionable-ideas</a>.</p>
        	
			<div class="holder">
				<div class="word">
					<div class="mobile">E</div>
					<div class="tablet">dward</div>
				</div>
				
				<div class="word">
					<div class="mobile">J</div>
					<div class="desktop">effrey</div>
				</div>
				
				<div class="word">
					<div class="mobile">U</div>
					<div class="tablet">nthank</div>
				</div>
			</div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-36906473-5'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
