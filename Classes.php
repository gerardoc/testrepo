<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classes
 *
 * @author gerardoc
 */
class MyClass {
    public $prop1="IM a class";
    public $lero="Lero Lero";
    
    function setProperty($newval, $setnew){
        (!isset($setnew) ? $this->lero="Lero Lero" : $this->lero=$setnew);
        $this->prop1=$newval;
        
    }
    
    function displayProperty(){
        echo $this->prop1."<br/>".$this->lero;
    }

    function __construct() {
        
    }

}

?>
