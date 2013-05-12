<?php include 'header.php'; ?>
  <body>
    <?php include 'navigate.php'; ?>
	<section class="container">
	  <?php include 'carousel.php'; ?>
	  <article class="row">
	    <article class="span4">
	      <h3>Front Cover</h3>
	      <a href="samples.php"><img src="img/front_cover.jpg" alt="Thumbnail"></a>
	    </article>
	    <article class="span4">
	      <h3>Back Cover</h3>
	      <a href="samples.php"><img src="img/back_cover.jpg" alt="Thumbnail"></a>
	    </article>
	    <article class="span4">
	      <hgroup>
		<h3>Details</h3>
	      </hgroup>
		<blockquote>Married to a Gringo is an simple book containing all of the wonderful and
		frustrating things that generally happen when married to a gringo. The book is based
		on my experiences while married to "Rubilindo" and the experiences of some of my
		friends whom are also in inter-racial/inter-cultural relationships.
		</blockquote>
		<p><a class="btn" href="about.php">About the Book &raquo;</a></p>
	    </article>
	  </article>
	  <p class="hr"></p>

<?php include 'footer.php'; ?>

    </section>

<?php include 'scripts.php'; ?>

    <script>
      $('.carousel').carousel({
	interval: 5000
      })
    </script>

  </body>
</html>
