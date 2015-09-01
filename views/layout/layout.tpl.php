<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?=$title ?></title>
	<link rel="stylesheet" href="/assets/css/messages.css">
	<link rel="stylesheet" href="/assets/css/styles.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
	<header>
		<nav class="brown" >
			<div class="nav-wrapper container brown">
				<a href="#!" class="brand-logo">CoffeeMeter</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html"><i class="material-icons">search</i></a></li>
					</ul>
			</div>
		</nav>
	</header>


	<section class="container">
		<?=$yield ?>
	</section>

	<script src="http://code.jquery.com/jquery-2.1.4.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="/assets/js/messages.js" ></script>
    <script src="/assets/js/script.js" ></script>
</body>
</html>
