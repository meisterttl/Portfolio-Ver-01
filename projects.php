<?php 
$pageTitle="See all my projects";
$pageClass="projectPage";

include("./templates/header.php");
?>			
<main>
	<section>
		<div class="content-block">
			<div class="widget">
				<div class="outer-circle circle">
					<div class="arc">
					</div>
				</div>
				<div class="inner-circle circle">
					<div class="work1 work hexagon" id="s-TWD">
						<h3>01</h3>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="work2 work hexagon" id="s-fieldToFork">
						<h3>02</h3>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="work3 work hexagon" id="s-thumbnail">
						<h3>03</h3>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="description">
						<div class="TWD s-TWD" id="p01">
							<p>Redesigning BCIT Technical Web Designer Program's internal website.</p>
							<a href="twd/" target="_blank">Visit Website</a>
						</div>
						<div class="fieldToFork s-fieldToFork" id="p02">
							<p>Redesigned website for 'Field to Fork Herbs', a local organic herb business.</p>
							<a href="http://fieldtoforkherbs.com" target="_blank">Visit Website</a>
						</div>
						<div class="thumbnail s-thumbnail" id="p03">
							<p>PHP script for generating thumbnail and cropping image</p>
							<a href="thumb-gen/" target="_blank">Launch Script</a>
						</div>
					</div>
				</div>
				<button class="left arrow icon-left" id="prevButton"><span>Prev</span></button>
				<button class="right arrow icon-right" id="nextButton"><span>Next</span></button>
			</div>
			<div class="honeycomb-container">
				<div class="honeycomb-top">
					<div class="hexagon hexagon1" id="TWD">
						<h2>TWD Website</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="hexagon hexagon2" id="fieldToFork">
						<h2>Field for Fork Website</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
				</div>
				<div class="honeycomb-middle">
					<div class="hexagon hexagon3" id="thumbnail">
						<h2>Thumbnail Generator</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="hexagon empty">
						<h2>Under Construction</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
				</div>
				<div class="honeycomb-bottom">
					<div class="hexagon empty">
						<h2>Under Construction</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="hexagon empty">
						<h2>Under Construction</h2>
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