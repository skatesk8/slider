<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}

include "views/modules/botonera.php";
include "views/modules/cabezote.php";

?>

<!--=====================================
INICIO       
======================================-->

<div id="inicio" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
 
	<div class="jumbotron">
	    <h1>Bienvenidos</h1>
	    <p>Bienvenidos al panel de control.</p>
	</div>

		<hr>
	
	<ul>

		<li class="botonesInicio">
		
			<a href="slide">
			<div style="background:#333">
			<span class="fa fa-toggle-right"></span>
			<p>Slide</p>
			</div>
			</a>

		</li>
	</ul>

</div>


<!--====  Fin de INICIO  ====-->