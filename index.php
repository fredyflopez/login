<html>
	<head>
		<link rel="stylesheet" href="css/login.css" type="text/css" media="screen" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>INICIAR SESION</title>
	</head>
		<body>
			<div class="container">
				<section id="content">
					
				<!--	<script>
						function usrpas(){
						if (document.form1.txt.value=="simon" && document.form1.num.value=="123456789"){window.location="home.htm"}
						else {alert("Error en Usuario o Contraseña. Intenta de nuevo.")}
						}
						document.oncontextmenu=new Function("return false");
				</script> -->
					
					<form action="control.php" method="post" id="form">
						<h1>INICIAR SESION</h1>
						<div>
							<input type="text" name="usuario" placeholder="Username" required="" id="usuario" />

						</div>
						<div>
							<input type="password" name="clave" placeholder="Password" required="" id="clave" />
						</div>
						<div>
							<input type="submit" value="INICIAR" />
							<!-- <a href="#">¿OLVIDASTE TU CONTRASEÑA</a> -->
						</div>
					</form>
				</section>
			</div>
		</body>
</html>
