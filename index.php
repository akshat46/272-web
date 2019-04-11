<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
	<link rel="stylesheet" type="text/css" href="index.css">
  <body>
    <div class="main-body">
			<div class="css-selector-demo"><div class="el"></div></div>
			<div class="nav-bar">
				<div class="title"><div id="title-text">Leap</div><div id="box"></div></div>
				<div class="nav-item-list">
					<div id="indicator"></div>
					<div class="nav-item"><div class="item-text" id="1">Home</div></div><br>
					<div class="nav-item"><div class="item-text" id="2">About</div></div><br>
					<div class="nav-item"><div class="item-text" id="3">Products</div></div><br>
					<div class="nav-item"><div class="item-text" id="4">News</div></div><br>
					<div class="nav-item"><div class="item-text" id="5">Contacts</div></div><br>
                    <div class="nav-item"><div class="item-text" id="6"><a href="/users.php">Users</a></div></div><br>
				</div>
			</div>
		</div>

		<div class="content">
			<div class="content-box">
				<div id="title">
					Future is now.
				</div>
				<div id="content">
					A company that provides prime life upgrades and updates at affordable prices. We aim to make luxurious lives affordable.
				</div>
			</div>
		<a id="signin" href="/login.html">Sign In</a>
		<a id="reference" href="https://codepen.io/akshat46/pen/Jwxvzw?editors=1100">Design is based something I worked on few months ago.</a>
		</div>
  </body>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="anime.js"></script>
	<script>
	var n_iter = [...Array(5).keys()];

	var current = -1;
	var elements = [];
	var distance = -1;
	var clicked = false;

	$(window).resize(function(){
		$(".content").width($( window ).width()-351);
	})

	$(document).ready(function(){
		$(".content").width($( window ).width()-351);
		setElements();
		distance = $(".nav-item").eq(1).offset().top - $(".nav-item").eq(0).offset().top
		$(".nav-item").eq(0).children().addClass("selected");
		current = 0;
		//navOnSlide();
	})

	function setElements(){
		$('.nav-item').each(function(){
			elements.push(getIndex($(this).index()));
		});
	}

	function resetSelection(i){
		$(".nav-item").eq(current).children().removeClass("selected");
		current = i;
	}


	$( ".nav-item" ).click(function() {
		clicked = true;
		$(this).children().addClass("selected");
		clicked_index = getIndex($(this).index());
		if(clicked_index != current){
			resetSelection(clicked_index);
		}
	});

	$(".nav-item").hover(function(){
		$(this).children().addClass("hovered");
		mouseOn(getIndex($(this).index()));
	}, function(){
		$(this).children().removeClass("hovered");
		var i = getIndex($(this).index())
		mouseLeave(i);
	});

	$(".nav-bar").hover(function(){
		navOn();
	}, function(){
		navOff();
	});

	function navOn(){
		var el = elements.filter(a => a != current);
		el.map(function(e){
			$(".nav-item").eq(e).children().addClass("menu-hovered");
		});
		navSlide(true);
	}

	function navOff(){
		var el = elements.filter(a => a != current);

		el.map(function(e){
			$(".nav-item").eq(e).children().removeClass("menu-hovered");
		});
		navSlide(false);
	}

	function mouseOn(i){
		clicked = false;
		var top = calcTop(i);
		moveIndicator(top);
	}

	function mouseLeave(i){
		if(!clicked){
			var top = calcTop(current);
			moveIndicator(top);
		}
	}

	function calcTop(i){
		if(i==0){
			return 33;
		}
		else{
			return (distance*i)+33;
		}
	}

	function navSlide(on){
		var s = document.querySelectorAll('.nav-item:nth-child(' + (current+1)*2 + ')');

		var el = elements.filter(a => a != current);
		var t = [];
		el.map(function(e){
			e+=1;
			var u = document.querySelectorAll('.nav-item:nth-child(' + e*2 + ')');
			t.push(u);
		});

		var y = (on ? 10 : 0);
		anime({
			targets: s,
			left: y,
			duration: 600,
			delay: 40,
			easing: 'easeInOutQuad',
		});
		var x = (on ? 20 : 0);
		anime({
			targets: t,
			left: x,
			duration: 600,
			delay: anime.stagger(80),
			easing: 'easeInOutQuad',
		});
		var z = (on ? 10 : 0);
		anime({
			targets: '#indicator',
			left: z,
			duration: 600,
			delay: 200,
			easing: 'easeInOutCubic',
		});
	}

	function navSlideSelected(){
		anime({
			targets: '.menu-hovered',
			left: -10,
			duration: 800,
			delay: anime.stagger(80),
			easing: 'easeInOutQuad',
		});
	}

	function moveIndicator(t, d = 500){
		anime({
			targets: '#indicator',
			top: t,
			duration: d,
			delay: 200,
			easing: 'easeInOutSine',
		})
	}

	function getIndex(i){
		return i = ((i+1)/2)-1;
	}

	$("#1").click(function(){
		$("#title").html("Future is now.");
		$("#content").html('A company that provides prime life upgrades and updates at affordable prices. We aim to make luxurious lives affordable.');
	});

	$("#2").click(function(){
		$("#title").html("About");
		$("#content").html("Flying you to future.");
	});

	$("#3").click(function(){
		$("#title").html("Products");
		$("#content").html("<br><strong>Free Trial</strong> includes a Leap 8 years from the end of your teenage to a semi-luxurious life,  with a job in reputative company, weekend blasts, and an exclusive loss of sense of purpose! <br><br> <strong>Platinum package</strong> is where you would want to be. Leap all the way to the time when you have the keys to your own house, two cars, a well settled family (two human partners and 1-3 pets), and an age where you are too old to go to house parties but capable of compensating for it with your artsy vacation instagram!");
	});

	$("#4").click(function(){
		$("#title").html("News");
		$("#content").html("Coming soon..");
	});

	$("#5").click(function(){
		$("#title").html("Contacts");
		$("#content").html('<?php
	$csv = array_map('str_getcsv', file('contacts.csv'));
	echo implode(" ",$csv[0]);
	?><br><?php
	echo implode(" ",$csv[1]);
	?><br><?php
	echo implode(" ",$csv[2]);?>');
	});
	</script>
</html>
