<link href="./assets/css/usefull_links.css" type="text/css" rel="stylesheet" media="all"/>
<div class="row">
	<div id="content" class="col-md-9 col-sm-12">
		<h2><?php echo $json['nav']['usefull_links']; ?></h2>
		<ul id="contact_list">
			<?php
			foreach ($json['contact']['usefull_links'] as $value) {
				echo '
			<li class="col-sm-6 col-xs-12">
				'.Display::zoomImage($value['title'], $value['img']).'
				<div class="contact_list_text">
					<p class="contact_description">'.$value['description'].'</p>
					<ul class="contact_list_adresse">
						<li>
							<p><span>'.$json['contact']['address'].' : </span>'.$value['address'].'</p>
						</li>
						<li>
							<p><span>'.$json['contact']['phone'].' : </span>'.$value['tel'].'</p>
						</li>';
						if (isset($value['mail'])) {
							echo '<li>
							<p><span>Mail : </span><a href="mailto:'.$value['mail'].'">'.$value['mail'].'</a></p>
						</li>';
						}
						echo '<li>
							<p><span>'.$json['contact']['website'].' : </span><a href="'.$value['website'].'" target="_blank">'.$value['website-display'].'</a></p>
						</li>
					</ul>
				</div>
			</li>';
			}
			?>
		</ul>

		<div id="contact_formulaire">
			<h2><?php echo $json['contact']['contact_us']; ?></h2>
			<form class="form-horizontal" role="form" method="post" action="./controller/contact.php">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label"><?php echo $json['contact']['name']; ?></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $json['contact']['placeholder_name']; ?>" required/>
						<span id="msg_name" class="hidden alert_message"><?php echo $json['contact']['name_error']; ?></span>
					</div>
				</div>
				<div class="form-group">
					<label for="subject" class="col-sm-2 control-label"><?php echo $json['contact']['subject']; ?></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo $json['contact']['placeholder_subject']; ?>" required/>
						<span id="msg_subject" class="hidden alert_message"><?php echo $json['contact']['subject_error']; ?></span>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required/>
						<span id="msg_email" class="hidden alert_message"><?php echo $json['contact']['mail_error']; ?></span>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="4" id="message" name="message" required></textarea>
						<span id="msg_message" class="hidden alert_message"><?php echo $json['contact']['message_error']; ?></span>
					</div>
				</div>
				<div class="form-group hidden">
					<input type="checkbox" class="form-control" id="human" name="human" value="robot"/>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="<?php echo $json['contact']['send']; ?>" class="btn btn-primary"/>
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
<script src="./assets/js/usefull_links.js" type="text/javascript"></script>