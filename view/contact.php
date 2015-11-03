<link href="./assets/css/contact.css" type="text/css" rel="stylesheet">
<div class="row">
	<div id="content" class="col-md-9 col-sm-12">
		<h2>Liens utiles</h2>
		<ul id="contact_list">
			<?php
			$json['useful_links'][0]['title'] = 'Mairie';
			$json['useful_links'][0]['img'] = './assets/img/news2.jpg';
			$json['useful_links'][0]['description'] = 'La mairie de Vaise pourra vous renseigner sur les différents points administratifs.';
			$json['useful_links'][0]['address'] = '6 Place du Marché, 69009 Lyon';
			$json['useful_links'][0]['tel'] = '06 40 67 58 46';
			$json['useful_links'][0]['mail'] = 'mairie.vaise@gmail.com';
			$json['useful_links'][0]['website'] = 'http://www.mairie9.lyon.fr/';

			$json['useful_links'][1]['title'] = 'Mairie';
			$json['useful_links'][1]['img'] = './assets/img/news2.jpg';
			$json['useful_links'][1]['description'] = 'La mairie de Vaise pourra vous renseigner sur les différents points administratifs.';
			$json['useful_links'][1]['address'] = '6 Place du Marché, 69009 Lyon';
			$json['useful_links'][1]['tel'] = '06 40 67 58 46';
			$json['useful_links'][1]['mail'] = 'mairie.vaise@gmail.com';
			$json['useful_links'][1]['website'] = 'http://www.mairie9.lyon.fr/';

			$json['useful_links'][2]['title'] = 'Mairie';
			$json['useful_links'][2]['img'] = './assets/img/news2.jpg';
			$json['useful_links'][2]['description'] = 'La mairie de Vaise pourra vous renseigner sur les différents points administratifs.';
			$json['useful_links'][2]['address'] = '6 Place du Marché, 69009 Lyon';
			$json['useful_links'][2]['tel'] = '06 40 67 58 46';
			$json['useful_links'][2]['mail'] = 'mairie.vaise@gmail.com';
			$json['useful_links'][2]['website'] = 'http://www.mairie9.lyon.fr/';

			$json['useful_links'][3]['title'] = 'Mairie';
			$json['useful_links'][3]['img'] = './assets/img/news2.jpg';
			$json['useful_links'][3]['description'] = 'La mairie de Vaise pourra vous renseigner sur les différents points administratifs.';
			$json['useful_links'][3]['address'] = '6 Place du Marché, 69009 Lyon';
			$json['useful_links'][3]['tel'] = '06 40 67 58 46';
			$json['useful_links'][3]['mail'] = 'mairie.vaise@gmail.com';
			$json['useful_links'][3]['website'] = 'http://www.mairie9.lyon.fr/';

			foreach ($json['useful_links'] as $value) {
				echo '
			<li class="col-sm-6 col-xs-12">
				'.Display::zoomImage($value['title'], $value['img']).'
				<div class="contact_list_text">
					<p class="contact_description">'.$value['description'].'</p>
					<ul class="contact_list_adresse">
						<li>
							<p><span>Adresse : </span>'.$value['address'].'</p>
						</li>
						<li>
							<p><span>Téléphone : </span>'.$value['tel'].'</p>
						</li>
						<li>
							<p><span>Mail : </span><a href="mailto:'.$value['mail'].'">'.$value['mail'].'</a></p>
						</li>
						<li>
							<p><span>Site : </span><a href="'.$value['website'].'" target="_blank">'.$value['website'].'</a></p>
						</li>
					</ul>
				</div>
			</li>';
			}
			?>
		</ul>

		<div id="contact_formulaire">
			<h2>Nous contacter</h2>
			<form class="form-horizontal" role="form" method="post" action="./controller/contact.php">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" required/>
						<span id="msg_name" class="hidden alert_message">Veuillez saisir votre nom</span>
					</div>
				</div>
				<div class="form-group">
					<label for="subject" class="col-sm-2 control-label">Sujet</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet du message" required/>
						<span id="msg_subject" class="hidden alert_message">Veuillez saisir un sujet</span>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required/>
						<span id="msg_email" class="hidden alert_message">Veuillez saisir une addresse mail valide</span>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="4" id="message" name="message" required></textarea>
						<span id="msg_message" class="hidden alert_message">Veuillez saisir votre message</span>
					</div>
				</div>
				<div class="form-group hidden">
					<label for="human" class="col-sm-2 control-label">Veuillez ne pas cocher la checkbox</label>
					<div class="col-sm-10">
						<input type="checkbox" class="form-control" id="human" name="human" value="robot"/>
						<span id="msg_human" class="alert_message"></span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary"/>
					</div>
				</div>
				<div class="form-group" id="Checkbox-robot">
					<div class="col-sm-10 col-sm-offset-2">
						<span id="msg_all"></span> 
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php

	require_once('sidebar.php');

	?>
</div>
<script src="./assets/js/contact.js"></script>