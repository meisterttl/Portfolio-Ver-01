<?php
session_start();
$pageTitle="MeisterTTL Webdesign";
$pageClass="indexPage";

include("./templates/header.php");
?>
<main>
	<section>
		<?php 
			if( !isset($_SESSION['initialized']) ){
		?>
			<div class="curtain-veil" id="blackCurtain">
				<div>
					<h1>Welcome to MeisterTTL Design</h1>
					<h2>Trust me, You've come to the Right Place.</h2>
					<h3>Press the Up Arrow button to remove the curtain and proceed to the Main Page</h3>
				</div>
				<button class="slideUp icon-up" id="curtainUp"><span>Slide Up</span></button>
			</div>
		<?php
				$_SESSION['initialized']=true;
			}
		?>
		<div class="content-block">
			<div class="honeycomb-top">
				<div class="hexagon empty">
					<div class="hexface1"></div>
					<div class="hexface2"></div>
				</div>
				<div class="hexagon">
					<a href="about.php#aboutMe" id="frontAboutButton">
						<h2>About Me</h2>
						<p>Learn more about me</p>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</a>
				</div>
				<div class="hexagon empty">
					<div class="hexface1"></div>
					<div class="hexface2"></div>
				</div>
			</div>
			<div class="honeycomb-middle">
				<div class="hexagon empty">
					<div class="hexface1"></div>
					<div class="hexface2"></div>
				</div>
				<div class="hexagon">
					<a href="projects.php">
						<h2>Projects</h2>
						<p>Take a closer look at my works</p>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</a>
				</div>
				<div class="hexagon">
					<a href="games.php">
						<h2>Games</h2>
						<p>Enjoy playing my games</p>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</a>
				</div>
				<div class="hexagon empty">
					<div class="hexface1"></div>
					<div class="hexface2"></div>
				</div>
			</div>
			<div class="honeycomb-bottom">
				<div class="hexagon empty">
					<div class="hexface1"></div>
					<div class="hexface2"></div>
				</div>
				<div class="hexagon">
					<a href="about.php#contactMe" id="frontContactButton">
						<h2>Contact Me</h2>
						<p>Ways to find me</p>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</a>
				</div>
				<div class="hexagon empty">
					<div class="hexface1"></div>
					<div class="hexface2"></div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php 
include("./templates/footer.inc");
?>