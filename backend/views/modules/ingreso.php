<!--=====================================
FORMULARIO DE INGRESO         
======================================-->

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="background-image: url(views/images/login.jpg);">
				<form class="login100-form validate-form" method="post" onsubmit="return validarIngreso()">
					<span class="login100-form-title p-b-43">
						Login
					</span> <br>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="usuarioIngreso" id="usuarioIngreso">
						<span class="focus-input100"></span>
						<span class="label-input100">Usuario</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="passwordIngreso" id="passwordIngreso">
						<span class="focus-input100"></span>
						<span class="label-input100">Contraseña</span>
					</div>

					<?php

								$ingreso = new Ingreso();
								$ingreso -> ingresoController();
			
								?>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				<div class="login100-more">
				</div>
			</div>
		</div>
	</div>
	


<!--====  Fin de FORMULARIO DE INGRESO  ====-->