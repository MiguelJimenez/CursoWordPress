<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Sitio con HTML5. CONTACTO</title>
	<meta name="description" content="Bienvenidos a mi sitio web hecho con HTML5, aquí aprenderás los nuevos elementos y atributos de formulario semánticos." />
	<?php require "metas.php"; ?>
</head>
<body>
	<?php require "header.php"; ?>
	<section id="contenido">
		<form id="contacto-datos">
			<fieldset>
				<legend>Envíanos tus comentarios</legend>
				<div>
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" class="cambio" pattern="[A-Za-zÑñÁáÉéÍíÓóÚúü\s]+" placeholder="Escribe tu nombre" title="Tu nombre" autofocus required />
				</div>
				<div>
					<label for="email">Email:</label>
					<input type="email" id="email" class="cambio" placeholder="Escribe tu email" title="Tu email" required />
				</div>
				<div>
					<label for="cumple">Cumple:</label>
					<input type="date" id="cumple" class="cambio" placeholder="Escribe tu cumple" title="Tu cumple" required />
				</div>
				<div>
					<label for="asunto">Asunto:</label>
					<input type="text" id="asunto" class="cambio" placeholder="Asunto a tratar" title="Asunto a tratar" required />
				</div>
				<div>
					<label for="comentarios">Comentarios:</label>
					<textarea id="comentarios" class="cambio" cols="50" rows="5" placeholder="Escribe tus comentarios" title="Tus comentarios" required></textarea>
				</div>
				<div>
					<input type="submit" class="cambio" value="Enviar" />
				</div>
			</fieldset>
		</form>
		<article id="mapa">
			<iframe width="550" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=iconos+instituto&amp;sll=23.554132,-102.6205&amp;sspn=30.902858,39.506836&amp;ie=UTF8&amp;hq=iconos+instituto&amp;hnear=&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=16388847009197716222&amp;ll=19.426428,-99.152083&amp;output=embed"></iframe><br /><a href="https://maps.google.com.mx/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=iconos+instituto&amp;sll=23.554132,-102.6205&amp;sspn=30.902858,39.506836&amp;ie=UTF8&amp;hq=iconos+instituto&amp;hnear=&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=16388847009197716222&amp;ll=19.426428,-99.152083" class="cambio" target="_blank">Ver mapa más grande</a>
		</article>
	</section>
	<?php require "footer.php" ?>
</body>
</html>