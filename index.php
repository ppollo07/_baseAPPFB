<?php
include( "src/facebook.php" );
$fbAppArray = array(
	'appId'  => '',
	'secert' => '',
	'cookie' => true
	);
$fbAppObj = new Facebook( $fbAppArray );
include_once "_class/class_DB.php";
include_once "_class/personas.class.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="Creativos Unidos" />
	<meta property="og:title" content="Jairala Oller" />
	<meta property="og:description" content="Jairala Oller" />
	<meta property="og:image" content="http://www.fidelitytools.info/ariel/iconoG.jpg" />
	<title>Jairala Oller</title>
	<!-- Googlewebfont CSS  -->
	<link href='css/font.css' rel='stylesheet' type='text/css'>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/jquery.validity.css" rel="stylesheet">
	<!-- icons 
	<link href="css/bootstrap-glyphicons.css" rel="stylesheet"> -->
	<!-- Custom styles for this template -->
	<link href="css/MasterPage.css" rel="stylesheet">
</head>
<body>
	<?php
	$signedRequest = $fbAppObj->getSignedRequest();
	function parsePageSignedRequest()
	{
		if( isset( $_REQUEST['signed_request'] ) )
		{
			$encoded_sig = null;
			$payload = null;
			list( $encoded_sig, $payload ) = explode( '.', $_REQUEST['signed_request'], 2 );
			$sig = base64_decode( strtr( $encoded_sig, '-_', '+/' ) );
			$data = json_decode( base64_decode( strtr( $payload, '-_', '+/' ), true ) );
			return $data;
		}
		return false;
	}
	if( $signedRequest = parsePageSignedRequest() )
	{
		if( $signedRequest->page->liked )
		{
			$datosInternos = $signedRequest->user_id;
	//echo $datosInternos;
			$personas = Personas::buscarPersonas($datosInternos,"1","175");
			if($personas)
			{
	?>

	<div class="masterPage" id="masterPage">
		<div class="row">
			<div class="col-sm-12 col-out"><img src="img/top.jpg" width="810" heigth="340" alt="" /></div>
			<div class="col-sm-12 space-bottom">
				<p class="center">
					<strong>Todos los jueves del 2013</strong> en el programa “Viva la Radio” emitido por Cadena 3, <strong>sortearemos 3 (tres) kits de vinos</strong> compuestos por un merlot y un cabernet sauvignon, para que pueda disfrutar de los productos <strong>Jairala Oller.</strong>
				</p>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<p class="center">
					<strong>Ya estas participando del sorteo.</strong>
					</p>
				</div>
			</div>
			<div class="row space-bottom">
				<div class="col-sm-4 col-sm-offset-1">
					<button type="button" class="btn btn-primary btn-lg btn-altura" id="btn_participa_off" onclick="shareApp('facebook')">Compartir</button>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<div class="text_">
						<span class="participa">
							¡Invitá a tus amigos a participar del sorteo y sumá chances de ganar!
						</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-out center">
					<span class="chica">
						Promoción sin obligación de compra. Solo válida para mayores de 18 años.
					</span>
				</div>
			</div>
		</div>
	</div>

  <?php
      }else{
  ?>
	<div class="formulario" id="formulario">
		<form role="form" id="fb-form" onsubmit="return false">
			<div class="row">
				<div class="col-sm-12 col-uot space-bottom bg-color">
					<h4>Mis Datos</h4>
					<span class="glyphicon glyphicon-remove" id="btn_close"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-sm-offset-1 avatar" id="avatar">
					<img src="" alt="avatar" width="60" heigth="60" />
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" >
							</div>
							<div class="form-group">
								<label for="mail">E-mail</label>
								<input type="email" class="form-control" id="mail" placeholder="ejemplo@dominio.com" name="mail" >
							</div>
							<div class="form-group">
								<label for="cumpleanos">Cumpleaños</label>
								<input type="text" class="form-control" placeholder="mm/dd/aaaa" id="birthday" name="birthday" >
							</div>
							<div class="form-group">
								<label for="sexo">Sexo</label>
								<select class="form-control" id="sexo" name="sexo" >
									<option value="0">Femenino</option>
									<option value="1">Masculino</option>
								</select>
							</div>
							<div class="form-group">
								<label for="localidad">Localidad</label>
								<input type="text" class="form-control" placeholder="Localidad" id="localidad" name="localidad" >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido" >
							</div>
							<div class="form-group">
								<label for="dni">DNI</label>
								<input type="text" class="form-control" placeholder="DNI" id="dni" name="dni" >
							</div>
							<div class="form-group">
								<label for="telefono">Cod. de Área + Teléfono</label>
								<input type="text" class="form-control" placeholder="0351-123456789" id="telefono" name="telefono" >
							</div>
							<div class="form-group">
								<label for="provincia">Provincia</label>
								<input type="text" class="form-control" placeholder="Provincia" id="provincia" name="provincia" >
							</div>
							<div class="form-group">
								<label for="domicilio">Domicilio</label>
								<input type="text" class="form-control" placeholder="Domicilio" id="domicilio" name="domicilio" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-uot space-bottom bg-color" style="margin-top:20px; height:70px; padding-top: 18px">
					<div class="col-sm-6">
						<div class="checkbox">
							<label>
								<input type="checkbox" id="perfil" name="perfil" value="3468" checked>Quiero participar del concurso y recibir promociones.
							</label>
						</div>
					</div>
					<div class="col-sm-2 col-sm-offset-4">
						<button type="submit" class="btn btn-color1 btn-default" id="submit">Aceptar</button>
					</div> 
				</div>
			</div>
			<input class="sr-only" type="hidden" class="form-control" id="id" value="<?php echo $datosInternos ?>" >
			<input class="sr-only" type="hidden" class="form-control" id="usuario" value="usuario" >
			<input class="sr-only" type="hidden" class="form-control" id="idSitio" value="175" >
			<input class="sr-only" type="hidden" class="form-control" id="idSegmento" value="1889" >
			<input class="sr-only" type="hidden" class="form-control" id="idPromocion" value="1" >
		</form>
	</div>
	<div class="capa_control" id="capa_control"></div>

	<div class="masterPage" id="masterPage">
		<div class="row">
			<div class="col-sm-12 col-out"><img src="img/top.jpg" width="810" heigth="340" alt="" /></div>
			<div class="col-sm-12 space-bottom">
				<p class="center">
					<strong>Todos los jueves del 2013</strong> en el programa “Viva la Radio” emitido por Cadena 3, <strong>sortearemos 3 (tres) kits de vinos</strong> compuestos por un merlot y un cabernet sauvignon, para que pueda disfrutar de los productos <strong>Jairala Oller.</strong>
				</p>
			</div>
			<div class="row space-bottom">
				<div class="col-sm-4 col-sm-offset-1">
					<button type="button" class="btn btn-primary btn-lg btn-altura" id="btn_participa_off" onclick="shareApp('facebook')" style="display:none;">Compartir</button>
					<button type="button" class="btn btn-color btn-lg" id="btn_participa">Participá</button>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<div class="text_">
						<span class="participa">
							¡Invitá a tus amigos a participar del sorteo y sumá chances de ganar!
						</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-out center">
					<span class="chica">
						Promoción sin obligación de compra. Solo válida para mayores de 18 años.
					</span>
				</div>
			</div>
		</div>
	</div>

  <?php
        
      }
    }else{
  ?>

  <div class="capa_control" id="capa_control" style="display:block;">
  	<div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-primary alerta-margen">
          <div class="panel-heading">
            <h3 class="panel-title">Pone Me Gusta</h3>
          </div>
          <div class="panel-body cambia_color">
            Debes poner me gusta para participar!!!
          </div>
        </div>
      </div>
    </div>
  </div>
	<div class="masterPage" id="masterPage">
		<div class="row">
			<div class="col-sm-12 col-out"><img src="img/top.jpg" width="810" heigth="340" alt="" /></div>
			<div class="col-sm-12 space-bottom">
				<p class="center">
					<strong>Todos los jueves del 2013</strong> en el programa “Viva la Radio” emitido por Cadena 3, <strong>sortearemos 3 (tres) kits de vinos</strong> compuestos por un merlot y un cabernet sauvignon, para que pueda disfrutar de los productos <strong>Jairala Oller.</strong>
				</p>
			</div>
			<div class="row space-bottom">
				<div class="col-sm-4 col-sm-offset-1">
					<button type="button" class="btn btn-color btn-lg" id="btn_participa_off">Participá</button>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<div class="text_">
						<span class="participa">
							¡Invitá a tus amigos a participar del sorteo y sumá chances de ganar!
						</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-out center">
					<span class="chica">
						Promoción sin obligación de compra. Solo válida para mayores de 18 años.
					</span>
				</div>
			</div>
		</div>
	</div>

  <?php
    }
  }
  ?>

	<div id="fb-root"></div>
	<!-- JavaScript plugins (requires jQuery) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Optionally enable responsive features in IE8 -->
  <script src="js/respond.min.js"></script>
  <!-- js Validity -->
	<script src="js/jquery.validity.js"></script>
	<!-- js principal -->
	<script src="js/class.js" type="text/javascript" charset="utf-8" async></script>
	<script src="js/app.js" type="text/javascript" charset="utf-8" async></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8" async></script>
	<script src="js/fb.js" type="text/javascript" charset="utf-8" async></script>
</body>
</html>