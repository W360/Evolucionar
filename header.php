<header>
	
	<nav>
		<ul>
			<li><a href="#">Quienes Somos</a>
				<ul>
					<li><a href="Nuestra-Empresa">Nuestra Empresa</a></li>
					<li><a href="News-y-Ofertas">News y Ofertas</a></li>
					<li><a href="Promociones">Promociones</a></li>
				</ul>
			</li>
			<li class="bar"><a href="Servicios">Nuestros Servicios</a></li>
			<li class="bar"><a href="Cadena-de-Valor">Nuestra Cadena de Valor</a></li>
			<li class="bar"><a href="Informacion-a-la-Mano">Su Información a la mano</a></li>
		</ul>
	</nav>
	<div id="MenuMovil">
		<form>
			<select name="ad" onchange="salta(this.form)">
			<option selected> -- MENU --
			<option value="Nuestra-Empresa">Nuestra Empresa</option>
			<option value="News-y-Ofertas">News y Ofertas</option>
			<option value="Promociones">Promociones</option>
			<option value="Servicios">Nuestros Servicios</option>
			<option value="Cadena-de-Valor">Nuestra Cadena de Valor</option>
			<option value="Informacion-a-la-Mano">Su Información a la mano</option>
			</select>
		</form>
	</div>
	<div id="ConteHead">
		<div id="Logo">
			<a href="home"><img src="assets/img/logo.png"></a>
		</div>
		<div id="Search">
			
			<div id="inputSearch">
				<form action="buscar.php">
					<input type="text" name="Search" placeholder="Buscar">
					<input type="submit" value="Buscar">
				</form>
			</div>

			<div id="Contact">
				<div id="Mail">
					<span><a href="Contacto">Contáctenos</a></span>
				</div>
				<div id="Place">
					<span><a href="Donde-Estamos">Dónde Estamos</a></span>
				</div>
			</div>

			<div id="pse">
				Pagos en Línea<br>
				<a target="_blank" href="http://www.pse.com.co/"><img src="assets/img/pse.png" alt=""></a>
			</div>
			
		</div>
	</div>
	<SCRIPT LANGUAGE="JavaScript">
		function salta(Sel){
		if (Sel.ad.selectedIndex != 0){
		document.location=Sel.ad.options[Sel.ad.selectedIndex].value
		}}
	</SCRIPT>
</header>