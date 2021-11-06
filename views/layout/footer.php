<!-- PIE DE PÁGINA -->
<footer id="footer">
	<div class="row text-center py-3">
		<div class="col-12 col-sm-4 px-5">
			✆ +(57) 319 293 49 69 <br>
			✉ yamidjhonatan@gmail.com
			
		</div>
		<div class="d-none d-sm-block col-sm-4">
			♕MERKING<br>
			www-merking-com
		</div>
		<div class="col-12 col-sm-4">
			Carmen de Viboral<br>
			Antioquia - Colombia
		</div>
	</div>
</footer>
</div>
</body>
<script>
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$("#menu").addClass("bg-success");
		$("#menu").removeClass("fixed-top");
	} else {
		$("#menu").addClass("fixed-top");
		$(window).scroll(function() {
			if ($("#menu").offset().top > 5) {
				$("#menu").addClass("bg-success");
			} else {
				$("#menu").removeClass("bg-success");
			}
		});
	}
</script>

</html>