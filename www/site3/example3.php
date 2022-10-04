<html>
	<body>
		<h1>Jubilación</h1>

		<?php
			function edad_en_10_años($edad) {
				return $edad + 10;
			}

			function mensaje($age) {
				if (edad_en_10_años($age) > 65) {
					return "En 10 años tendrás edad de jubilación";
				} else {
					return "¡Disfruta de tu tiempo!";
				}
			}

		?>
	</body>
</html>
