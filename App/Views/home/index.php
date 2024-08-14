<?php 
	if(!isset($_GET['invitado'])) {
		echo'<meta http-equiv="refresh" content="0; url='.$baseUrl.'Home/login">';
		return false;
	}
	
 ?>
 	<!--Importar materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?= $baseUrl ?>src/css/materialize.min.css">
<body class="position-relative sm:text-2xl	 text-2xl	 md:text-2xl		 lg:text-lg 2xl:text-3xl 2xl:text-3xl" style="background-color: #905F68;">
	<!---- Modal msj ---->
	<div id="modal_mensaje" class="modal">
		<div class="modal-content modal-content-msj"></div>
	</div>

	<!---- mapa ceremonia  ---->
	<div id="modal_ceremonia" class="modal">
		<div class="modal-content">
			<h2 class="pb-10">
				San Felipe de Jesús<br />

			</h2>

			<iframe
				class="maps mb-3"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.2479562290364!2d-99.202789!3d18.876078000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cddf4f96bd0a75%3A0x4b460c1d24c64661!2sParroquia%20San%20Felipe%20de%20Jes%C3%BAs!5e0!3m2!1ses!2smx!4v1723403153313!5m2!1ses!2smx"
				frameborder="0"
				style="border:0;"
				allowfullscreen=""
				loading="lazy"
				aria-hidden="false"
				tabindex="0"></iframe>

			<!-- <p class="text-left text-secondary text-base py-3">
				<span class="font-bold">Dirección:</span> Camino Tetecalita a la Quebradora, s/n Tetecalita, 62767 Emiliano Zapata, Mor.
			</p> -->
			<p class="text-left text-secondary text-base">
				<span class="font-bold">Fecha y hora ceremonia:</span> 14 de Septiembre de 2024 a las 16:00 PM.
			</p>
		</div>

		<div class="modal-footer">
			<a href="#!" class="modal-close block w-auto waves-effect waves-dark btn-small bg-buttons modal-trigger bg-third text-white" style="background-color: #905F68!important;">Cerrar</a>
		</div>
	</div>

	<!---- mapa recepcion  ---->

	<div id="modal_recepcion" class="modal">
		<div class="modal-content">
			<h2 class="pb-10">
				Salón La Vila<br />
			</h2>
			<iframe
				class="maps mb-3"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.9878767020364!2d-99.18841!3d18.887619000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cddf514c5fc915%3A0x12356c08ba318fe8!2sLa%20Vila%20Jardin!5e0!3m2!1ses!2smx!4v1723403212131!5m2!1ses!2smx"
				frameborder="0"
				style="border:0;"
				allowfullscreen=""
				loading="lazy"
				aria-hidden="false"
				tabindex="0"></iframe>

			<!-- <p class="text-left text-secondary text-base py-3">
				<span class="font-bold">Dirección:</span> Camino Tetecalita a la Quebradora, s/n Tetecalita, 62767 Emiliano Zapata, Mor.
			</p> -->
			<p class="text-left text-secondary text-base">
				<span class="font-bold">Fecha y hora recepción:</span> 14 de Septiembre de 2024 a las 17:30 PM.
			</p>
		</div>

		<div class="modal-footer">
			<a href="#!" class="modal-close block w-auto waves-effect waves-dark btn-small bg-buttons modal-trigger bg-third text-white" style="background-color: #905F68!important;">Cerrar</a>
		</div>
	</div>
	<!--!-->
	<div id="overlay">
		<div id="text" onclick="off()">
			<i class="fas fa-times"></i>
		</div>
		<div id="video" class="center-align">
			<img class="img-invitacion" src="<?= $baseUrl ?>src/img/invitacion.png" alt="invitación">
		</div>
	</div>

	<!--Precarga Loading-->
	<div class="preloader-background">
		<div class="lds-heart">
			<div></div>
		</div>
	</div>

	<!-- Top button -->
	<div class="fixed-action-btn">
		<a class="btn-floating btn-large" style="background-color:#905F68;" id="top_body">
			<i class="fas fa-chevron-up"></i>
		</a>
	</div>

	<div class="fixed-action-btn" style="margin-bottom: 5rem;">
		<a class="btn-floating btn-large" style="background-color:#905F68;">
			<i class="fas fa-music"></i>
		</a>
		<ul>
			<li><a class="btn-floating" style="background-color:#905F68;" onclick="playMusic()"><i class="fas fa-volume-up"></i></a></li>
			<li><a class="btn-floating darken-1" style="background-color:#905F68;" onclick="stopMusic()"><i class="fas fa-volume-mute"></i></a></li>
		</ul>
		<audio id="player" class="d-none" preload="auto" autoplay loop>
			<source src="<?= $baseUrl ?>src/audio/song.mp3" type="audio/mp3">
		</audio>
	</div>

	<!-- SIDEBAR -->
	<ul class="sidenav sidenav-close" id="mobile-demo">
		<li class="li_inicio"><a href="#">INICIO</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="Mis_Padres">Mis Padres</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="Ceremonia">Ceremonia</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="Cronograma">Cronograma</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="galeria">GALERÍA</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="Codigo_de_Vestimenta">Código de Vestimenta</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="Mesa_de_regalos">Mesa de regalos</a></li>
		<li class="li_cont uppercase"><a href="#" class="linkdata" data-enlace="Mesa_de_regalos">ASISTENCIA</a></li>
	</ul>

	<a href="#" id="iconHamburguer" data-target="mobile-demo" class="sidenav-trigger hide-on-large-only">
		<i class="fas fa-bars" style="background-color:#905f68"></i>
	</a>

	<a href="#" id="iconArrow" data-target="mobile-demo" class="sidenav-trigger hide-on-med-and-down btn-floating pulse" style="background-color:#905f68">
		<i class="fas fa-chevron-circle-right"></i>
	</a>

	<!-- MAIN-->
	<div class="bg-main min-vh-100">
		<div class="container-fluid" data-aos="zoom-out-up" data-aos-duration="2500">
			<div class="row justify-content-end align-items-center">
				<div class="col col-sm-12 col-md-12 col-lg-4">


				</div>
			</div>
		</div>
	</div>

	<!-- POST IT -->
	<div class="py-10 bg-one" id="Mis_Padres">
		<div class="container-fluid h-fit py-20">
			<div class="row justify-content-center">
				<div class="col-md-5 d-flex flex-column align-items-center sm:text-lg  text-base md:text-base	 lg:text-lg 2xl:text-3xl 2xl:text-3xl px-5 text-center" data-aos="fade-up" data-aos-duration="1500">
					<p class="">
						Quince años de risas, alegría y momentos inolvidables.<br />
						Únete a la celebración y se parte de mi historia
					</p>
					<h1 class="text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl pt-10">
						Mis Padres
					</h1>

					<p class="pt-10 text-center flex justify-center mt-10">
						Luis Agustín Sánchez Viveros<br />
						y<br />
						Silveria Contreras Garcia
					</p>


				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-5 d-flex flex-column align-items-center sm:text-lg  text-base md:text-base	 lg:text-lg 2xl:text-3xl 2xl:text-3xl px-5 text-center" data-aos="fade-up" data-aos-duration="1500">
					<h1 class="text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl pt-10">
						Mis Padrinos
					</h1>

					<p class="pt-10 text-center flex justify-center mt-10">
						Isabel Días Abundis<br />
						y<br />
						José Luis Ceciliano Meza
					</p>


				</div>
			</div>

			<!-- <div class="row justify-content-center">
				<div class="col-md-4">
					<img 
						class="block mx-auto materialboxed responsive-img" 
						src="src/img/postit.png"
						loading="lazy"
						data-aos="fade-up" 
						data-aos-duration="1500"
					>
				</div>
			</div> -->
		</div>

	</div>

	<!-- PARALLAX 1 -->
	<div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2 " style="transform: scale(1) translateY(-15%) !important;">
			<img src="<?= $baseUrl ?>src/img/save-the-date/IMG_7386.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">




				</div>
			</div>
		</div>
	</div>
	<!-- CONTADOR -->
	<div data-aos="fade-up" data-aos-duration="1500">
		<div class="contendor"  style="height: 150px; background-color: #905f68;  ">
			<div class="container py-10">
				<div class="flext justify-center">
					<div class=" flext justify-center justify-contents-center ">
						<div class="row inline-block align-middle" id="timerCont">
							<div class="col s12 hide-on-med-and-up"></div>
							<div class="col s3 m3 l3 ">
								<span class="texto-imagenes text-3xl " id="timerCont_dias"></span>
							</div>
							<div class="col s3 m3 l3">
								<span class="texto-imagenes text-3xl" id="timerCont_horas"></span>
							</div>
							<div class="col s3 m3 l3">
								<span class="texto-imagenes text-3xl" id="timerCont_minutos"></span>
							</div>
							<div class="col s3 m3 l3">
								<span class="texto-imagenes text-3xl" id="timerCont_segundos"></span>
							</div>
							<div class="col s12 hide-on-med-and-up"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTADOR -->
	<!-- EL GRAN DÍA -->
	<div class="d-flex flex-column align-items-center py-24 bg-two px-3" id="Ceremonia">
		<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl fonttitle beige mt-10" data-aos="fade-up" data-aos-duration="1500">
			Detalles
		</p>

		<img src="<?= $baseUrl ?>src/img/elementos/iglesia_dorada.png" class="w-32 mt-10 mb-10	" data-aos="fade-up" data-aos-duration="1500" />
		<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl fonttitle beige" data-aos="fade-up" data-aos-duration="1500">
			<!-- 2 columnas para aliminar Ceremonia y hr!-->
			Ceremonia
		</p>
		<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl  beige mt-20" data-aos="fade-up" data-aos-duration="1500">
			<span class="font-Georgia"> 4:00 pm</span>

		</p>

		<p class="text-center mt-10 sm:text-lg  text-base md:text-base	 lg:text-lg 2xl:text-3xl 2xl:text-3xl px-5 text-center" data-aos="fade-up" data-aos-duration="1500">
			San Felipe de Jesús<br />
			Isabel Días Abundis y José Luis Ceciliano Meza<br />
			<!--Link mapa pendiente!-->

		</p>
		<div class="flex justufy-center">
			<span>
				<a
					data-aos="fade-up"
					data-aos-duration="1500"
					href="#modal_ceremonia"
					class="block w-fit waves-effect waves-dark btn-small  modal-trigger bg-rosa20 text-white mt-5" style="background-color: #905F68!important;">Ver mapa</a>
			</span>

		</div>
		<img src="<?= $baseUrl ?>src/img/elementos/elemento_stephy.png" data-aos="fade-up" data-aos-duration="1500" />
		<!--recepcion!-->
		<div data-aos="fade-up" data-aos-duration="1500">
			<!-- 2 columnas para aliminar receocion y hr!-->
			<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl fonttitle beige " data-aos="fade-up" data-aos-duration="1500">
				Recepción
			</p>
			<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl  beige mt-20" data-aos="fade-up" data-aos-duration="1500">
				<span class="font-Georgia"> 5:30 pm</span>

			</p>


			<p class="text-center  mt-20 sm:text-lg  text-base md:text-base	 lg:text-lg 2xl:text-3xl 2xl:text-3xl px-5 text-center" data-aos="fade-up" data-aos-duration="1500">
				Salón La Vila<br />
				Av. Emiliano Zapata 108, Miguel Hidalgo, 62556 Jiutepec, Mor.<br />
				<!--Link mapa pendiente!-->

			</p>
			<p class="text-center flex justify-center">
				<a
					data-aos="fade-up"
					data-aos-duration="1500"
					href="#modal_recepcion"
					class="block w-fit waves-effect waves-dark btn-small bg-buttons modal-trigger bg-rosa20 text-white mt-5" style="background-color: #905F68!important;">Ver mapa</a>

			</p>
		</div>
	</div>

	<!-- PARALLAX 2 -->
	<div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2" style="transform: scale(1) translateY(-15%) !important;">
			<img src="<?= $baseUrl ?>src/img/save-the-date/IMG_7348.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">
					<h2 class="text-white text-shadow"></h2>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2" style="transform: scale(.35) translateY(-15%) !important;">
			<img src="<?= $baseUrl ?>src/img/save-the-date/IMG_7348.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">
					<h2 class="text-white text-shadow"></h2>
				</div>
			</div>
		</div>
	</div> -->

	<!-- MESA DE REGALOS -->
	<div class="center-align bg-three py-10" id="Cronograma">
		<div class="container" data-aos="fade-up" data-aos-duration="1500">

			<div class="row justify-content-center pb-10">
				<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl fonttitle beige">
					Cronograma
				</p>

			</div>

		</div>
	</div>
	<div style="background-color: #905F68;">
		<div class="sm:w-full md:w-full lg:w-1/2 2xl:w-1/2 2xl:w-1/2 m-auto px-5" data-aos="fade-up" data-aos-duration="1500">
			<img src="<?= $baseUrl ?>src/img/elementos/Cronograma_XV_stephy.png" class="w-3/4		 m-auto" loading="lazy">
		</div>
	</div>

	<!-- PARALLAX 3 -->
	<div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2" style="transform: scale(1) translateY(-15%) !important;">
			<img src="<?= $baseUrl ?>src/img/save-the-date/IMG_7760.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">
					<h2 class="text-white text-shadow"></h2>
				</div>
			</div>
		</div>
	</div>

	<!-- HOSPEDAJE -->
	<div class="d-flex flex-column py-10" id="galeria" style="background-color: #905F68;">
		<!--Galeria!-->
		<div data-aos="fade-up" data-aos-duration="1500">
			<div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
				<div class="-m-1 flex flex-wrap md:-m-2">
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_2.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_3.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_21.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_26.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_51.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_77.jpg" />
						</div>
					</div>

					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="src/img/galeria/Sesion_Stephy_84.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_118.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_135.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_149.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_165.jpg" />
						</div>
					</div>
					<div class="flex w-1/3 flex-wrap">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block h-full w-full rounded-lg object-cover object-center"
								src="<?= $baseUrl ?>src/img/galeria/Sesion_Stephy_184.jpg" />
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--Fin galeria!-->
		<div class="container" id="Codigo_de_Vestimenta">

			<div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1500">
				<div class="col-12 col-md-10 d-flex flex-column align-items-center py-10">
					<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl fonttitle beige py-10">
						Código de Vestimenta
					</p>
					<p class="text-center  mt-3 text-3xl text-white" data-aos="fade-up" data-aos-duration="1500">
						Formal
						<!--Link mapa pendiente!-->
					</p>
					<img src="<?= $baseUrl ?>src/img/elementos/formal_dresscode_Icono_02.png" class="w-44" data-aos="fade-up" data-aos-duration="1500">


				</div>
			</div>
		</div>

		<!-- <img class="w-100 align-self-start" src="src/img/caracoles-izquierda.png" alt="caracoles"> -->

		<!-- <img class="w-100 align-self-end" src="src/img/caracoles-derecha.png" alt="caracoles"> -->



		<!-- <img class="w-100 align-self-start" src="src/img/caracoles-izquierda.png" alt="caracoles"> -->

	</div>


	<!-- PARALLAX 4 -->
	<!-- <div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2" style="transform: scale(.35) translateY(-15%) !important;">
			<img src="src/img/save-the-date/IMG_7205.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">
					<h2 class="text-white text-shadow"></h2>
				</div>
			</div>
		</div> -->
	<!-- </div> -->

	<!-- HASHTAG -->
	<div class="d-flex flex-column py-10 bg-one sm:text-lg  text-base md:text-base	 lg:text-lg 2xl:text-3xl 2xl:text-3xl px-5 " id="Mesa_de_regalos">
		<div class="d-flex flex-column align-items-center justify-content-center">
			<p class="text-center flex justify-center text-3xl	 sm:text-3xl md:text-3xl	 lg:text-3xl 2xl:text-6xl 2xl:text-6xl fonttitle beige py-10" data-aos="fade-up" data-aos-duration="1500">
				Mesa de regalos
			</p>
			<div class="">
				<p class="text-center  mt-20 " data-aos="fade-up" data-aos-duration="1500">
					Nuestro mejor regalo es su presencia, <br /> pero si desean aportar con mi deseo de ahorrar <br />les doy las gracias por adelantado.
				</p>
				<p class="text-center  mt-20 rosa20 " data-aos="fade-up" data-aos-duration="1500">
					Banorte<br />
					Stephanie Yamilet Sanchez Contreras<br />
					Clabe 0725 4001 2830 1745 56<br />
				</p>
			</div>


			<div class="mt-20" id="section_asistencia" data-aos="fade-up" data-aos-duration="1500">
				<div class="container">
					<!--Botones!-->
					<div class="">
						<!--Fin checkbox!-->
						<p class="text-center text-4xl	">
							Confirmación de asistencia
						</p>
						<p class="text-center text-3xl mt-10">
							<?php echo isset($_GET['invitado']) ? ($invitado ? 'Familia ' . $invitado->Nombre : '') : '' ?>

						</p>
						<div class=" w-full flex justify-center gap-8 pt-10">
							<div>
								<input class="hidden asiste" id="radio_1" type="radio" name="radio" value="1">
								<label
									class="  flex justify-center   w-10	h-10 border-2 border-white cursor-pointer rounded-full text-white "
									style="background-color: #905F68;"
									for="radio_1">
									<span class=" font-semibold textcheckbox">Si</span>
								</label>
							</div>

							<div>
								<input class="hidden asiste" id="radio_2" type="radio" name="radio" value="2">
								<label
									class=" flex justify-center   w-10	h-10 border-2 border-white cursor-pointer rounded-full  text-white"
									style="background-color: #905F68;"
									for="radio_2">
									<span class=" font-semibold textcheckbox">NO</span>
								</label>
							</div>



						</div>
						<!--Fin checkbox!-->


					</div>
					<!--Fin de botones!-->
					<div class="row">
						<div class="col-md-12">
							<div class="flex justify-center">
								<form class="mxl:w-1/2 2xl:w-1/2 m-auto  pt-10 hidden" action="<?= $baseUrl ?>ControllerXv/store" method="POST" autocomplete="off" name="asistencia" id="asistencia">
									<!-- <div class="relative z-0 w-full mb-5 group">
								<label for="invitado" class="font-Georgia text-white text-3xl" style="text-align: left!important;">Nombre del invitado</label><br /> -->
									<input type="hidden" name="huid" value="<?php echo isset($_GET['invitado']) ? $invitado->uid : '' ?>">
									<input type="hidden" name="nombre" id="Firstname"
										value="<?php echo isset($_GET['invitado']) ? ($invitado ? $invitado->Nombre : '') : '' ?>" />

									<!-- </div> -->
									<div class="w-full mb-5">
										<label for="pases" class="font-Georgia text-white text-3xl">#pases adulto</label><br />
										<select name="pases" id="pases"
											type="text"
											class="py-2.5 px-0 w-full my-2 px-4 py-3 border rounded-lg text-black-primary focus:outline-none text-sm " required ">

									<?php
									if (isset($_GET['invitado'])) {

										if ($invitado->pases != '') {

											for ($i = 1; $i <= $invitado->pases; $i++) {

									?> 
										<option value=" <?php echo $i ?>"><?php echo $i ?></option>
								<?php }
										}
									} else {
										echo '<option value="0" selected >0</option>';
									}

								?>
										</select>
									</div>
									<div class="w-full mb-5">
										<label for="paseschildren" class="font-Georgia text-white text-3xl">#pases niño</label><br />
										<select name="paseschildren" id="paseschildren"
											type="text"
											class="py-2.5 px-0 w-full my-2 px-4 py-3 border rounded-lg text-black-primary focus:outline-none text-sm " required ">
										<?php
										if (isset($_GET['invitado'])) {

											if ($invitado->paseschildren != '') {
												echo '<option value="0" selected >0</option>';
												for ($i = 1; $i <= $invitado->paseschildren; $i++) {

										?> 
										<option value=" <?php echo $i ?>"><?php echo $i ?></option>
								<?php }
											}
										} else {
											echo '<option value="0" selected >0</option>';
										}

								?>
										</select>
									</div>
									<!-- <div class="relative z-0 w-full mb-5 group">
								<label for="Alergias" class="font-Georgia text-white text-3xl">Alergias</label><br />
								<input type="text" name="Alergias" id="Alergias"
									style=" border-bottom: white 1px solid!important;"
									class="font-Georgia pl-1 block py-2.5 px-0 w-full text-base text-white bg-transparent border-0 border-b-2 border-white appearance-none  focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />

							</div> -->
									<div class="flex justify-center">
										<button type="submit" class="bg-rosa20   font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: #905F68;">Confirmación de asistencia</button>
									</div>

								</form>
							</div>
							<div class="flex justify-center">
								<img src="<?= $baseUrl ?>src/img/elementos/elemento_stephy.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- PARALLAX 5 -->
	<!-- <div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2" style="transform: scale(.35) translateY(-15%) !important;">
			<img src="src/img/save-the-date/IMG_7983.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">
					<h2 class="text-white text-shadow"></h2>
				</div>
			</div>
		</div>
	</div> -->

	<!-- FIRMAS -->
	<!-- <div class="d-flex flex-column py-10 bg-fourth " id="section_comentarios">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center text-secondary" data-aos="fade-up" data-aos-duration="1500">
						Libro de Firmas
					</h1>

					<div class="carousel carousel-slider center bg-third mb-5" data-aos="fade-up" data-aos-duration="1500">

					</div>
					<h5 class="text-center text-primary mb-5" data-aos="fade-up" data-aos-duration="1500">
						Compártenos tus deseos
					</h5>
					<form action="cod/firmas.php" method="POST" id="enviarfirma">
						<div class="input-field input-field-color  col s12 m12 l12 center-align">
							<input id="nombre" name="nombre" type="text" class="validate text-secondary" required>
							<label style="font-size: 14px;" for="nombre">Nombre</label>
							<span class="helper-text" style="font-size: 14px" data-error="Ingresa un nombre" data-success=""></span>
						</div>
						<div class="input-field input-field-color col s12 m12 l12">
							<textarea id="comentarios" name="comentarios" class="materialize-textarea text-secondary"></textarea>
							<label style="font-size: 14px;" for="comentarios">Deseos</label>
							<span class="helper-text" style="font-size: 14px" data-error="Ingresa deseos" data-success=""></span>
						</div>

						<div class="input-field input-field-color col s12">
							<button id="enviarfirmas" type="submit" class="waves-effect waves-dark btn-small bg-buttons bg-third">Firmar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->

	<!-- PARALLAX 6 -->
	<!-- <div class="parallax-container center valign-wrapper z-depth-4">
		<div class="parallax parallaxlast2" style="transform: scale(.35) translateY(-15%) !important;">
			<img src="src/img/save-the-date/IMG_7835.jpg" loading="lazy">
		</div>
		<div class="container white-text">
			<div class="row">
				<div class="col s12">
					<h2 class="text-white text-shadow"></h2>
				</div>
			</div>
		</div> -->
	</div>

	<!-- WEDDING PLANER -->
	<!-- <div class="py-10 bg-one " id="section_asistencia" data-aos="fade-up" data-aos-duration="1500">
		
	</div> -->
	</main>

	<!--Carga JS al final-->

	<script type="text/javascript" src="<?= $baseUrl ?>src/js/jquery.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



	<!-- <script type="text/javascript" src="src/js/materialize.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?= $baseUrl ?>src/js/aos.js"></script>
	<script type="text/javascript" src="<?= $baseUrl ?>src/js/app.js"></script>
	<script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/actions.js"></script>
	<script>

	</script>