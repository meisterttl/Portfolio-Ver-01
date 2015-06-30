<?php 
$pageTitle="Play my games";
$pageClass="gamePage";

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
					<div class="work1 work hexagon" id="s-dicePoker">
						<h3>01</h3>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="work2 work hexagon" id="s-dnd-Adventure">
						<h3>02</h3>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="description">
						<div class="dicePoker s-dicePoker" id="p01">
							<p>It's like Playing Poker...but with Dice.</p>
							<a href="dice-poker/">Play Dice Poker</a>
						</div>
						<div class="dnd-Adventure s-dnd-Adventure" id="p02">
							<p>Survive 10 rounds with simple D&amp;D adventure game.</p>
							<a href="dnd-adventure">Play D&amp;D Adventure</a>
						</div>
					</div>
				</div>
				<button class="left arrow icon-left" id="prevButton"><span>Prev</span></button>
				<button class="right arrow icon-right" id="nextButton"><span>Next</span></button>
			</div>
			<div class="honeycomb-container">
				<div class="honeycomb-top">
					<div class="hexagon hexagon1" id="dicePoker">
						<h2>Dice Poker</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
					<div class="hexagon hexagon2" id="dnd-Adventure">
						<h2>D&amp;D Adventure</h2>
						<div class="hexface1"></div>
						<div class="hexface2"></div>
					</div>
				</div>
				<div class="honeycomb-middle">
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