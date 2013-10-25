<?php
class Personas {
	private $idPersona; 
	private $idSitio; 
	private $idSegmento; 
	private $Nombre; 
	private $Apellido; 
	private $fechaNac; 
	private $Dni; 
	private $Telefono; 
	private $Telefono2; 
	private $Telefono3; 
	private $Movil;
    private $Direccion;
	private $Empresa;
	private $nomFantasia;
	private $idPais;
	private $idProvincia;
	private $Localidad;
	private $Habilitado;
	private $Email;
	private $Usuario;
	private $Clave;
	private $Pref1;
	private $Pref2;
	private $Pref3;
	private $Observaciones;
	private $tipoPers;
	private $Dpto;
	private $Piso;
	private $fechaAlta;
	private $Cp;
	private $idPersonaDep;
	private $idSegmentoDep;
	private $idEstadoConfirmado;
    private $Sexo;
	private $Ip;
	private $Email2;
	private $visto;
	private $fechaBaja;
	private $fechaModificacion;
	private $Administrador;
	private $Barrio;
	private $datosInternos;
	private $Orden;
	private $idIdioma;
	private $idPersonaAlta;
	private $Numero;
    private $idPromocion;
    private $idPerfil;
    private $idPreferencia;

/*-------------------Constructor--------------*/
	public function __construct() { 
		$this->idPersona = "";
       	$this->idSitio = "";
    	$this->idSegmento = "";
    	$this->Nombre = "";
    	$this->Apellido = "";
    	$this->fechaNac = "";
    	$this->Dni = "";
    	$this->Telefono = "";
    	$this->Telefono2 = "";
    	$this->Telefono3 = "";
    	$this->Movil = "";
        $this->Direccion = "";
    	$this->Empresa = "";
    	$this->nomFantasia = "";
    	$this->idPais = "";
    	$this->idProvincia = "";
    	$this->Localidad = "";
    	$this->Habilitado = "";
    	$this->Email = "";
    	$this->Usuario = "";
    	$this->Clave = "";
    	$this->Pref1 = "";
    	$this->Pref2 = "";
    	$this->Pref3 = "";
    	$this->Observaciones = "";
    	$this->tipoPers = "";
    	$this->Dpto = "";
    	$this->Piso = "";
    	$this->fechaAlta = "";
    	$this->Cp = "";
    	$this->idPersonaDep = "";
    	$this->idSegmentoDep = "";
    	$this->idEstadoConfirmado = "";
        $this->Sexo = "";
    	$this->Ip = "";
    	$this->Email2 = "";
    	$this->visto = "";
    	$this->fechaBaja = "";
    	$this->fechaModificacion = "";
    	$this->Administrador = "";
    	$this->Barrio = "";
    	$this->datosInternos = "";
    	$this->Orden = "";
    	$this->idIdioma = "";
    	$this->idPersonaAlta = "";
    	$this->Numero = "";
        $this->idPromocion = "";
        $this->idPerfil = "";
        $this->idPreferencia = "";
	}

/*-------------------Set Methods--------------*/
	public function setidPersona($idPersona){
		$this->idPersona = $idPersona;
	}
	public function setidSitio($idSitio){
		$this->idSitio = $idSitio;
	}
	public function setidSegmento($idSegmento){
		$this->idSegmento = $idSegmento;
	}
	public function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}
	public function setApellido($Apellido){
		$this->Apellido = $Apellido;
	}
	public function setfechaNac($fechaNac){
		$this->fechaNac = $fechaNac;
	}
	public function setDni($Dni){
		$this->Dni = $Dni;
	}
	public function setTelefono($Telefono){
		$this->Telefono = $Telefono;
	}
	public function setTelefono2($Telefono2){
		$this->Telefono2 = $Telefono2;
	}
	public function setTelefono3($Telefono3){
		$this->Telefono3 = $Telefono3;
	}
	public function setMovil($Movil){
		$this->Movil = $Movil;
	}
    public function setDireccion($Direccion){
        $this->Direccion = $Direccion;
    }
	public function setEmpresa($Empresa){
		$this->Empresa = $Empresa;
	}
	public function setnomFantasia($nomFantasia){
		$this->nomFantasia = $nomFantasia;
	}
	public function setidPais($idPais){
		$this->idPais = $idPais;
	}
	public function setidProvincia($idProvincia){
		$this->idProvincia = $idProvincia;
	}
	public function setLocalidad($Localidad){
		$this->Localidad = $Localidad;
	}
	public function setHabilitado($Habilitado){
		$this->Habilitado = $Habilitado;
	}
	public function setEmail($Email){
		$this->Email = $Email;
	}
	public function setUsuario($Usuario){
		$this->Usuario = $Usuario;
	}
	public function setClave($Clave){
		$this->Clave = $Clave;
	}
	public function setPref1($Pref1){
		$this->Pref1 = $Pref1;
	}
	public function setPref2($Pref2){
		$this->Pref2 = $Pref2;
	}
	public function setPref3($Pref3){
		$this->Pref3 = $Pref3;
	}
	public function setObservaciones($Observaciones){
		$this->Observaciones = $Observaciones;
	}
	public function settipoPers($tipoPers){
		$this->tipoPers = $tipoPers;
	}
	public function setDpto($Dpto){
		$this->Dpto = $Dpto;
	}
	public function setPiso($Piso){
		$this->Piso = $Piso;
	}
	public function setfechaAlta($fechaAlta){
		$this->fechaAlta = $fechaAlta;
	}
	public function setCp($Cp){
		$this->Cp = $Cp;
	}
	public function setidPersonaDep($idPersonaDep){
		$this->idPersonaDep = $idPersonaDep;
	}
	public function setidSegmentoDep($idSegmentoDep){
		$this->idSegmentoDep = $idSegmentoDep;
	}
	public function setidEstadoConfirmado($idEstadoConfirmado){
		$this->idEstadoConfirmado = $idEstadoConfirmado;
	}
    public function setSexo($Sexo){
        $this->Sexo = $Sexo;
    }
	public function setIp($Ip){
		$this->Ip = $Ip;
	}
	public function setEmail2($Email2){
		$this->Email2 = $Email2;
	}
	public function setvisto($visto){
		$this->visto = $visto;
	}
	public function setfechaBaja($fechaBaja){
		$this->fechaBaja = $fechaBaja;
	}
	public function setfechaModificacion($fechaModificacion){
		$this->fechaModificacion = $fechaModificacion;
	}
	public function setAdministrador($Administrador){
		$this->Administrador = $Administrador;
	}
	public function setBarrio($Barrio){
		$this->Barrio = $Barrio;
	}
	public function setdatosInternos($datosInternos){
		$this->datosInternos = $datosInternos;
	}
	public function setOrden($Orden){
		$this->Orden = $Orden;
	}
	public function setidIdioma($idIdioma){
		$this->idIdioma = $idIdioma;
	}
	public function setidPersonaAlta($idPersonaAlta){
		$this->idPersonaAlta = $idPersonaAlta;
	}
	public function setNumero($Numero){
		$this->Numero = $Numero;
	}
    public function setidPromocion($idPromocion){
        $this->idPromocion = $idPromocion;
    }
    public function setidPerfil($idPerfil){
        $this->idPerfil = $idPerfil;
    }
    public function setidPreferencia($idPreferencia){
        $this->idPreferencia = $idPreferencia;
    }
/*-------------------Get Methods--------------*/
	public function getidPersona(){ return $this->idPersona; }
	public function getidSitio(){ return $this->idSitio; }
	public function getidSegmento(){ return $this->idSegmento; }
	public function getNombre(){ return $this->Nombre; }
	public function getApellido(){ return $this->Apellido; }
	public function getfechaNac(){ return $this->fechaNac; }
	public function getDni(){ return $this->Dni; }
	public function getTelefono(){ return $this->Telefono; }
	public function getTelefono2(){ return $this->Telefono2; }
	public function getTelefono3(){ return $this->Telefono3; }
	public function getMovil(){ return $this->Movil; }
    public function getDireccion(){ return $this->Direccion; }
	public function getEmpresa(){ return $this->Empresa; }
	public function getnomFantasia(){ return $this->nomFantasia; }
	public function getidPais(){ return $this->idPais; }
	public function getidProvincia(){ return $this->idProvincia; }
	public function getLocalidad(){ return $this->Localidad; }
	public function getHabilitado(){ return $this->Habilitado; }
	public function getEmail(){ return $this->Email; }
	public function getUsuario(){ return $this->Usuario; }
	public function getClave(){ return $this->Clave; }
	public function getPref1(){ return $this->Pref1; }
	public function getPref2(){ return $this->Pref2; }
	public function getPref3(){ return $this->Pref3; }
	public function getObservaciones(){ return $this->Observaciones; }
	public function gettipoPers(){ return $this->tipoPers; }
	public function getDpto(){ return $this->Dpto; }
	public function getPiso(){ return $this->Piso; }
	public function getfechaAlta(){ return $this->fechaAlta; }
	public function getCp(){ return $this->Cp; }
	public function getidPersonaDep(){ return $this->idPersonaDep; }
	public function getidSegmentoDep(){ return $this->idSegmentoDep; }
	public function getidEstadoConfirmado(){ return $this->idEstadoConfirmado; }
    public function getSexo(){ return $this->Sexo; }
	public function getIp(){ return $this->Ip; }
	public function getEmail2(){ return $this->Email2; }
	public function getvisto(){ return $this->visto; }
	public function getfechaBaja(){ return $this->fechaBaja; }
	public function getfechaModificacion(){ return $this->fechaModificacion; }
	public function getAdministrador(){ return $this->Administrador; }
	public function getBarrio(){ return $this->Barrio; }
	public function getdatosInternos(){ return $this->datosInternos; }
	public function getOrden(){ return $this->Orden; }
	public function getidIdioma(){ return $this->idIdioma; }
	public function getidPersonaAlta(){ return $this->idPersonaAlta; }
	public function getNumero(){ return $this->Numero; }
    public function getidPromocion(){ return $this->idPromocion; }
    public function getidPerfil(){ return $this->idPerfil; }
    public function getidPreferencia(){ return $this->idPreferencia; }

/*-------------------Other Methods--------------*/
	public function listarPersonas(){ 
    	$query = "SELECT idPersona,idSitio,idSegmento,Nombre,Apellido,fechaNac,Dni,Telefono,Telefono2,Telefono3,Movil,Direccion,Empresa,nomFantasia,idPais,idProvincia,Localidad,Habilitado,Email,Usuario,Clave,Pref1,Pref2,Pref3,Observaciones,tipoPers,Dpto,Piso,fechaAlta,Cp,idPersonaDep,idSegmentoDep,idEstadoConfirmado,Sexo,Ip,Email2,visto,fechaBaja,fechaModificacion,Administrador,Barrio,datosInternos,Orden,idIdioma,idPersonaAlta,Numero,idPromocion,idPerfil,idPreferencia FROM Personas"; 
    	try { 
    	    $comando = class_DB::getInstance()->prepare($query); 
    	    $comando->execute(); 
        	$registros = $comando->fetchAll(PDO::FETCH_OBJ);
            //$registros = $comando->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($registros);
        	return $registros;
    	}catch(PDOException $e){ 
    	    echo 'Error: ' . $e->getMessage(); 
    	} 
	}

    public static function buscarPersonas($datosInternos, $idPromocion, $idSitio){ 
    	//echo $datosInternos."----->".$idPromocion."----->".$idSitio;
        $query = "SELECT idPersona,idSitio,idSegmento,Nombre,Apellido,fechaNac,Dni,Telefono,Telefono2,Telefono3,Movil,Direccion,Empresa,nomFantasia,idPais,idProvincia,Localidad,Habilitado,Email,Usuario,Clave,Pref1,Pref2,Pref3,Observaciones,tipoPers,Dpto,Piso,fechaAlta,Cp,idPersonaDep,idSegmentoDep,idEstadoConfirmado,Sexo,Ip,Email2,visto,fechaBaja,fechaModificacion,Administrador,Barrio,datosInternos,Orden,idIdioma,idPersonaAlta,Numero,idPromocion,idPerfil,idPreferencia FROM Personas WHERE datosInternos = :datosInternos AND idPromocion = :idPromocion AND idSitio = :idSitio"; 
        try { 
            $comando = class_DB::getInstance()->prepare($query); 
            $comando->bindParam(':datosInternos', $datosInternos);
            $comando->bindParam(':idPromocion', $idPromocion);
            $comando->bindParam(':idSitio', $idSitio);
            $comando->execute();
            $registros = $comando->fetch(PDO::FETCH_ASSOC);
            //print_r($registros);
            if($row = $registros) { 
                //echo 'IGUALDAD';
                return true; 
            }else{ 
                //echo 'No hay resultado para esa consulta'; 
                return false; 
            } 

        }catch(PDOException $e){ 
            echo 'Error: ' . $e->getMessage(); 
        } 
    }

    public function guadarPersonas(){
        $query = "INSERT INTO 
                  Personas (idSitio,idSegmento,Nombre,Apellido,fechaNac,Dni,Telefono,Telefono2,Telefono3,Movil,Direccion,Empresa,nomFantasia,idPais,idProvincia,Localidad,Habilitado,Email,Usuario,Clave,Pref1,Pref2,Pref3,Observaciones,tipoPers,Dpto,Piso,fechaAlta,Cp,Sexo,Ip,Email2,Barrio,datosInternos,idIdioma,Numero,idPromocion,idPerfil,idPreferencia)
                  VALUES
                  (:idSitio,:idSegmento,:Nombre,:Apellido,:fechaNac,:Dni,:Telefono,:Telefono2,:Telefono3,:Movil,:Direccion,:Empresa,:nomFantasia,:idPais,:idProvincia,:Localidad,:Habilitado,:Email,:Usuario,:Clave,:Pref1,:Pref2,:Pref3,:Observaciones,:tipoPers,:Dpto,:Piso,:fechaAlta,:Cp,:Sexo,:Ip,:Email2,:Barrio,:datosInternos,:idIdioma,:Numero,:idPromocion,:idPerfil,:idPreferencia)";
        try { 
            $comando = class_DB::getInstance()->prepare($query); 
            $rows = $comando->execute(array(':idSitio' => $this->getidSitio(),':idSegmento' => $this->getidSegmento(),':Nombre' => $this->getNombre(),':Apellido' => $this->getApellido(),':fechaNac' => $this->getfechaNac(),':Dni' => $this->getDni(),':Telefono' => $this->getTelefono(),':Telefono2' => $this->getTelefono2(),':Telefono3' => $this->getTelefono3(),':Movil' => $this->getMovil(),':Direccion' => $this->getDireccion(),':Empresa' => $this->getEmpresa(),':nomFantasia' => $this->getnomFantasia(),':idPais' => $this->getidPais(),':idProvincia' => $this->getidProvincia(),':Localidad' => $this->getLocalidad(),':Habilitado' => $this->getHabilitado(),':Email' => $this->getEmail(),':Usuario' => $this->getUsuario(),':Clave' => $this->getClave(),':Pref1' => $this->getPref1(),':Pref2' => $this->getPref2(),':Pref3' => $this->getPref3(),':Observaciones' => $this->getObservaciones(),':tipoPers' => $this->gettipoPers(),':Dpto' => $this->getDpto(),':Piso' => $this->getPiso(),':fechaAlta' => $this->getfechaAlta(),':Cp' => $this->getCp(),':Sexo' => $this->getSexo(),':Ip' => $this->getIp(),':Email2' => $this->getEmail2(),':Barrio' => $this->getBarrio(),':datosInternos' => $this->getdatosInternos(),':idIdioma' => $this->getidIdioma(),':Numero' => $this->getNumero(),'idPromocion' => $this->getidPromocion(),'idPerfil' => $this->getidPerfil(),'idPreferencia' => $this->getidPreferencia()));
            if( $rows == 1 ){/*echo 'INSERT correcto';*/}
        }catch(PDOException $e){ 
            echo 'Error: ' . $e->getMessage(); 
        } 
    }

}
?>