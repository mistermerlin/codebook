<?php 
  $title = "Partage de codes sources "; ?>
		
	<div id="main-content">
		<div id="main-content-share-code">
			<pre class="prettiprint linenums"><?= e($data->code); ?></pre>
			<a href="share_code.php" class="btn btn-warning">Cloner</a>
			<a href="share_code.php" class="btn btn-primary">Nouveau</a>


		</div>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="assets/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="assets/js/prettify.js"></script>
    <script>
    	prettiPrint();
    </script>

  </body>
</html>

 