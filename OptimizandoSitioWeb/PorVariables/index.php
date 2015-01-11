<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
switch($_GET["seccion"])
{
	case "acerca":
		$titulo = "Sitio con HTML5. ACERCA";
		$descripcion = "Bienvenidos a mi sitio web hecho con HTML5, en esta sección aprenderás por que es importante utilizar HTML5, además implementaremos audio y video nativamente.";
		$contenido = "php/acerca.php";
		break;

	case "contacto":
		$titulo = "Sitio con HTML5. CONTACTO";
		$descripcion = "Bienvenidos a mi sitio web hecho con HTML5, aquí aprenderás los nuevos elementos y atributos de formulario semánticos.";
		$contenido = "php/contacto.php";
		break;

	case "tecnologias":
		$titulo = "Sitio con HTML5. TECNOLOGÍAS";
		$descripcion = "Bienvenidos a mi sitio web hecho con HTML5, aquí encontrarás información sobre las 8 implementaciones en las que se basa HTML5.";
		$contenido = "php/tecnologias.php";
		break;

	default:
		$titulo = "Sitio con HTML5. HOME";
		$descripcion = "Bienvenidos a mi sitio web hecho con HTML5, aquí encontrarás información relevante sobre como diseñar sitios web con HTML5.";
		$contenido = "php/home.php";
		break;
}
require "php/header.php";
// el contenido
require $contenido;
require "php/footer.php";

?>