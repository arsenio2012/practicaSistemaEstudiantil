<?php
	// Determinamos si hay secciones
	$section = isset($_GET['section']) ? $_GET['section'] : '';

    switch ($section) {
        case 'inicio':
            $views = 'views/sections/inicio/inicio.php';
            break;
        case 'registro':
        
            break;
        case 'login':
            $views = 'views/sections/inicio/registro.php';
            break;
        case 'registro':
            $views = 'views/sections/inicio/registro.php';
            break;
    }
?>