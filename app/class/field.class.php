<?php

/**
 * FIELD CLASS (Class that provides fields)
 * 
 * long description in mehreren Zeilen
 * 
 * PHP Version 5.4
 * 
 * @category    Form 
 * @package     Certification Tool
 * @author      Björn Brinkhoff <bjoern@brinkhoff.org>
 * @copyright   (c) 2015, Qvc
 * @license     http://domain.com/license.txt
 * @version     SVN: $id$
 * @link        http://domain.com/app/class/field.class.php <Beschreibung...blahblahblah>
 * @see         http://domain.com/app/examples/field.html 
 * @since       2015.04.29
 * @deprecated  false
 */



class Field {
    
    // Eigenschaften
    protected $label = '';    
    protected $type = '';
    protected $format = '';
    protected $allowedvalues = array();
    protected $defaultvalue = '';
    protected $value = '';
    protected $error = false;
    
    
    public function __construct($label, $type, $format, $allowedvalues, $defaultvalue, $value, $error) {
        $this->label = $label;
        $this->type = $type;
        $this->format = $format;
        $this->allowedvalues = $allowedvalues;
        $this->defaultvalue = $defaultvalue;
        $this->value = $value;
        $this->error = $error;
    }

        
    // Methoden
    public function setLabel( $label = null ) {
        if (!empty($label)) {
            $this->label = $label;
        }
    }

    public function getLabel() {
            return $this->label;
    }
   
    public function setType( $type = null ) {
        if (!empty($type)) {
            $this->type = $type;
        }
    }
    
    public function getType() {
        return $this->type;
    } 
    
    public function setFormat( $format = null ) {
        if (!empty($format)) {
            $this->format = $format;
        }
    }
    
    public function getFormat() {
        return $this->format;
    } 
    
    public function setAllowedvalues( $allowedvalues = null ) {
        if (!empty($allowedvalues)) {
            $this->allowedvalues = $allowedvalues;
        }
    } 
    
    public function getAllowedvalues() {
        return $this->allowedvalues;
    }
    
    public function setDefaultvalue( $defaultvalue = null ) {
        if (!empty($defaultvalue)) {
            $this->defaultvalue = $defaultvalue;
        }
    } 
    
    public function getDefaultvalue() {
        return $this->defaultvalue;
    }
    
     public function setValue( $value = null ) {
        if (!empty($value)) {
            $this->value = $value;
        }
    }
    
     public function getValue() {
        return $this->value;
    }
  
    
         public function setError( $error = null ) {
        if (!empty($error)) {
            $this->error = $error;
        }
    } 
    
    public function getError() {
        return $this->error;
    }
    
    public function validateField() {
        
    }
    
    public function resetField() {
        
    }
    
}
