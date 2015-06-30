<?php 
$pageTitle="Know all about me";
$pageClass="aboutPage";

include("./templates/header.php");
?>			
<main>
	<section>
		<div class="content-block">
			<div class="widget">
				<div id="aboutMe">
					<p>Hello, my name is Taylor. I'm a Junior Web Developer based in the Greater Vancouver, B.C. Canada, who graduate from BCIT Technical Web Designer Certificate Program. I'm very passionate about JavaScript/jQuery and PHP coding.</p>
					<p>My main goal as a Web Developer is to bring simple, intuitive and satisfying web design to client and provide better User Experience and Web Accessibility.</p>
				</div>
				<div id="contactMe">
					<p>If you wish to contact me, please do not hesitate to call me or send me an email.</p>
					<p><span class="icon-phone">:</span> (604) 512-3217</p>
					<p><span class="icon-mail2">:</span> meisterttl@gmail.com</p>
					<p>Also check out my codes in GitHub, follow me on Twitter, and view my profile on LinkedIn.</p>
					<a href="https://github.com/meisterttl?tab=repositories" class="icon-github5"><span>Go to GitHub</span></a>
					<a href="https://twitter.com/MeisterTTL" class="icon-twitter"><span>Follow me on Twitter</span></a>
					<a href="https://ca.linkedin.com/in/taytlee" class="icon-linkedin2"><span>See my Profile on LinkedIn</span></a>
				</div>
			</div>
			<div class="honeycomb-container">
				<div class="honeycomb-top">
					<div class="hexagon">
						<a href="#aboutMe" id="aboutButton">
							<h2>About Me</h2>
							<p>Learn more about me</p>
							<div class="hexface1"></div>
							<div class="hexface2"></div>
						</a>
					</div>
					<div class="hexagon">
						<a href="#contactMe" id="contactButton">
							<h2>Contact Me</h2>
							<p>Ways to find me</p>
							<div class="hexface1"></div>
							<div class="hexface2"></div>
						</a>
					</div>
				</div>
				<div class="honeycomb-middle">
					<div class="hexagon">
						<a href="https://github.com/meisterttl?tab=repositories" target="_blank">
							<h2>See My Codes on GitHub</h2>
							<p>Visit GitHub for my codes</p>
							<div class="hexface1"></div>
							<div class="hexface2"></div>
						</a>
					</div>
					<div class="hexagon">
						<a href="https://twitter.com/MeisterTTL" target="_blank">
							<h2>Follow Me on Twitter</h2>
							<p>Visit Twitter and follow</p>
							<div class="hexface1"></div>
							<div class="hexface2"></div>
						</a>
					</div>
				</div>
				<div class="honeycomb-bottom">
					<div class="hexagon">
						<a href="https://ca.linkedin.com/in/taytlee" target="_blank">
							<h2>View My Profile on LinkedIn</h2>
							<p>Visit LinkedIn profile</p>
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
		</div>
	</section>
</main>
<?php 
include("./templates/footer.inc");
?>