<!-- PIE DE PÁGINA -->
<div class="mt-5 pt-5 pt-sm-0">
	<br><br>
</div>
<footer id="footer">
	<div class="row text-center py-4">
		<div class="col-12 col-sm-4 px-5">
			✆ +(57) 319 293 49 69 <br>
			✉ yamidjhonatan@gmail.com
			
		</div>
		<div class="d-none d-sm-block col-sm-4">
			<a  class="text-white" href="#">¿Como realizar la compra<br>
			en la página?</a>	
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