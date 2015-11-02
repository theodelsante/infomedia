 <link href="./assets/css/contact.css" type="text/css" rel="stylesheet">



<ul class="contact_list">
	<div class="row">
		<h2>Liens utiles</h2>
		<li class="col-sm-4 col-xs-12">
				<img src="./assets/img/news2.jpg" alt="Mairie Vaise">
				<div class="contact_list_title_container">
					<h3>Mairie</h3>
				</div>
				<div class="contact_list_text">
					<p class="contact_description">La mairie de Vaise pourra vous renseigner sur les différents points administratifs.</p>
					<ul class="contact_list_adresse ">
							<li>
								<p><span>Adresse :</span> 6 Place du Marché, 6120012 Lyon</p>
							</li>
							<li>
								<p><span>Téléphone :</span> 06 40 67 58 46</p>
							</li>
							<li>
								<p><span>Mail :</span>mairie.vaise@gmail.com</p>
							</li>
							<li>
								<p><span>site :</span><a href="www.mairie9.lyon.fr/">www.mairie9.lyon.fr/</a></p>
							</li>
					</ul>
				</div>
		</li>

		<li class="col-sm-4 col-xs-12">
				<img src="./assets/img/news2.jpg">
				<div class="contact_list_title_container">
					<h3>Mairie</h3>
				</div>
				<div class="contact_list_text">
					<p class="contact_description">La mairie de Vaise pourra vous renseigner sur les différents points administratifs.</p>
					<ul class="contact_list_adresse">
							<li>
								<p><span>Adresse :</span> 6 Place du Marché, 6120012 Lyon</p>
							</li>
							<li>
								<p><span>Téléphone :</span> 06 40 67 58 46</p>
							</li>
							<li>
								<p><span>Mail :</span>mairie.vaise@gmail.com</p>
							</li>
							<li>
								<p><span>site :</span><a href="www.mairie9.lyon.fr/">www.mairie9.lyon.fr/</a></p>
							</li>
					</ul>
				</div>
		</li>
	</div>

    <div class="row">
		<li class="col-sm-4 col-xs-12">
				<img src="./assets/img/news2.jpg" alt="Mairie Vaise">
				<div class="contact_list_title_container">
					<h3>Mairie</h3>
				</div>
				<div class="contact_list_text">
					<p class="contact_description">La mairie de Vaise pourra vous renseigner sur les différents points administratifs.</p>
					<ul class="contact_list_adresse ">
							<li>
								<p><span>Adresse :</span> 6 Place du Marché, 6120012 Lyon</p>
							</li>
							<li>
								<p><span>Téléphone :</span> 06 40 67 58 46</p>
							</li>
							<li>
								<p><span>Mail :</span>mairie.vaise@gmail.com</p>
							</li>
							<li>
								<p><span>site :</span><a href="www.mairie9.lyon.fr/">www.mairie9.lyon.fr/</a></p>
							</li>
					</ul>
				</div>
		</li>

		<li class="col-sm-4 col-xs-12">
				<img src="./assets/img/news2.jpg" alt="Mairie Vaise">
				<div class="contact_list_title_container">
					<h3>Mairie</h3>
				</div>
				<div class="contact_list_text">
					<p class="contact_description">La mairie de Vaise pourra vous renseigner sur les différents points administratifs.</p>
					<ul class="contact_list_adresse ">
							<li>
								<p><span>Adresse :</span> 6 Place du Marché, 6120012 Lyon</p>
							</li>
							<li>
								<p><span>Téléphone :</span> 06 40 67 58 46</p>
							</li>
							<li>
								<p><span>Mail :</span>mairie.vaise@gmail.com</p>
							</li>
							<li>
								<p><span>site :</span><a href="www.mairie9.lyon.fr/">www.mairie9.lyon.fr/</a></p>
							</li>
					</ul>
				</div>
		</li>
	</div>
</ul>

<div class="contact_formulaire">
	<h3>Nous contacter</h3>
	<form class="form-horizontal" role="form" method="post" action="./controller/contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" required>
            <span id="msg_name" class="hidden">Veuillez saisir votre nom</span>
        </div>
    </div>
    <div class="form-group">
        <label for="subject" class="col-sm-2 control-label">Sujet</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet du message" required>
             <span id="msg_subject" class="hidden">Veuillez saisir un sujet</span>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
            <span id="msg_email" class="hidden">Veuillez saisir une addresse mail valide</span>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" id="message" name="message" required></textarea>
             <span id="msg_message" class="hidden">Veuillez saisir votre message</span>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">Veuillez ne pas cocher la checkbox</label>
        <div class="col-sm-10">
            <input type="checkbox" class="form-control" id="human" name="human" value="robot">
             <span id="msg_human" class="hidden"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <span id="msg_all"></span> 
        </div>
    </div>
</form>

<script src="./assets/js/contact.js"></script>
