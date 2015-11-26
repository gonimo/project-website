<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/mainstyle.css">
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<title>Gonimo - First web-based baby monitor!</title>
</head>
<body>
	<header>
		<div class="left">
			<img align="left"  src='http://pitch.mybabymonitor.org/src/pix/logo.svg'></img>
		</div>
		<div class="middle">
			<div class="container-text">
				<div id="top-text">
					<div id="top-text-container">
						<p>Good Night Monitor</p>
					</div>
				</div>
				<div id="center-text">
					<div id="center-text-container">
						<h1>Gonimo.com</h1>
					</div>
				</div>
				<div id="bottom-text">
					<div id="bottom-text-container">
						<p>The first web-based baby monitor!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div id="split_vertical_box1">
				<img align="right"  src='http://data.gonimo.com/pix/netidee-logo_RGB.png' />
			</div>
			<div id="split_vertical_box2">
				<p>This project is funded</p>
				<p>by netidee!</p>
			</div>
		</div>
	</header>

	<main>
		<article>
			<h1>DEVELOPMENT BLOG</h1>
			<p>You can find news about current development on our <a href="http://blog.gonimo.com/">development blog</a>.</p>
		</article>
		<article>
		<h1>DEVELOPMENT STATUS</h1>
		<p>For detailed information about the current development status and what we are currently working on you can visit our <a href="https://tree.taiga.io/project/eskimo-gonimo/backlog">taiga</a> instance.</p>
		<p>More information about our sprints can be found <a href="https://tree.taiga.io/project/eskimo-gonimo/wiki/sprints">here</a>.</p>
		</article>
		<article>
		<h1>USE IT!</h1>
		<p>After every development sprint, you will find the current version up and running <a href="http://baby.gonimo.com/">here</a>.</p>
		<p>Well this link currently does not work, as we have not finished any sprint yet, in the meantime you can try our old prototype <a href="http://mybabymonitor.org/">here</a>.</p>
		</article>
		<article>
		<h1>SOURCE CODE</h1>
		<p>gonimo is free and open source software! You can find the code on <a href="https://github.com/eskimor/mybabymonitor.org">github</a>.</p>
		</article>
		<article>
		<h1>GOAL OF GONIMO.COM</h1>
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
			<li>offer"Push to talk" to your baby</li>
			<li>allow multiple parent devices to connect simultaneously to the same baby device</li>
			<li>offer Sound level visualization: "See" your baby scream</li>
			<li>offer Android Wrapper application. Find it on Google Play, maybe additional features.</li>
			<li>be a great replacement for traditional devices &amp; native apps</li>
		</ul>
		</article>
	</main>

	<footer>
		Copyright &copy; <?php if(date("Y") != "2015") echo "2015 - " . date("Y"); else echo "2015"; ?> by Michael Klotzner
	</footer>

</body>
</html>