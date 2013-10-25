<?php 
class class_ConfigBD{ 
    public $DBServer; 
    public $DBName; 
    public $UserName; 
    public $Password; 
    function __construct(){ 
        $this->DBServer=''; 
        $this->UserName=''; 
        $this->Password=''; 
        $this->DBName=''; 
    } 
} 
?>