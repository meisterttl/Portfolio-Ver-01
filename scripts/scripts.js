//JavaScript Document

var frontPage=document.getElementById('blackCurtain')

var $slideCurtain=$('#curtainUp');
var $blackCurtain=$('#blackCurtain');
var $hexagons=$('.indexPage .hexagon');

if(frontPage){
	var randomEffect=Math.floor(Math.random()*3);
	if(randomEffect==0){
		$hexagons.addClass('flyRight');
	}else if(randomEffect==1){
		$hexagons.addClass('shrink');
	}else if(randomEffect==2){
		$hexagons.addClass('expand');
	}
}

$slideCurtain.click(function(){
	$blackCurtain.addClass('initialTug');
	$blackCurtain.animate({top: "-100%"});
	$slideCurtain.animate({top: 0}).fadeOut();
	
	var $windowWidth=$(window).width();
	if( $windowWidth<=865 ){
		var $hexagons=$('.indexPage .hexagon').not('div.honeycomb-middle .hexagon.empty');
	}else if( $windowWidth<=660 ){
		var $hexagons=$('.indexPage .hexagon').not('.hexagon.empty');
	}else{
		var $hexagons=$('.indexPage .hexagon');
	}
	
	setTimeout(function(){
		$hexagons.each(function(i){
			var $this=$(this);
			setTimeout(function(){
				if(randomEffect==0){
					$this.removeClass('flyRight');
				}else if(randomEffect==1){
					$this.removeClass('shrink');
				}else if(randomEffect==2){
					$this.removeClass('expand');
				}
			},150*i);
		});
	},500);
});

var frontRedirectToAbout=window.location.href.split('#');
var frontRedirectToAboutID=frontRedirectToAbout[1];
if(frontRedirectToAbout.length==2){
	var $windowWidth=$(window).width();
	if( $windowWidth<=890 ){
		$('div#'+frontRedirectToAboutID).addClass('divLoad');
		$('div#'+frontRedirectToAboutID).siblings('div').addClass('divLoad');
	}else{
		$('div#'+frontRedirectToAboutID).addClass('divLoad');
	}
}

var $aboutContact=$('#aboutButton, #contactButton');
$aboutContact.click(function(){
	var target=$(this).attr('href').split('#');
	var targetID=target[1];
	$('div#'+targetID).siblings('div').fadeOut('fast', function(){
		$('div#'+targetID).fadeIn('slow');
	});
});

var $smallHexagons=$('.work.hexagon');
var $projectDescription=$('.description > div');
var descriptionAmount=$projectDescription.length;
$projectDescription.first().addClass('divLoad');
$smallHexagons.first().addClass('hovered');

var $prevButton=$('#prevButton');
var $nextButton=$('#nextButton');
var numCount=1;

$prevButton.click(function(){
	if(numCount==1){
		$nextDescription=$('#p01');
		$nextHexagon=$('.work1');
		numCount=descriptionAmount+1;
	}else{
		$nextDescription=$('#p0'+numCount);
		$nextHexagon=$('.work'+numCount);
	}
	numCount--;
	$prevDescription=$('#p0'+numCount);
	$prevHexagon=$('.work'+numCount);
	$nextDescription.fadeOut('fast', function(){
		$prevDescription.fadeIn('slow');
	});
	$prevHexagon.addClass('hovered');
	$nextHexagon.removeClass('hovered');
});

$nextButton.click(function(){
	if(numCount==descriptionAmount){
		$prevDescription=$('#p0'+descriptionAmount);
		$prevHexagon=$('.work'+descriptionAmount);
		numCount=0;
	}else{
		$prevDescription=$('#p0'+numCount);
		$prevHexagon=$('.work'+numCount)
	}
	numCount++;
	$nextDescription=$('#p0'+numCount);
	$nextHexagon=$('.work'+numCount);
	$prevDescription.fadeOut('fast', function(){
		$nextDescription.fadeIn('slow');
	});
	$prevHexagon.removeClass('hovered');
	$nextHexagon.addClass('hovered');
});

var $bigHoneycombs=$('.honeycomb-container').find('.hexagon').not('.empty');
$bigHoneycombs.click(function(){
	var targetHex=$(this).attr('id');
	var targetNumber=$(this).attr('class').split(' ')[1];
	if(targetNumber=='hexagon1'){
		numCount=1;
	}else if(targetNumber=='hexagon2'){
		numCount=2;
	}else if(targetNumber=='hexagon3'){
		numCount=3;
	}
	$smallHoneycombs.removeClass('hovered');
	$('div.work'+numCount).addClass('hovered');
	$('div.'+targetHex).siblings('div').hide();
	$('div.'+targetHex).fadeIn('slow');
});

var $smallHoneycombs=$('.work.hexagon');
$smallHoneycombs.click(function(){
	var targetHex=$(this).attr('id');
	var targetNumber=$(this).attr('class').split(' ')[0];
	if(targetNumber=='work1'){
		numCount=1;
	}else if(targetNumber=='work2'){
		numCount=2;
	}else if(targetNumber=='work3'){
		numCount=3;
	}
	$smallHoneycombs.removeClass('hovered');
	$(this).addClass('hovered');
	$('div.'+targetHex).siblings('div').hide();
	$('div.'+targetHex).fadeIn('slow');
});

var $mobileMenu=$('#showMobileMenu');
$mobileMenu.click(function(){
	$('nav ul').toggleClass('showMenu');
});