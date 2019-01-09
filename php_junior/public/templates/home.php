
<main>
	<article>
	<div class="container">
	    <div class="row">
	      	<?php 
	        	foreach ($items as $item) {
	    	    	include 'components/card.php';
	        	}
	      	?>
	    </div>
	</div>
	</article>



    <?php if (!$coockieOk) {
        include('cookie_form.php');
     } ?>

</main>
