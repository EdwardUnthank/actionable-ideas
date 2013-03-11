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
    
        <?php 
        	// Establishing a DB connection
	        require_once ('login/connections.php');
	        // This is purposefully accessible to the public. Putting in a lot of trust. Help make it secure, but so everyone can access it!
        ?>
    
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
	        <form action="insert.php" method="post"><!-- Submits to DB, immediately available. -->
	        	<input type="text" placeholder="short title" name="ideaTitle">
	        	<input type="text" placeholder="submit an idea" name="ideaContent">
	        	<input type="text" placeholder="category" name="ideaCategory">
	        	<input type="submit">
	        </form>
        </section>
        
        <?php // Content of the ideas go here ?>
        <article>
	        <ul class="ideas">
	        	<?php
	        	// Loop through the results, adding a li to each.
				$loop = mysql_query("SELECT * FROM content ORDER BY id DESC")
				   or die (mysql_error());
				
				while ($row = mysql_fetch_array($loop))
				{ 
					echo "<li class=\"idea-" . $row['id'] . "\">";
						echo "<h5>" . $row['title'] . "</h5>";
						echo "<p>" . $row['content'] . "</p>";
						echo "<span>" . $row['category'] . "</span>";
					echo "</li>";
				}
				?>
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
        
        <!-- Piwik -->
		<script type="text/javascript">
		  var _paq = _paq || [];
		  _paq.push(["trackPageView"]);
		  _paq.push(["enableLinkTracking"]);
		
		  (function() {
		    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://analytics.edwardunthank.com/";
		    _paq.push(["setTrackerUrl", u+"piwik.php"]);
		    _paq.push(["setSiteId", "4"]);
		    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
		    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
		  })();
		</script>
		<!-- End Piwik Code -->
    </body>
</html>
