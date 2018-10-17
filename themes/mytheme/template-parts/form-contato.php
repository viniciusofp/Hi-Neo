<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }
  // response messages
	$not_human       = "Human verification incorrect.";
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
	 
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
	 
	//php mailer variables
	$to = 'viniciusofp@gmail.com';
	$subject = "Someone sent a message from ".get_bloginfo('name');
	$headers = 'From: '. $email . "\r\n" .
	  'Reply-To: ' . $email . "\r\n";

	  //validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		  my_contact_form_generate_response("error", $email_invalid);
		else //email is valid
		{
			//validate presence of name and message
			if(empty($name) || empty($message)){
			  my_contact_form_generate_response("error", $missing_content);
			}
			else //ready to go!
			{
				$sent = wp_mail($to, $subject, strip_tags($message), $headers);
				if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
				else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
			}
		}


?>
<div id="respond">
  <?php echo $response; ?>
	<form action="<?php the_permalink(); ?>" method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Seu nome" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="tel" class="form-control" placeholder="Seu melhor telefone" name="message_phone" value="<?php echo esc_attr($_POST['message_phone']); ?>">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Seu melhor email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Site da sua empresa">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Melhor dia para reunião">
				</div>
			</div>
			<div class="col-12 py-2">
				<div class="form-group">
					<textarea name="" id="" cols="30" rows="10" class="form-control" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
				    <input type="hidden" name="submitted" value="1">
				</div>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-outline-light w-100">Enviar</button>
			</div>
		</div>
	</form>
</div>
	