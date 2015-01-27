<?php
/**
 * File: footer.php
 * Date: 20.01.2015
 * Time: 21:12
 */
?>
</main>
<footer>
	<div class="container">
		<div class="auth left"><img src="images/lock.png"></div>
		<div class="copyright center">© 2015, Это мой сайт, пожалуйста, не копируйте и не воруйте его</div>
	</div>
</footer>
</div>
<script src="js/jquery/jquery-1.11.2.min.js"></script>
<script src="js/messi/messi.js"></script>
<script>
	jQuery.noConflict ();
	(function($) {
		$(document).ready(function() {
			$('#add-work').on('click', function() {
				Messi.load('blocks/add-work.php', {title: 'Добавление проекта', modal: true});
			});
		});
	})(jQuery);
</script>
</body>
</html>