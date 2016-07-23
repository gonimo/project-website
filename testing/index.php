<?php
	include("php/simple_html_dom.php");
	$html = new simple_html_dom();
	$html->load_file('http://blog.gonimo.com/');
	$ret = $html->find('article[class=post]');
	foreach($html->find('article[class=post]') as $element) 
		$element->class = "panel panel-primary";
	foreach($html->find('header[class=post-header]') as $element)
		$element->class = "panel-heading";
	foreach($html->find('h2[class=post-title]') as $element)
		$element->class = "text-center";
	foreach($html->find('a') as $element) {
		$element->href = "http://blog.gonimo.com" . $element->href;
		$element->style = "color: white;";
	}
	foreach($html->find('footer[class=post-meta]') as $element) 
		$element->class = "panel-footer";
	// foreach($html->find('h2[class=text-center]') as $h2)
	// 	foreach($h2->find('a') as $element){
	// 		$innertext = $element->innertext;
	// 		$element->outertext = '';
	// 		$element->outertext = $innertext;
	// 	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--To ensure proper rendering and touch zooming-->
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Gonimo - First web-based baby monitor!</title>
</head>
<body>
	<header>
		<!-- Fixierte Navbar -->
    <nav id="navbar-top" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Gonimo</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#mission">Our Mission</a></li>
            <li><a href="#blog">Development Blog</a></li>
            <li><a href="#interest">Interesting points</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<nav id="headernavbar" class="container-fluid navbar navbar-default">
			<div class="row center-block">
				<div class="col-xs-3">
					<a href="http://project.gonimo.com/"><img align="left" src='http://pitch.mybabymonitor.org/src/pix/logo.svg'></img></a>
				</div>
				<div class="col-xs-6">
					<div class="row vcenter well">
						<div class="col-xs-10 col-xs-offset-2">
							<p>Good Night Monitor</p>
						</div>
						<div class="col-xs-9 col-xs-offset-3">
							<h1>Gonimo.com</h1>
						</div>
						<div class="col-xs-7 col-xs-offset-5">
							<p>The first web-based baby monitor!</p>
						</div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="row">
						<div class="col-xs-12">
							<a target="_blank" href="https://www.netidee.at/netidee-home/"><img align="right" src='http://data.gonimo.com/pix/netidee-logo_RGB.png' /></a>
						</div>
						<div class="col-xs-12">
							<p class="text-right">This project is funded by netidee!</p>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<div>
			<div class="row">
				<div id="mission" class="col-xs-12">
					<article class="container">
						<h1 class="text-center">Our Mission</h1>
						<p>Create a superior free baby monitor solution that works in the browser, without any installation or plugins.</p>
						<p>It will ...</p>
						<ul>
							<li>be free and open source</li>
							<li>be reliable:</li>
								<ul>
									<li>automatic reconnections</li>
									<li>battery warning (baby &amp; parent station will be monitored)</li>
									<li>alert on connection loss</li>
									<li>permanent connection monitoring</li>
								</ul>
							<li>be as secure as reasonable possible:</li>
								<ul>
									<li>All data that is needed is stored on the client</li>
									<li>Intelligent two server solution: An attacker has to crack two servers in order to do any serious harm.</li>
									<li>An intrusion will be noticed immediately</li>
								</ul>
							<li>be easy to use</li>
							<li>be beautiful &amp; cute to look at</li>
							<li>work on all important browsers</li>
							<li>offer "Push to talk" to your baby</li>
							<li>allow multiple parent devices to connect simultaneously to the same baby device</li>
							<li>offer Sound level visualization: "See" your baby scream</li>
							<li>offer Android Wrapper application. Find it on Google Play, maybe additional features.</li>
							<li>be a great replacement for traditional devices &amp; native apps</li>
						</ul>
					</article>
				</div>
				<div class="col-xs-12 col-md-12">
					<section id="blog">
						<article class="container text-center">
							<h1>Development Blog</h1>
							<p>You can find news about current development on our development blog.</p>
							<p>Latest blog entry:</p>
							<div class="row">
								<div class="col-xs-10 col-xs-offset-1">
									<?php
									$max = 3;
									for($i = 0; $i < $max; $i++) {
										echo "<div class='col-xs-" . (12/$max) . "'>";
										echo $ret[$i] . "<br />";
										echo "</div>\n";
									}
									?>
								</div>
							</div>
							<p><a class="btn btn-primary" role="button" href="http://blog.gonimo.com/">Visit Gonimo Blog</a></p>
						</article>
					</section>
					<section id="interest">
						<article class="text-center col-md-4 col-push-4"> 
							<h1>Development Status</h1>
							<p>For detailed information about the current development status and what we are currently working on, you can visit our <a href="https://tree.taiga.io/project/eskimo-gonimo/backlog">taiga</a> instance.</p>
							<p>More information about our sprints can be found <a href="https://tree.taiga.io/project/eskimo-gonimo/wiki/sprints">here</a>.</p>
						</article>
						<article class="text-center col-md-4 col-push-4">
							<h1>Use it!</h1>
							<p>After every development sprint, you will find the current version up and running <a class="btn-link" role="button" href="http://baby.gonimo.com/">here</a>.</p>
							<p>Well this link currently does not work, as we have not finished any sprint yet, in the meantime you can try our old prototype.</p>
							<p><a class="btn btn-primary" role="button" href="http://mybabymonitor.org/">Visit Prototype</a></p>
						</article>
						<article class="text-center col-md-4 col-push-4">
							<h1>Source Code</h1>
							<p>Gonimo is free and open source software! You can find the code on github.</p>
							<p><a class="btn btn-primary" role="button" href="https://github.com/eskimor/mybabymonitor.org">Visit Github</a></p>
						</article>
					</section>
				</div>
			</div>
		</div>
	</main>

	<footer class="container-fluid navbar navbar-default">
		<div class="text-center vcenter">
			<p class="text-muted">Copyright &copy; <?php if(date("Y") != "2015") echo "2015 - " . date("Y"); else echo "2015"; ?> by Michael Klotzner</p>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>