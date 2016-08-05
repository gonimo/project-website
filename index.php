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
	foreach($html->find('h2 a') as $element) {
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
	<title>Gonimo - Good Night Monitor!</title>
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
            <li class="active"><a href="#headernavbar">Home</a></li>
            <li><a href="#mission">Our Mission</a></li>
            <li><a href="#blog">Development Blog</a></li>
            <li><a href="#more">More!</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<nav id="headernavbar" class="container-fluid navbar navbar-default">
			<div class="row center-block">
				<div class="col-xs-3">
					<a href="https://project.gonimo.com/"><img align="left" src='img/logo.svg'></img></a>
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
							<a target="_blank" href="https://www.netidee.at/netidee-home/"><img align="right" src='img/netidee-logo_RGB.png' /></a>
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
						<div class="center">
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
									<li>Open Source</li>
									<li>Security experts in the development team</li>
									<li>An intrusion will be noticed immediately</li>
									<li>Meet or exceed existing security standards and practices for web development</li>
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
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-md-12">
					<section id="blog">
						<article class="container text-center">
							<div class="well">
								<h1>Development Blog</h1>
								<p>You can find news about current development on our development blog.</p>
								<p>Latest blog entries:</p>
							</div>
							<div class="row equal">
									<?php
									$max = 3;
									for($i = 0; $i < $max; $i++) {
										echo "<div class='col-xs-" . (12/$max) . "'>";
										echo $ret[$i] . "<br />";
										echo "</div>\n";
									}
									?>
							</div>
							<p><a class="btn btn-primary" role="button" href="http://blog.gonimo.com/">Visit Gonimo Blog</a></p>
						</article>
					</section>
					<section id="more" class="row equal">
						<div class="container center-block">
						<article class="text-center col-md-4 col-push-4"> 
							<h1>Development Status</h1>
							<p>For detailed information about the current development status and what we are currently working on, you can visit our taiga instance.</p>

							<p><a class="btn btn-primary" role="button" href="https://tree.taiga.io/project/eskimo-gonimo/backlog">Visit Taiga</a></p>
						</article>
						<article class="text-center col-md-4 col-push-4">
							<h1>Use it!</h1>
							<p>After every development sprint, you will find the current version up and running <a href="http://baby.gonimo.com/">here</a>.</p>
							<p>We expect some useful application there by the end of May. In the meantime you can try our old prototype.</p>
							<p><a class="btn btn-primary" role="button" href="http://mybabymonitor.org/">Visit Prototype</a></p>
						</article>
						<article class="text-center col-md-4 col-push-4">
							<h1>Source Code</h1>
							<p>Gonimo is free and open source software! You can find the code on github.</p>
							<p><a class="btn btn-primary" role="button" href="https://github.com/gonimo">Visit Github</a></p>
						</article>
		</div>
	</main>

	<footer>
		<div class="container-fluid navbar navbar-default text-center vcenter">
			<p>Copyright &copy; <?php if(date("Y") != "2015") echo "2015 - " . date("Y"); else echo "2015"; ?> by Michael Klotzner, Robert Klotzner</p>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#navbar-top').onePageNav({
			    currentClass: 'active',
			    changeHash: false,
			    scrollThreshold: 0.15,
			    scrollSpeed: 800
			});
		});
	</script>
</body>
</html>
