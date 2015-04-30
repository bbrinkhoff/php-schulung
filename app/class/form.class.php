<?php

/**
 * FORM CLASS (Class that provides forms)
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
 * @link        http://domain.com/app/class/form.class.php <Beschreibung...blahblahblah>
 * @see         http://domain.com/app/examples/form.html 
 * @since       2015.04.29
 * @deprecated  false
 */



class Form {
    
    // Eigenschaften
    protected $title = '';    
    protected $type = '';
    protected $fieldlist = array();
    

    public function __construct($title, $type, $fieldlist) {
        $this->title = $title;
        $this->type = $type;
        $this->fieldlist = $fieldlist;
    }

    
    // Methoden
    public function setTitle( $title = null ) {
        if (!empty($title)) {
            $this->title = $title;
        }
    }

    public function getTitle() {
            return $this->title;
    }
   
    public function setType( $type = null ) {
        if (!empty($type)) {
            $this->type = $type;
        }
    }
    
    public function getType() {
        return $this->type;
    } 
    
    public function setFieldlist( $fieldlist = null ) {
        if (!empty($fieldlist)) {
            $this->fieldlist = $fieldlist;
        }
    }
    
    public function getFieldlist() {
        return $this->fieldlist;
    }
    
    public function sendForm() {
        
    }
  
    public function validateForm() {
        
    }
    
}

