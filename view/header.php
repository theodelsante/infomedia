<header>
	<a href"./" ><img id="Vaise_logo" src="./assets/img/Vaise_logo.png" alt="Logo de Vaise, retour vers l'accueil"/></a>
	<img id="map" src="./assets/img/map.jpg" alt="Plan de Lyon et focus sur le 9ème arrondissement"/>
	<nav class="navbar navbar-default" id="menu">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="./"><img id="Vaise_logo" src="./assets/img/Vaise_logo.png" alt="Logo de Vaise, retour vers l'accueil"/></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li id="home"><a href="./">Accueil</a></li>
					<li class="dropdown" id="everyday">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./">Vie pratique<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="./">Se déplacer</a></li>
							<li><a href="./">Restauration / Bars</a></li>
							<li><a href="./">Commerces</a></li>
							<li><a href="./">Associations</a></li>
							<li><a href="./">Hôtels</a></li>
						</ul>
					</li>
					<li class="dropdown" id="leisure">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./">Loisir<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="./">Espaces verts</a></a></li>
							<li><a href="./">Sports</a></li>
							<li><a href="./">Cinémas</a></li>
							<li><a href="./">Théâtres</a></li>
						</ul>
					</li>
					<li class="dropdown" id="culture">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./">Culture<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="./">Musées</a></li>
							<li><a href="./">Lieux historiques</a></li>
							<li><a href="./">Expositions</a></li>
							<li><a href="./">Médiathèque</a></li>
						</ul>
					</li>
					<li id="links"><a href="./">Liens utiles</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img class="first-slide" src="./assets/img/carousel1.jpeg" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Example headline.</h1>
					<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img class="second-slide" src="./assets/img/carousel2.jpeg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Another example headline.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img class="third-slide" src="./assets/img/carousel3.jpeg" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>One more for good measure.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>