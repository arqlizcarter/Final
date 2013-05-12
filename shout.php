<?php include 'header.php'; ?>
<body>
  <?php include 'navigate.php'; ?>
      <section class="container">
	  <p class="hr"></p>
    <section class="row">
      <article class="span8">
	<hgroup>
	  <h1>Share Your Story</h1>
	</hgroup>
        <form class="well" method="post" action="connect.php">
            <input placeholder="Your Name?" type="text" id="name" name="name"/><br />
	    <input placeholder="Where Are You From?" type="text" name="ufrom" value="" id="ufrom" onkeyup="lookup(this.value);" onblur="fill();" /><br />
	    <figure class="suggestionsBox" id="suggestions" style="display: none;">
		    <img src="img/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
		    <figcaption class="suggestionList" id="autoSuggestionsList">
			    &nbsp;
		    </figcaption>
	    </figure>
	    <input placeholder="Significant Other From?" type="text" name="sfrom" value="" id="sfrom" onkeyup="lookupb(this.value);" onblur="fillb();" /><br />
	    <figure class="suggestionsBox" id="suggestionsb" style="display: none;">
		    <img src="img/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
		    <figcaption class="suggestionList" id="autoSuggestionsListb">
			    &nbsp;
		    </figcaption>
	    </figure>
	    <input placeholder="Place of Residency?" type="text" name="pfrom" value="" id="pfrom" onkeyup="lookupc(this.value);" onblur="fillc();" /><br />
	    <figure class="suggestionsBox" id="suggestionsc" style="display: none;">
		    <img src="img/upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
		    <figcaption class="suggestionList" id="autoSuggestionsListc">
			    &nbsp;
		    </figcaption>
	    </figure>
	    <input placeholder="Time Together?" type="text" id="ttog" name="ttog" /><br />
	    <input placeholder="City of Residency?" type="text" id="city" name="city" /><br />
            <input placeholder="Community Message" type="text" id="message" name="message" class="message" /><br />
	    <input type="submit" id="submit" value="Submit" class="btn"/>
	</form>
        <p id="connect">
            
        </p>
	<hgroup>
	  <h2>Share Comments with the Community</h2>
	</hgroup>
 <div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = 'marriedtoagringo';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </article>
      <?php include 'sidebar.php'; ?>
      </section>
	  <p class="hr"></p>
<?php include 'footer.php'; ?>

    </section><!-- /container -->
<?php include 'scripts.php'; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
$(function() {
    
    //populating shoutbox the first time
    refresh_shoutbox();
    // recurring refresh every 15 seconds
    setInterval("refresh_shoutbox()", 15000);

    $("#submit").click(function() {
        // getting the values that user typed
        var name    = $("#name").val();
	var ufrom   = $("#ufrom").val();
	var sfrom   = $("#sfrom").val();
	var pfrom   = $("#pfrom").val();
	var ttog    = $("#ttog").val();
	var message = $("#message").val();
	var city = $("#city").val();
	if(message.length == 0) {
	  var message = 'Nothing';
	}
	if(city.length == 0) {
	  var city = 'Nothing';
	}
        // forming the queryString
        var data = 'name=' + name + '&ufrom=' + ufrom + '&sfrom=' + sfrom + '&pfrom=' + pfrom + '&city=' + city + '&ttog=' + ttog + '&message=' + message;
	alert('Message has been submitted.')
        // ajax call
        $.ajax({
            type: "POST",
            url: "connect.php",
            data: data,
            success: function(html){ // this happen after we get result
                $("#connect").slideToggle(500, function(){
                    $(this).html(html).slideToggle(500);
                    $("#message").val("");
                });
          }
        });    
        return false;
    });
});

function refresh_shoutbox() {
    var data = 'refresh=1';
    
    $.ajax({
            type: "POST",
            url: "connect.php",
            data: data,
            success: function(html){ // this happen after we get result
                $("#connect").html(html);
            }
        });
}
function lookupc(pfrom) {
	if(pfrom.length == 0) {
		// Hide the suggestion box.
		$('#suggestionsc').hide();
	}
	else {
		$.post("rpc3.php", {queryString: ""+pfrom+""}, function(data){
			if(data.length >0) {
				$('#suggestionsc').show();
				$('#autoSuggestionsListc').html(data);
			}
		});
	}
} // lookup

function fillc(thisValue) {
	$('#pfrom').val(thisValue);
	setTimeout("$('#suggestionsc').hide();", 200);
}

function lookupb(sfrom) {
	if(sfrom.length == 0) {
		// Hide the suggestion box.
		$('#suggestionsb').hide();
	}
	else {
		$.post("rpc2.php", {queryString: ""+sfrom+""}, function(data){
			if(data.length >0) {
				$('#suggestionsb').show();
				$('#autoSuggestionsListb').html(data);
			}
		});
	}
} // lookup

function fillb(thisValueb) {
	$('#sfrom').val(thisValueb);
	setTimeout("$('#suggestionsb').hide();", 200);
}

function lookup(ufrom) {
	if(ufrom.length == 0) {
		// Hide the suggestion box.
		$('#suggestions').hide();
	}
	else {
		$.post("rpc.php", {queryString: ""+ufrom+""}, function(data){
			if(data.length >0) {
				$('#suggestions').show();
				$('#autoSuggestionsList').html(data);
			}
		});
	}
} // lookup

function fill(thisValue) {
	$('#ufrom').val(thisValue);
	setTimeout("$('#suggestions').hide();", 200);
}
</script>
  </body>
</html>