<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.tonatheme.com/2023/Cleaner/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 00:22:41 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>GreenChuya | Limipieza que protege!</title>
	<!-- Stylesheets -->
	<link href="public/web/css/bootstrap.css" rel="stylesheet">
	<link href="public/web/css/color.css" rel="stylesheet">
	<link href="public/web/css/icofont.css" rel="stylesheet">
	<link href="public/web/css/nice-select.css" rel="stylesheet">
	<link href="public/web/css/fontawesome-all.css" rel="stylesheet">
	<link rel="shortcut icon" href="public/web/images/logoico.png" type="image/x-icon">
	<link rel="icon" href="public/web/images/logoico.png" type="image/x-icon">
	<link href="public/web/css/base.css" rel="stylesheet">
	<link href="public/web/css/color.css" rel="stylesheet">
	<link href="public/web/css/style.css" rel="stylesheet">
	<link href="public/web/css/style-2.css" rel="stylesheet">
	<link href="public/web/css/style-3.css" rel="stylesheet">
	<link href="public/web/css/responsive.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

	<style>
		.facebook-floating {
			position: fixed;
			right: 10px;      /* distancia desde la derecha */
			bottom: 160px;     /* distancia desde el fondo */
			background-color: #1877F2; /* Color de fondo de Facebook */
			color: white;     /* Color del ícono */
			border-radius: 50%;   /* Hace que tenga forma redonda */
			width: 50px;      /* Ancho del contenedor */
			height: 50px;     /* Alto del contenedor */
			display: flex;    /* Utilizamos flexbox para centrar el ícono */
			justify-content: center; /* Centra el ícono horizontalmente */
			align-items: center;     /* Centra el ícono verticalmente */
			z-index: 9999;    /* Asegura que aparezca por encima de otros elementos */
			box-shadow: 0 0 5px rgba(0,0,0,0.2);  /* Sombra suave alrededor */
		}

		.facebook-floating:hover {
			background-color: #155293; /* Color de fondo cuando pasa el cursor */
		}
		
		.facebook-floating:hover::before {
			content: attr(data-tooltip); /* Obtiene el texto del atributo data-tooltip */
			position: absolute; /* Posiciona el tooltip de manera absoluta respecto al ícono */
			right: 100%; /* Coloca el inicio del tooltip a la izquierda del ícono */
			top: 50%; /* Coloca el tooltip en el centro verticalmente */
			transform: translateY(-50%); /* Centra el tooltip verticalmente */
			white-space: nowrap; /* Asegura que el texto no se rompa en múltiples líneas */
			padding: 5px 10px; /* Espacio alrededor del texto */
			background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
			color: white; /* Color del texto */
			border-radius: 5px; /* Bordes redondeados */
			margin-right: 5px; /* Espacio entre el tooltip y el ícono */
		}

		.instagram-floating {
			position: fixed;
			right: 10px;      /* distancia desde la derecha (se suma un poco más para que no se superponga con el de Facebook) */
			bottom: 220px;     /* distancia desde el fondo */
			background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285aeb 90%);
			color: white;     /* Color del ícono */
			border-radius: 50%;   /* Hace que tenga forma redonda */
			width: 50px;      /* Ancho del contenedor */
			height: 50px;     /* Alto del contenedor */
			display: flex;    /* Utilizamos flexbox para centrar el ícono */
			justify-content: center; /* Centra el ícono horizontalmente */
			align-items: center;     /* Centra el ícono verticalmente */
			z-index: 9998;    /* Asegura que aparezca por encima de otros elementos, pero debajo del de Facebook */
			box-shadow: 0 0 5px rgba(0,0,0,0.2);  /* Sombra suave alrededor */
		}

		.instagram-floating:hover {
			filter: brightness(0.9); /* Oscurece un poco al pasar el cursor */
		}
		
		.instagram-floating:hover::before {
			content: attr(data-tooltip); /* Obtiene el texto del atributo data-tooltip */
			position: absolute; /* Posiciona el tooltip de manera absoluta respecto al ícono */
			right: 100%; /* Coloca el inicio del tooltip a la izquierda del ícono */
			top: 50%; /* Coloca el tooltip en el centro verticalmente */
			transform: translateY(-50%); /* Centra el tooltip verticalmente */
			white-space: nowrap; /* Asegura que el texto no se rompa en múltiples líneas */
			padding: 5px 10px; /* Espacio alrededor del texto */
			background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
			color: white; /* Color del texto */
			border-radius: 5px; /* Bordes redondeados */
			margin-right: 5px; /* Espacio entre el tooltip y el ícono */
		}

		.whatsapp-floating {
			position: fixed;
			bottom: 100px;
			right: 10px;
			width: auto; /* Cambiado de un ancho fijo para adaptarse al texto */
			/*/padding: 8px;*/ /* Ajustado para darle espacio alrededor */
			font-size: 18px; /* Ajustado para el tamaño de fuente del texto */
			background-color: #25D366;
			color: white;
			border-radius: 50px; /* Ajustado para bordes redondeados */
			z-index: 1000;
			display: flex;
			align-items: center;
			justify-content: space-between; /* Ajustado para dar espacio entre el ícono y el texto */
			text-decoration: none; /* Quitar el subrayado del enlace */
		}

		.whatsapp-floating i {
			font-size: 30px;
			margin-right: 10px; /* Agregado para dar espacio entre el ícono y el texto */
		}

		.whatsapp-floating span {
			display: inline-block;
			vertical-align: middle;
			padding-right: 10px;
			padding-left: 10px;
			color: white;
		}

		.textNegrita {
			color: #5b5858;
		}

		.textVerde {
			color: #abe040;
		}

		.h1--greenchuya {
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(50,182,59,1) 0%, rgba(116,212,67,1) 43%, rgba(0,212,255,1) 100%);
			color: white;
			padding-left: 20px;
			font-weight: 700;
			padding-right: 2px;
		}

		.textCompromiso {
			font-family: 'Bitter';
			font-style: normal;
			font-weight: 500;
			font-size: 20px;
			line-height: 30px;
			color: #777777;
			text-align: justify;
			text-align-last: left;
		}

		.textElegir {
			font-family: 'Bitter';
			font-style: normal;
			font-weight: 500;
			font-size: 20px;
			line-height: 25px;
			color: #777777;
			text-align: justify;
			line-height: 30px;
		}

		
	</style>
	
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1QPDZLM934">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-1QPDZLM934');
    </script>

</head>
<body>
	<div class="page-wrapper">
		<!-- preloader -->
        
        <!-- preloader end -->

		<header class="main-header">
            <?= $this->include('layouts/header') ?>
		</header>
		<!-- End Main Header -->

		<?= $this->renderSection('content') ?>

		<!-- footer section start -->
		<footer class="main-footer">
            <?= $this->include('layouts/footer') ?>
		</footer>
		<!-- footer section end -->
	</div>
	<!--End pagewrapper-->

	<a href="https://www.instagram.com/greenchuya/" target="_blank" class="instagram-floating" data-tooltip="Síguenos en Instagram">
		<i class="bi bi-instagram" style="font-size: 25px;"></i>
	</a>

	<a href="https://www.facebook.com/greenchuya23" target="_blank" class="facebook-floating" data-tooltip="Síguenos en Facebook">
		<i class="bi bi-facebook" style="font-size: 25px;"></i>
	</a>

	<a href="https://wa.me/51978857690?text=Hola,%20estoy%20interesad@%20en%20conocer%20más%20sobre%20Green%20Chuya" target="_blank" class="whatsapp-floating">
		<span>Chatea con Nosotros</span>
		<i class="bi bi-whatsapp"></i>
		
	</a>

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
	<!--Scroll to top-->
	<script src="public/web/js/jquery.js"></script>
	<script src="public/web/js/popper.min.js"></script>
	<script src="public/web/js/owl.js"></script>
	<script src="public/web/js/bootstrap.min.js"></script>
	<script src="public/web/js/validation.js"></script>
	<script src="public/web/js/jquery.nice-select.min.js"></script>
	<script src="public/web/js/parallax.min.js"></script>
	<script src="public/web/js/script.js"></script>
	<script src="public/web/js/appear.js"></script>
	<script src="public/web/js/jquery.fancybox.js"></script>

	<?= $this->renderSection('js') ?>

</body>

<!-- Mirrored from html.tonatheme.com/2023/Cleaner/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 00:22:58 GMT -->
</html>
