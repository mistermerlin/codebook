
 <?php
  $title = "Partage de codes sources "; ?>
		
	<div id="main-content">
		<div id="main-content-share-code">
			<form action="" autocomplete="off">
				<textarea name="code" id="code" required="required" placeholder="Entrer du codes ici ..."></textarea>
				<div class="btn-group nav">
				<a href="share_code.php" class="btn btn-danger">Tout effacer</a>
				<input type="submit" name="save" value="Enregistrer" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="assets/js/bootstrap.min.js" ></script>
    <script src="assets/js/tabby.min.js" ></script>
    <script>
    	$("#code").tabby();
    	$("#code").height( $(window).height() - 50 );
    </script>

  </body>
</html>