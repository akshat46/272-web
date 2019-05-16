
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<link rel="stylesheet" type="text/css" href="rating.css">
	<body onload="showRestaurantData('<?php
		$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		echo $url;
	?>')">
		<div class="rating-system">
			<form>
				<div class="stars">
					<input type="radio" name="star" class="star-1" id="star-1" />
					<label class="star-1" for="star-1">1</label>
					<input type="radio" name="star" class="star-2" id="star-2" />
					<label class="star-2" for="star-2">2</label>
					<input type="radio" name="star" class="star-3" id="star-3" />
					<label class="star-3" for="star-3">3</label>
					<input type="radio" name="star" class="star-4" id="star-4" />
					<label class="star-4" for="star-4">4</label>
					<input type="radio" name="star" class="star-5" id="star-5" />
					<label class="star-5" for="star-5">5</label>
					<span></span>
				</div>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="ratings.js"></script>
	</body>
</html>
