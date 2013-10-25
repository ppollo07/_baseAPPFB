<?php 
include_once 'class_ConfigDB.php'; 

class class_DB{ 
    /*** Declare instance ***/ 
    private static $instance = NULL; 
      
    /** 
     * 
     * the constructor is set to private so 
     * so nobody can create a new instance using new 
     * 
     */ 
    private function __construct() { 
        /*** maybe set the db name here later ***/ 
    } 
      
    /** 
     * 
     * Return DB instance or create intitial connection 
     * 
     * @return object (PDO) 
     * 
     * @access public 
     * 
     */ 
    public static function getInstance() { 
          
        if (!self::$instance) 
        { 
            $conexion = new class_ConfigBD(); 
            self::$instance = new PDO("mysql:host=$conexion->DBServer;dbname=$conexion->DBName",$conexion->UserName,$conexion->Password); //asi funciona y con variables NO. 
            self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } 
        return self::$instance; 
    } 
      
    /** 
     * 
     * Like the constructor, we make __clone private 
     * so nobody can clone the instance 
     * 
     */ 
    private function __clone(){ 
    } 
      
} /*** end of class ***/