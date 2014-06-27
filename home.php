<section>
	<div id="Banner">
		 <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="assets/img/banners/Banner01.jpg" title=" ">
          	<h1>Seguridad Industrial</h1>
			<span>Desarrollamos planes de formación de competencias para trabajos de alto riesgo.</span>
          	<a href="#">Ver Más</a>
          </li>
          <li><img src="assets/img/banners/Banner02.jpg" title="">
			<h1>Seguridad Industrial</h1>
			<span>Desarrollamos planes de formación de competencias para trabajos de alto riesgo.</span>
          	<a href="#">Ver Más</a>
          </li>
          <li><img src="assets/img/banners/Banner03.jpg" title="">
			<h1>Seguridad Industrial</h1>
			<span>Desarrollamos planes de formación de competencias para trabajos de alto riesgo.</span>
          	<a href="#">Ver Más</a>
          </li>
        </ul>
        <!-- end Basic jQuery Slider -->
	</div>
	<div id="ConteBoxes">
		<div class="Box">
			<div class="imgBox">
				<img src="assets/img/box1.jpg" alt="">	
			</div>
			<h3>Seguridad Industrial</h3>
			<p>Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, </p>
			<a class="VerMas" href="Noticia">Ver Más</a>
		</div>
		<div class="Box">
			<div class="imgBox">
				<img src="assets/img/box2.jpg" alt="">
			</div>
			<h3>Ergonomía</h3>
			<p>Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, </p>
			<a class="VerMas" href="Noticia">Ver Más</a>
		</div>
		<div class="Box">
			<div class="imgBox">
				<img src="assets/img/box3.jpg" alt="">
			</div>
			<h3>Riesgo Psicolaboral</h3>
			<p>Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, </p>
			<a class="VerMas" href="Noticia">Ver Más</a>
		</div>
		<div class="Box">
			<div class="imgBox">
				<img src="assets/img/box4.jpg" alt="">
			</div>
			<h3>Medicina Ocupacional</h3>
			<p>Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, </p>
			<a class="VerMas" href="Noticia">Ver Más</a>
		</div>
	</div>

	<div id="NotiHome">
		<div id="Noticias">
			<div id="MigaTitulo" class="Naranja">
				<h1>Noticia</h1>
			</div>

			<div id="ConteBoxes">
				<div class="Box">
					<div class="imgBox">
						<img src="assets/img/BannerNoticia.jpg" alt="">	
						<!--<span class="Naranja">Negocio</span>-->
					</div>
					<p>Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, Lorem ipsum sit dolor is amet, </p>
					<a class="VerMas" href="Noticia">Ver Más</a>
				</div>
			</div>



		</div>
		<div id="Certificado">
			<a href="#"><img src="assets/img/certificado.jpg" alt=""></a>
		</div>
	</div>
</section>

 <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#Banner').bjqs({
            height      : 300,
            width       : 1020,
            responsive  : true,
            nexttext : '>',
            prevtext : '<', 
            showmarkers : false,
            animtype : 'slide'
          });

        });
      </script>