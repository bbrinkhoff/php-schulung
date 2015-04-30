<?php

//PHPDoc / MS XML-basiertes Kommentarsystem aus C-Sharp - Standards für Dokumentation

/**
 * USER CLASS (short description)
 * 
 * long description in mehreren Zeilen
 * 
 * PHP Version 5.4
 * 
 * @category    User 
 * @package     Certification Tool
 * @author      Björn Brinkhoff <bjoern@brinkhoff.org>
 * @copyright   (c) 2015, Qvc
 * @license     http://domain.com/license.txt
 * @version     SVN: $id$
 * @link        http://domain.com/app/class/user.class.php <Beschreibung...blahblahblah>
 * @see         http://domain.com/app/examples/user.html 
 * @since       2015.04.29
 * @deprecated  false
 */

class User {
    
    // Eigenschaften
    protected $username = '';    
    protected $password = '';
    protected $email = '';

    protected $password_is_temporary = false;
    protected $password_expire_date = '';
    
    // Construktor
    public function __construct($username=null, $password=null, $email=null, $password_is_temporary=false, $password_expire_date=null) {
        $this->username = $this->setUsername($username);
        $this->password = $this->setPassword($password);
        $this->email = $this->setEmail($email);
        $this->password_is_temporary = $this->setPassword_is_temporary($password_is_temporary);
        $this->password_expire_date = $this->setPassword_expire_date($password_expire_date);
    }

    // Magische Methoden ("magic methods"): __call() / __destruct() / __sleep() / __callStatic() / __get() / __set() / __isset()
    //                                      __unset() / __construct() / __wakeup() / __toString() / __invoke() / __set_state()
    //                                      __clone() / __debugInfo()
        
    // Methoden
/**
 * short descprition
 * 
 * long description
 * 
 * @author  Björn Brinkhoff
 * @version 1.0
 * @since   0.1
 * 
 * @param string $username
 */
    public function setUsername( $username = null ) {
        if (!empty($username)) {
            $this->username = $username;
        }
    }

/**
 * short descprition
 * 
 * long description
 * 
 * @author  Björn Brinkhoff
 * @version 1.0
 * @since   0.1
 * 
 * @return string (oder z. B. "mixed", wenn der Typ nicht genau bekannt ist)
 */
    public function getUsername() {
            return $this->username;
    }
   
    public function setPassword( $password = null ) {
        if (!empty($password)) {
            $this->password = $password;
        }
    }
    
    public function getPassword() {
        return $this->password;
    } 
    
    public function setEmail( $email = null ) {
        if (!empty($email)) {
            $this->email = $email;
        }
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function setPassword_is_temporary ( $password_is_temporary = false ) {
        if (!empty($password_is_temporary)) {
            $this->password_is_temporary = $password_is_temporary;
        }
    }
    
    public function getPassword_is_temporary () {
        return $this->password_is_temporary;
    }
    
    public function setPassword_expire_date ( $password_expire_date = null ) {
        if (!empty($password_expire_date)) {
            $this->password_expire_date = $password_expire_date;
        }
    }
    
    public function getPassword_expire_date () {
        return $this->password_expire_date;
    }

    
}