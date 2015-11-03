<header>
	<a href="./"><img id="Vaise_logo" src="./assets/img/Vaise_logo.png" alt="Logo de Vaise, retour vers l'accueil"/></a>
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
					<li id="home"><a href="./"><?php echo $json['nav']['home']; ?></a></li>
					<li class="dropdown" id="everyday">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./?page=viepratique"><?php echo $json['nav']['everyday']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="./"><?php echo $json['nav']['move']; ?></a></li>
							<li><a href="./?page=sscat"><?php echo $json['nav']['restaurants_bars']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['shops']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['associations']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['hotels']; ?></a></li>
						</ul>
					</li>
					<li class="dropdown" id="leisure">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./"><?php echo $json['nav']['leisures']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="./"><?php echo $json['nav']['parks']; ?></a></a></li>
							<li><a href="./"><?php echo $json['nav']['sports']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['cinemas']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['theaters']; ?></a></li>
						</ul>
					</li>
					<li class="dropdown" id="culture">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./"><?php echo $json['nav']['culture']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="./"><?php echo $json['nav']['museums']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['historic_places']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['exhibitions']; ?></a></li>
							<li><a href="./"><?php echo $json['nav']['media_library']; ?></a></li>
						</ul>
					</li>
					<li id="links"><a href="./?page=contact"><?php echo $json['nav']['useful_links']; ?></a></li>
					<div id="other_lang"><a href="./?lang=<?php echo $json['nav']['lang_short']; ?>" class="hidden-xs"><?php echo $json['nav']['lang_short']; ?></a><a href="./?lang=<?php echo $json['nav']['lang_short']; ?>" class="hidden-sm hidden-md hidden-lg hidden-xl"><?php echo $json['nav']['lang_long']; ?></a></div>
				</ul>
			</div>
		</div>
	</nav>
</header>