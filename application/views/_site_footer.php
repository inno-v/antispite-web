	<div class="footer">
      <div class="container" style="padding-bottom:20px;">
    	 <hr />
    	 <p>Power by TonyQ, welcome to fork or contribute on Github(<a href="https://github.com/tony1223/antispite-web" target="_blank">Website</a>/<a href="https://github.com/tony1223/antispite-extension" target="_blank">Extension</a>). </p>
      </div>
    </div>


	<div id="fb-root"></div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<?php
	if(function_exists("js_section")){
		if(empty($params)){
			$params = null;
		}
		js_section($params);
	}
	?>
	</body>
</html>
