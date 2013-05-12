<?php include 'header.php'; ?>
<body>

  <?php include 'navigate.php'; ?>
      <section class="container">
	  <p class="hr"></p>
    <section class="row">
      <article class="span8">
	<hgroup>
	  <h1>Contact</h1>
	</hgroup>
		<form name="ajax-form" id="ajax-form" method="post" action="message.php" class="well">
		  <input name="name" type="text" class="span4" placeholder="Name"><br>
		  <input name="email" type="email" class="span4" placeholder="Email"><br>
		  <input name="subject" type="text" class="span4" placeholder="Subject"><br>
		  <textarea name="message" class="span7" placeholder="Message"></textarea>
		  <input name="human" placeholder="*What is 5 + 7 ? - (Anti-spam)">
		  <input id="submit" name="submit" type="submit" value="Submit" class="btn">
		</form>
      </article>
      <?php include 'sidebar.php'; ?>
      </section>
	  <p class="hr"></p>

<?php include 'footer.php'; ?>

    </section><!-- /container -->

<script type="text/javascript">
  jQuery(document).ready(function () { // wait until the document is ready
      jQuery('#send').click(function(){ // when the button is clicked the code executes
	  jQuery('.error').fadeOut('slow'); // reset the error messages (hides them)
  
	  var error = false; // we will set this true if the form isn't valid
  
	  var name = jQuery('input#name').val(); // get the value of the input field
	  if(name == "" || name == " ") {
	      jQuery('#err-name').fadeIn('slow'); // show the error message
	      error = true; // change the error state to true
	  }
  
	  var subject = jQuery('input#subject').val(); // get the value of the input field
	  if(subject == "" || subject == " ") {
	      jQuery('#err-subject').fadeIn('slow'); // show the error message
	      error = true; // change the error state to true
	  }

	  var message = jQuery('input#message').val(); // get the value of the input field
	  if(message == "" || message == " ") {
	      jQuery('#err-message').fadeIn('slow'); // show the error message
	      error = true; // change the error state to true
	  }
  
	  var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
	  var email = jQuery('input#email').val(); // get the value of the input field
	  if (email == "" || email == " ") { // check if the field is empty
	      jQuery('#err-email').fadeIn('slow'); // error - empty
	      error = true;
  
	  }else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable
	      jQuery('#err-emailvld').fadeIn('slow'); // error - not right format
	      error = true;
	  }
  
	  if(error == true) {
	      jQuery('#err-form').slideDown('slow');
	      return false;
	  }
  
	  var data_string = jQuery('#ajax-form').serialize(); // Collect data from form
	  //alert(data_string);
  
	  jQuery.ajax({
	      type: "POST",
	      url: jQuery('#ajax-form').attr('action'),
	      data: data_string,
	      timeout: 6000,
	      error: function(request,error) {
		  if (error == "timeout") {
		      jQuery('#err-timedout').slideDown('slow');
		  }
		  else {
		      jQuery('#err-state').slideDown('slow');
		      jQuery("#err-state").html('An error occurred: ' + error + '');
		  }
	      },
	      success: function() {
		  jQuery('#ajax-form').slideUp('slow');
		  jQuery('#ajaxsuccess').slideDown('slow');
	      }
	  });
  
	  return false; // stops user browser being directed to the php file
      }); // end click function
  });
</script>
<?php include 'scripts.php'; ?>
  </body>
</html>