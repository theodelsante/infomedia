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
						<a class="dropdown-toggle" data-toggle="dropdown" href="./?page=category&main=everyday"><?php echo $json['nav']['everyday']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="./?page=sscat&main=everyday&details=move"><?php echo $json['nav']['move']; ?></a></li>
							<li><a href="./?page=sscat&main=everyday&details=restaurants_bars"><?php echo $json['nav']['restaurants_bars']; ?></a></li>
							<li><a href="./?page=sscat&main=everyday&details=shops"><?php echo $json['nav']['shops']; ?></a></li>
							<li><a href="./?page=sscat&main=everyday&details=associations"><?php echo $json['nav']['associations']; ?></a></li>
							<li><a href="./?page=sscat&main=everyday&details=hotels"><?php echo $json['nav']['hotels']; ?></a></li>
						</ul>
					</li>
					<li class="dropdown" id="leisure">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./?page=category&main=leisures"><?php echo $json['nav']['leisures']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="./?page=sscat&main=leisures&details=parks"><?php echo $json['nav']['parks']; ?></a></a></li>
							<li><a href="./?page=sscat&main=leisures&details=sports"><?php echo $json['nav']['sports']; ?></a></li>
							<li><a href="./?page=sscat&main=leisures&details=cinemas"><?php echo $json['nav']['cinemas']; ?></a></li>
							<li><a href="./?page=sscat&main=leisures&details=theaters"><?php echo $json['nav']['theaters']; ?></a></li>
						</ul>
					</li>
					<li class="dropdown" id="culture">
						<a class="dropdown-toggle" data-toggle="dropdown" href="./?page=category&main=culture"><?php echo $json['nav']['culture']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="./?page=sscat&main=culture&details=museums"><?php echo $json['nav']['museums']; ?></a></li>
							<li><a href="./?page=sscat&main=culture&details=historic_places"><?php echo $json['nav']['historic_places']; ?></a></li>
							<li><a href="./?page=sscat&main=culture&details=exhibitions"><?php echo $json['nav']['exhibitions']; ?></a></li>
							<li><a href="./?page=sscat&main=culture&details=media_library"><?php echo $json['nav']['media_library']; ?></a></li>
						</ul>
					</li>
					<li id="links"><a href="./?page=usefull_links"><?php echo $json['nav']['usefull_links']; ?></a></li>
					<div id="other_lang"><a href="./?lang=<?php echo $json['nav']['lang_short']; if (isset($page) && $page != 'home') { echo '&page='.$page; } if (isset($page) && $page == 'news' && isset($_GET['id'])) { echo '&id='.$_GET['id']; } else if (isset($page) && $page == 'category' && isset($_GET['main'])) { echo '&main='.$_GET['main']; } else if (isset($page) && $page == 'sscat' && isset($_GET['details'])) { echo '&details='.$_GET['details']; }?>"><span class="hidden-xs"><?php echo $json['nav']['lang_short']; ?></span><span class="hidden-sm hidden-md hidden-lg hidden-xl"><?php echo $json['nav']['lang_long']; ?></span></a></div>
				</ul>
			</div>
		</div>
	</nav>
</header>