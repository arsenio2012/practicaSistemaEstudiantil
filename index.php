<?php require 'resources/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo "$title $vertion"; ?></title>
	<link rel="stylesheet" href="<?php echo $server; ?>resources/styles/semantic.min.css">
	<link rel="stylesheet" href="<?php echo $server; ?>resources/styles/main.css">
	<link rel="stylesheet" href="<?php echo $server; ?>resources/styles/mainMediaQuery.css">
	<link rel="stylesheet" href="<?php echo $server; ?>resources/styles/datatables.min.css">
	<link rel="icon" href="<?php echo $logo; ?>">
</head>
<body <?php echo $class_body?>>
	<?php 
		/*Section */
		if(isset($views)){
			// Si hay un navbar se muestra
			if(isset($navbar)){
				require $navbar;
			}

			// Vistas normales dependiente del estado de sessión
			require $views;

			// Si hay un div grid se cierra despues de vista
			if(isset($cerrarGrid)){
				echo $cerrarGrid;
			}

			if(isset($cerrarUltimoRow)){
				echo $cerrarUltimoRow;
			}
		}
		
		/* Footer */
		if(isset($footer)){
			require $footer;
		}
		
	?>
	<!-- Script -->
	<script src="<?php echo $server; ?>resources/scripts/JQuery-v3-6-0.js"></script>
	<script src="<?php echo $server; ?>resources/scripts/semantic.min.js"></script>
	<script src="<?php echo $server; ?>resources/scripts/main.js"></script>
	<script src="<?php echo $server; ?>resources/scripts/datatables.min.js"></script>
	<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>-->
</body>
</html>