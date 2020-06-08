<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid">

	<div class="container">

		<div class="row">

		 	<!--=====================================
			CATEGORÍAS Y SUBCATEGORÍAS FOOTER
			======================================-->

			<div class="col-lg-5 col-md-6 col-xs-12 footerCategorias">

			<?php

				$url = Ruta::ctrRuta();

				$item = null;
				$valor = null;

				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {

					if($value["estado"] != 0){

						echo '<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">

							<h4><a href="'.$url.$value["ruta"].'" class="pixelCategorias" titulo="'.$value["categoria"].'">'.$value["categoria"].'</a></h4>

							<hr>

							<ul>';

							$item = "id_categoria";

							$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

							foreach ($subcategorias as $key => $value) {

								if($value["estado"] != 0){

									echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubCategorias" titulo="'.$value["subcategoria"].'">'.$value["subcategoria"].'</a></li>';

								}

							}

							echo '</ul>

						</div>';

					}

				}

			?>

			</div>

			<!--=====================================
			DATOS CONTACTO
			======================================-->

			<div class="col-md-3 col-sm-6 col-xs-12 text-left infoContacto">

				<h5>Dudas e inquietudes, contáctenos en:</h5>

				<br>

				<h5>

				    <div class="fb-send-to-messenger"
  messenger_app_id="<1718780438227305>"
  page_id="364016820465917"
  color="<blue | white>"
  size="<standard | large | xlarge>">
</div>

					<i class="fa fa-phone-square" aria-hidden="true"></i> (01) 368-5172
					</br>
					<i class="fa fa-phone-square" aria-hidden="true"></i> 987-930639
					</br>
					<i class="fa fa-phone-square" aria-hidden="true"></i> 996-672111


					<br><br>

					<i class="fa fa-envelope" aria-hidden="true"></i> wienerstech1107@gmail.com
					<br><br>

					<!-- <i class="fa fa-map-marker" aria-hidden="true"></i> Calle 45F 82 - 31 Local 102-->

					<br><br>
					Lima | Perú

				</h5>


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.116022766909!2d-76.9068100112769!3d-12.084308010744802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe623e6c27d061976!2sWieners+Tech+SAC!5e0!3m2!1ses-419!2spe!4v1540941045357" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>


			</div>

			<!--=====================================
			FORMULARIO CONTÁCTENOS
			======================================-->

			<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 formContacto">

				<h4>RESUELVA SU INQUIETUD</h4>

				<form role="form" method="post" onsubmit="return validarContactenos()">

			  		<input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>

			   		<br>

   					<input type="email" id="emailContactenos" name="emailContactenos" class="	form-control" placeholder="Escriba su correo electrónico" required>

   					<br>

	       			<textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>

	       			<br>

	       			<input type="submit" value="Enviar" class="btn btn-default backColor pull-right" id="enviar">

				</form>

				<?php

					$contactenos = new ControladorUsuarios();
					$contactenos -> ctrFormularioContactenos();

				?>

			</div>

		</div>

	</div>

</footer>


<!--=====================================
FINAL
======================================-->

<div class="container-fluid final">
    
   

	<div class="container-fluid">

		<div class="row">
		    
		    <div class="col-sm-4 col-xs-12">

				 <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=bWsSOCY5nkzPkccSH6GvrGoAkIKKJdduDADHlcmGY4L9XxyfXqghgzcIQ6ox"></script></span>

			</div>

			<div class="col-sm-4 col-xs-12 pull-left text-muted">

				<h5>&copy; 2017 Todos los derechos reservados. Wieners Tech S.A.C</h5>

			</div>
			
			
			

			<div class="col-sm-4 col-xs-12 text-right social">

			<ul>

			<?php

			$social = ControladorPlantilla::ctrEstiloPlantilla();

				$jsonRedesSociales = json_decode($social["redesSociales"],true);

				foreach ($jsonRedesSociales as $key => $value) {

					echo '<li>
							<a href="'.$value["url"].'" target="_blank">
								<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
							</a>
						</li>';
				}

			?>

			</ul>

			</div>

		</div>

	</div>

</div>




<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="364016820465917"
  logged_in_greeting="hola! En que te puedo ayudar Hoy?"
  logged_out_greeting="hola! En que te puedo ayudar Hoy?">
</div>
